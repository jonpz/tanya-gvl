<?php

namespace App\Models\Base;

use A17\Twill\Models\Model as TwillModel;
use Illuminate\Support\Arr;

class Model extends TwillModel
{
    public function computeBlocks(?string $locale = null): void
    {
        $locale = $locale ?? app()->getLocale();
        $fallbackLocale = config('translatable.use_property_fallback', false) ? config('translatable.fallback_locale') : $locale;

        $blocks = $this->blocks
            ->where('parent_id', null)
            ->map(function ($block) use ($locale, $fallbackLocale) {
                $block->childs = $this->blocks
                    ->where('parent_id', $block->id)
                    ->map(function ($blockChild) use ($locale, $fallbackLocale) {
                        $blockChild->childs = $this->blocks
                            ->where('parent_id', $blockChild->id)
                            ->map(function ($blockChildChild) use ($locale, $fallbackLocale) {
                                return $this->computeBlock($blockChildChild, $locale, $fallbackLocale);
                            })
                            ->values();

                        $block = $this->computeBlock($blockChild, $locale, $fallbackLocale);

                        return $block;
                    })
                    ->values();

                $block->unsetRelation('children');

                return $this->computeBlock($block, $locale, $fallbackLocale);
            })->values();

        $this->unsetRelation('blocks');
        $this->blocks = $blocks->values();
    }

    private function computeBlock($block, string $locale, ?string $fallbackLocale = null): array
    {
        // Handle translated content inputs.
        if (is_array($block->content) && count($block->content) > 0) {
            $blockContent = $block->content;
            foreach ($blockContent as $field => $value) {
                if (is_array($value)) {
                    if (isset($value[$locale]) || isset($value[$fallbackLocale])) {
                        $blockContent[$field] = $block->translatedInput($field);
                    } else {
                        foreach (config('translatable.locales') as $allowedLocale) {
                            if (isset($value[$allowedLocale])) {
                                $blockContent[$field] = null;
                                break;
                            }
                        }
                    }
                }
            }
            $block->content = $blockContent;
        }

        return $block->only(Arr::collapse(
            [
                [
                    'editor_name',
                    'position',
                    'type',
                    'content',
                ],
                ($block->childs && count($block->childs) > 0) ? ['childs'] : [],
            ]
        ));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class PageContentController extends Controller
{
    // use Twill\Traits\HasPreview;

    // protected $previewView = 'twill.preview';

    public function show(string $slug): InertiaResponse
    {
        $item = PageContent::publishedInListings()
            ->forSlug($slug)
            ->first();
        // $item = Cache::rememberForever(
        //     'page.content.' . app()->getLocale() . '.' . $slug,
        //     function () use ($slug) {
        //         $item = PageContent::publishedInListings()
        //             ->forSlug($slug)
        //             ->first();

        //         if ($item !== null) {
        //             $item->load('translations', 'medias', 'blocks');
        //         }

        //         return $item;
        //     }
        // );

        abort_if($item === null, Response::HTTP_NOT_FOUND);

        return Inertia::render('Page/Content', [
            'item' => $item->only([
                'title',
                'meta_title',
                'meta_description',
            ]),
        ]);
    }

    // protected function previewData($item)
    // {
    //     return $this->previewForInertia($item->only([
    //         'title',
    //         'meta_title',
    //         'meta_description',
    //     ]), [
    //         'page' => 'Page/Content',
    //     ]);
    // }
}

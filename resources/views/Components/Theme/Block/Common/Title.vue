<script setup lang="ts">
defineOptions({
    name: "BlockCommonTitle",
});

interface Props {
    block: Model.Block & PropsBlock
}

type PropsBlock = {
    content: {
        title?: string | null
    }
};

defineProps<Props>()
</script>

<template>
    <h1 v-if="block.content?.title && block.position == 1" v-html="block.content.title"
        class="text-center text-4xl font-semibold text-gray-900"></h1>
    <h2 v-if="block.content?.title && block.position != 1" v-html="block.content.title"
        class="text-center text-3xl font-semibold text-gray-900"></h2>
</template>

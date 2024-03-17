<script setup lang="ts">
import Head from "@Theme/Head.vue"

// defineOptions({
//   layoutName: 'FullPage',
// })

interface Props {
    item: Model.Page
    locale: string
}

defineProps<Props>()

const BlockCommonTitle = defineAsyncComponent(
    () => import("@Block/Common/Title.vue"),
)
</script>

<template>

    <Head :item="item"></Head>

    <div v-if="item?.blocks && Array.isArray(item.blocks) && item.blocks.length > 0
        " class="mx-auto w-full max-w-6xl">
        <div v-for="(block, index) in item.blocks" :key="index">
            <BlockCommonTitle v-if="block.type == 'app-title'" :block="block"></BlockCommonTitle>
        </div>
    </div>
</template>

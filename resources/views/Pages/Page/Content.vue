<script setup lang="ts">
import Head from "@Theme/Head.vue";

// defineOptions({
//   layoutName: 'FullPage',
// })

interface Props {
    item: Model.Page;
    locale: string;
}

defineProps<Props>();
</script>

<template>
    <Head :item="item"></Head>
    <div
        class="bg-gray-200 w-full h-screen flex flex-col justify-center items-center"
    >
        <h1 class="text-center text-4xl font-semibold text-gray-900">
            {{ item.title }}
        </h1>
    </div>
</template>

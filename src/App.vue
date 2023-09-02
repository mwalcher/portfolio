<script setup lang="ts">
import { useSeoMeta } from '@unhead/vue';
import { defaultMeta, metaImageSize } from '@/constants/metaData';
import { useRoute } from 'vue-router';

const currentRoute = useRoute();

useSeoMeta({
  title: defaultMeta.title,
  description: defaultMeta.description,
  ogImage: defaultMeta.image,
  ogImageHeight: metaImageSize,
  ogImageWidth: metaImageSize,
  ogUrl: currentRoute.path,
  ogType: 'website',
  ogSiteName: defaultMeta.title,
});
</script>

<template>
  <RouterView />
</template>

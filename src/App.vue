<script setup lang="ts">
import { defaultMeta, metaImageSize, titleTemplate } from '@/constants/metaData';
import { useSeoMeta } from '@unhead/vue';
import { useRoute } from 'vue-router';

const currentRoute = useRoute();

useSeoMeta({
  title: titleTemplate(),
  description: defaultMeta.description,
  ogImage: defaultMeta.image,
  ogImageHeight: metaImageSize,
  ogImageWidth: metaImageSize,
  ogUrl: currentRoute.path,
  ogType: 'website',
  ogSiteName: titleTemplate(),
  themeColor: '#339933',
});
</script>

<template>
  <RouterView />
</template>

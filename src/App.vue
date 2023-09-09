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
  themeColor: defaultMeta.themeColour,
  ogUrl: currentRoute.path,
  ogType: 'website',
  ogSiteName: titleTemplate(),
});
</script>

<template>
  <RouterView />
</template>

<script setup lang="ts">
import type { TabContentListItem } from '@/@types/components';
defineProps<{
  iconList: TabContentListItem[];
}>();
</script>

<template>
  <div v-if="iconList" class="interactive-icon-block">
    <div v-for="item in iconList" :key="item.label" class="icon-container">
      <div class="shape">
        <div class="icon">
          <div class="image" :style="{ backgroundImage: `url(${item.icon})` }" />
        </div>
        <div class="label">
          <h3>{{ item.label }}</h3>
        </div>
      </div>
      <a
        v-if="item.link"
        class="icon-link"
        :href="item.link"
        target="_blank"
        rel="noopener"
        :aria-label="item.label"
      >
        <span class="invisible">{{ item.label }}</span>
      </a>
    </div>
  </div>
</template>

<style lang="scss" module></style>

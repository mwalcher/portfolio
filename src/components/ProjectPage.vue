<script setup lang="ts">
import Footer from '@/components/FooterSection.vue';
import Header from '@/components/HeaderBar.vue';
import Hero from '@/components/HeroSection.vue';
import MainContent from '@/components/MainContent.vue';
import { contactNav, homeNav } from '@/constants/navigation';
import { projects } from '@/constants/projects';
import type { TabContentProp } from '@/types/components';
import type { IsMenuItem, Menu } from '@/types/navigation';
import type { IsProject } from '@/types/projects';
import { computed, onMounted, onUnmounted } from 'vue';

const props = defineProps<{
  projectKey: IsProject['key'];
}>();

const heroId = 'overview';
const contentId = 'showcase';
const currentProject = computed(() => projects.find((project) => project.key === props.projectKey));

const contentNav: IsMenuItem = {
  fullLabel: `Showcase for ${currentProject.value?.name}`,
  icon: 'fa-mobile',
  label: 'Showcase',
  link: `#${contentId}`,
};

const menu: Menu = [
  { ...homeNav, label: 'Home' },
  {
    fullLabel: `Overview of ${currentProject.value?.name}`,
    icon: 'fa-folder-open',
    label: 'Overview',
    link: `#${heroId}`,
  },
  contentNav,
  contactNav,
];

const tabContentList: TabContentProp = [
  {
    title: `About ${currentProject.value?.name}`,
    content: currentProject.value?.tabContent.about,
  },
  {
    title: 'What I Did',
    content: currentProject.value?.tabContent.technical,
  },
];

const handleBodyClass = () => {
  const body = window.document.body;
  const projectClass = props.projectKey;

  if (body.classList.contains(projectClass)) {
    body.classList.remove(projectClass);
  } else {
    body.classList.add(projectClass);
  }
};

onMounted(() => {
  handleBodyClass();
});

onUnmounted(() => {
  handleBodyClass();
});
</script>

<template>
  <div class="fixedBackground" :style="{ backgroundImage: `url(${currentProject?.image})` }"></div>
  <Header :menu="menu" />
  <main>
    <Hero
      :id="heroId"
      :pageTitle="currentProject?.name"
      :content="currentProject?.description"
      buttonText="Explore Project"
      :buttonLabel="contentNav.fullLabel"
      :buttonLink="contentNav.link"
      :tabContentList="tabContentList"
    />
    <MainContent :id="contentId" sectionTitle="Showcase">Showcase Content</MainContent>
  </main>
  <Footer />
</template>

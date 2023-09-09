<script setup lang="ts">
import Footer from '@/components/FooterSection.vue';
import Header from '@/components/HeaderBar.vue';
import Hero from '@/components/HeroSection.vue';
import MainContent from '@/components/MainContent.vue';
import ProjectList from '@/components/ProjectList.vue';
import ShowcaseSlider from '@/components/ShowcaseSlider.vue';
import { titleTemplate } from '@/constants/metaData';
import { contactNav, homeNav } from '@/constants/navigation';
import { projects } from '@/constants/projects';
import type { TabContentProp } from '@/types/components';
import type { IsPageMeta } from '@/types/metaData';
import type { IsMenuItem, Menu } from '@/types/navigation';
import type { IsProject } from '@/types/projects';
import { useSeoMeta } from '@unhead/vue';
import { computed, onMounted, onUnmounted } from 'vue';
import { useRoute } from 'vue-router';

const props = defineProps<{
  projectKey: IsProject['key'];
}>();

const heroId = 'overview';
const contentId = 'showcase';
const currentProject = computed(() => projects.find((project) => project.key === props.projectKey));
const otherProjects = computed(() => projects.filter((project) => project.key !== props.projectKey));
const currentRoute = useRoute();

const projectMeta: IsPageMeta = {
  title: currentProject.value?.name || '',
  description: currentProject.value?.description || '',
  image: currentProject.value?.metaImage || '',
  themeColour: currentProject.value?.themeColour || '',
};

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

useSeoMeta({
  title: titleTemplate(projectMeta.title),
  description: projectMeta.description,
  ogImage: projectMeta.image,
  ogUrl: currentRoute.path,
  ogTitle: titleTemplate(projectMeta.title),
  ogSiteName: titleTemplate(projectMeta.title),
  themeColor: projectMeta.themeColour,
});

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
    <MainContent :id="contentId" sectionTitle="Showcase">
      <ShowcaseSlider
        :projectImages="currentProject?.sliderImages"
        :projectLink="currentProject?.website"
        :projectName="currentProject?.name"
      />
      <ProjectList :projects="otherProjects" title="Other Projects" />
    </MainContent>
  </main>
  <Footer />
</template>

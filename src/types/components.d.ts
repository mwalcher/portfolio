import type { IsLink } from '@/types/navigation';
export interface IsTabContentListItem extends IsLink {
  icon: string;
}
export interface IsTabContentItem {
  content?: string[];
  list?: IsTabContentListItem[];
  title: string;
}

export type TabContentProp = IsTabContentItem[];

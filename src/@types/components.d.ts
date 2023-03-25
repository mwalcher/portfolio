export interface TabContentItem {
  content?: string[];
  list?: { key: string; label: string; link: string }[];
  title: string;
}

export type TabContentProp = TabContentItem[];

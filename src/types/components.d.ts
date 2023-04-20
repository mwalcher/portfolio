export interface TabContentListItem {
  icon: string;
  label: string;
  link: string;
}
export interface TabContentItem {
  content?: string[];
  list?: TabContentListItem[];
  title: string;
}

export type TabContentProp = TabContentItem[];

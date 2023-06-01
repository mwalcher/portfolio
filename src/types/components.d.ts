export interface IsTabContentListItem {
  icon: string;
  label: string;
  link: string;
}
export interface IsTabContentItem {
  content?: string[];
  list?: IsTabContentListItem[];
  title: string;
}

export type TabContentProp = IsTabContentItem[];

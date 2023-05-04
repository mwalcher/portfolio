export interface Link {
  fullLabel: string;
  label: string;
  link: string;
}

export interface MenuItem extends Link {
  icon: string;
}

export type Menu = MenuItem[];

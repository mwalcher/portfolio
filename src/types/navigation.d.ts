export interface IsLink {
  fullLabel: string;
  label: string;
  link: string;
}

export interface IsMenuItem extends IsLink {
  icon: string;
}

export type Menu = IsMenuItem[];

import { SVGProps } from "react";

interface Props {
  icon: React.ElementType<SVGProps<SVGSVGElement>>;
  children: React.ReactNode;
}

export const KeyTechnology = ({ icon: Icon, children }: Props) => (
  <li className="d:text-gray-400 flex items-center gap-2 text-typography">
    <Icon className="h-7 w-7 fill-gray-400" />
    {children}
  </li>
);

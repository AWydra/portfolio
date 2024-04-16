import { SVGProps } from "react";
import cn from "classnames";

interface Props extends React.HTMLAttributes<HTMLElement> {
  icon: React.ElementType<SVGProps<SVGSVGElement>>;
  children: React.ReactNode;
}

export const KeyTechnology = ({ icon: Icon, className, children }: Props) => (
  <li
    className={cn(
      "d:text-gray-400 flex items-center gap-2 text-typography",
      className,
    )}
  >
    <Icon className="h-7 w-7" />
    {children}
  </li>
);

import React, { ReactNode } from "react";
import cn from "classnames";

interface Props extends React.HTMLAttributes<HTMLElement> {
  children: ReactNode;
}

export const SectionTitle = ({ className, children, ...props }: Props) => (
  <h2
    className={cn(
      "relative flex pl-5 text-[42px] font-bold leading-tight text-white before:absolute before:left-0 before:block before:h-[1.25em] before:w-2 before:bg-secondary",
      className,
    )}
    {...props}
  >
    {children}
  </h2>
);

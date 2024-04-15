import React from "react";
import cn from "classnames";

interface Props extends React.HTMLAttributes<HTMLElement> {
  children: React.ReactNode;
}

export const Heading = ({ children, className }: Props) => (
  <h3 className={cn("text-2xl font-bold text-white", className)}>{children}</h3>
);

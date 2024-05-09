import React, { SVGProps } from "react";
import cn from "classnames";

type BaseProps = {
  children: React.ReactNode;
  className?: string;
  icon?: React.ElementType<SVGProps<SVGSVGElement>>;
};

type ButtonProps = BaseProps &
  (
    | (React.HTMLAttributes<HTMLButtonElement> & {
        as?: "button";
      })
    | (React.HTMLAttributes<HTMLAnchorElement> & {
        as: "link";
      })
  );

export const Button = ({
  className,
  children,
  icon: Icon,
  ...props
}: ButtonProps) => {
  props.as = props.as || "button";
  const allClassNames = cn(
    className,
    "flex cursor-pointer items-center justify-center gap-2 rounded-md bg-white bg-opacity-10 px-4 py-2 font-bold slide-bg-white overflow-hidden [&_path]:fill-secondary",
  );

  const content = (
    <>
      {Icon && <Icon className="h-4 w-4" />}
      {children}
    </>
  );

  if (props.as === "link") {
    const { as, ...rest } = props;
    return (
      <a className={allClassNames} {...rest}>
        {content}
      </a>
    );
  }
  const { as, ...rest } = props;
  return (
    <button className={allClassNames} {...rest}>
      {content}
    </button>
  );
};

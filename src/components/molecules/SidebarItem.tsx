import Link from "next/link";
import { ReactNode } from "react";

interface Props {
  href: string;
  children: ReactNode;
}

export const SidebarItem = ({ href, children }: Props) => (
  <li className="text-xl font-semibold uppercase text-white">
    <Link
      href={href}
      className="relative py-1 transition after:absolute after:left-[calc(100%+0.5em)] after:top-1/2 after:block after:h-[5px] after:w-0 after:-translate-y-1/2 after:bg-secondary after:transition-[width] hover:text-secondary hover:after:w-10"
    >
      {children}
    </Link>
  </li>
);

import Link from "next/link";

interface Props {
  href: string;
  children: React.ReactNode;
}

export const SidebarItem = ({ href, children }: Props) => (
  <Link
    href={href}
    className="relative flex items-center p-3 text-lg font-medium transition-colors duration-[250ms] slide-strikethrough-secondary hover:text-white"
  >
    {children}
  </Link>
);

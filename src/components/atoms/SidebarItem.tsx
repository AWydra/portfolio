interface Props {
  children: React.ReactNode;
}

export const SidebarItem = ({ children }: Props) => (
  <a
    href="#"
    className="relative flex items-center p-3 text-lg font-medium transition-colors duration-[250ms] after:absolute after:bottom-0 after:h-full after:w-1 after:origin-bottom-left after:scale-y-0 after:bg-secondary after:transition after:duration-[250ms] hover:text-white hover:after:origin-top-left hover:after:scale-y-100"
  >
    {children}
  </a>
);

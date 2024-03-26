import { LogoIcon } from "@/icons/Logo";
import { SidebarItem } from "./SidebarItem";

export const Sidebar = () => (
  <aside className="fixed flex h-full w-80 flex-col items-start bg-primary pb-8 pt-11">
    <div className="flex w-full flex-col items-center">
      <LogoIcon className="h-36 w-40 fill-secondary" />
      <p className="text-center text-2xl font-bold uppercase tracking-wide text-white">
        Arkadiusz <span className="text-secondary">Wydra</span>
      </p>
    </div>
    <nav className="mt-16 pl-7">
      <ul className="flex flex-col gap-4">
        <SidebarItem href="#">Start</SidebarItem>
        <SidebarItem href="#about">O mnie</SidebarItem>
        <SidebarItem href="#skills">Umiejętności</SidebarItem>
        <SidebarItem href="#contact">Kontakt</SidebarItem>
      </ul>
    </nav>
  </aside>
);

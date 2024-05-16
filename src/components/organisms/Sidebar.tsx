import { LogoIcon } from "@/icons/Logo";
import { SidebarItem } from "../atoms/SidebarItem";
import { SectionId } from "@/enums/SectionId.enum";

export const Sidebar = () => (
  <header className="fixed left-0 top-0 hidden h-full w-32 flex-col items-center border-b border-b-gray-800 py-12 md:flex">
    <LogoIcon className="h-8 w-16 fill-secondary md:h-11" />
    <nav className="mt-10 flex text-typography">
      <div className="relative flex rotate-180 flex-row-reverse gap-6 [writing-mode:vertical-lr]">
        <SidebarItem href={`#${SectionId.ABOUT}`}>About</SidebarItem>
        <SidebarItem href={`#${SectionId.TECHNOLOGIES}`}>
          Technologies
        </SidebarItem>
        <SidebarItem href={`#${SectionId.CONTACT}`}>Contact</SidebarItem>
      </div>
    </nav>
  </header>
);

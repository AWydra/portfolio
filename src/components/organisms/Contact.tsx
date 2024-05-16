import { SectionTitle } from "../atoms/SectionTitle";
import { Button } from "../atoms/Button";
import { LinkedInIcon } from "@/icons/LinkedIn";
import { EmailIcon } from "@/icons/Email";
import { SectionId } from "@/enums/SectionId.enum";

export const Contact = () => (
  <section
    className="flex w-full max-w-[600px] flex-col items-center gap-10 py-20 text-white lg:max-w-[1100px]"
    id={SectionId.CONTACT}
  >
    <SectionTitle>Keep In Touch</SectionTitle>
    <div className="text-center text-lg">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae!</p>
    </div>
    <div className="flex gap-4">
      <Button as="link" icon={LinkedInIcon}>
        LinkedIn
      </Button>
      <Button icon={EmailIcon}>Say hello</Button>
    </div>
  </section>
);

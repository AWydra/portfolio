import { SectionTitle } from "../atoms/SectionTitle";

export const Contact = () => (
  <section className="flex w-full max-w-[600px] flex-col items-center gap-10 py-20 text-white lg:max-w-[1100px]">
    <SectionTitle>Keep In Touch</SectionTitle>
    <div className="text-center text-lg">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae!</p>
    </div>
    <div className="flex gap-4">
      <button className="rounded-sm bg-secondary px-5 py-2 text-white">
        Button1
      </button>
      <button className="rounded-sm bg-white px-5 py-2 text-secondary">
        Button2
      </button>
    </div>
  </section>
);

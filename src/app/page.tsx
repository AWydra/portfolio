import { Hero } from "@/components/organisms/Hero";
import { About } from "@/components/organisms/About";
import { Technologies } from "@/components/organisms/Technologies";
import { Contact } from "@/components/organisms/Contact";

const Home = () => {
  return (
    <div className="flex flex-col items-center">
      <Hero />
      <div className="px-6 sm:px-[4vw] lg:px-[7vw]">
        <About />
        <Technologies />
        <Contact />
      </div>
    </div>
  );
};

export default Home;

import { Hero } from "@/components/organisms/Hero";
import { About } from "@/components/organisms/About";

const Home = () => {
  return (
    <main className="flex flex-col items-center">
      <Hero />
      <About />
    </main>
  );
};

export default Home;

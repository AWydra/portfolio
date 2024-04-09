import Image from "next/image";
import { SectionTitle } from "../atoms/SectionTitle";

export const About = () => {
  return (
    <section className="min-h-[100vh] max-w-[1100px]">
      <SectionTitle>About me</SectionTitle>
      <div className="mt-8 grid max-w-[600px] gap-12 pb-8 text-typography lg:max-w-none lg:grid-cols-2">
        <div className="text-xl leading-8">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
            inventore quidem um expedita quod repellat, consequuntur corrupti?
            Laborum, itaque in amet dolorem tenetur autem distinctio ex a hic
            reprehenderit voluptates porro eum, in quasi est nulla velit eaque
            quae quas?
          </p>
          <p className="mt-10">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
            officiis earum expedita quod repellat, consequuntur corrupti?
            Laborum, itaque in amet et quas ipsam nisi possimus ducimus
            provident delectus dignissimos aut.
          </p>
        </div>
        <div className="relative before:absolute before:-bottom-6 before:-right-6 before:h-[50px] before:w-2 before:bg-secondary after:absolute after:-bottom-6 after:-right-6 after:h-2 after:w-[50px] after:bg-secondary lg:pt-32">
          <Image
            src="/portrait.jpeg"
            alt="Portrait"
            width={1190}
            height={1600}
          />
        </div>
      </div>
    </section>
  );
};

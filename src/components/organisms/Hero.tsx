import React from "react";
import { KeyTechnology } from "../atoms/KeyTechnology";
import { NextjsIcon } from "@/icons/Nextjs";
import { NodejsIcon } from "@/icons/Nodejs";
import { TizenIcon } from "@/icons/Tizen";
import { ReactIcon } from "@/icons/React";
import { LogoIcon } from "@/icons/Logo";

export const Hero = () => {
  return (
    <section className="relative flex h-[100svh] min-h-[500px] w-full flex-col px-9 pt-[10vh] sm:px-[4vw] md:pt-[22vh] lg:px-[7vw]">
      <LogoIcon className="absolute bottom-14 right-0 h-[20vh] w-auto translate-x-[30%] fill-white opacity-15 md:left-[20vw] md:h-[90vh] md:translate-x-0" />
      <div className="z-10 flex w-fit flex-col items-start">
        <div className="relative before:absolute before:-bottom-[13px] before:-left-[28px] before:h-[110%] before:w-3 before:bg-secondary">
          <p className="text-display2 font-semibold text-secondary">
            Hey there, I&apos;m
          </p>
          <h1 className="text-display font-bold leading-[95%] text-white md:tracking-tight">
            Arkadiusz Wydra
          </h1>
        </div>
        <p className="mt-10 text-display2 font-semibold leading-tight -tracking-[1.6px] text-gray-500 md:mt-8 md:w-[80%] lg:w-[60%]">
          <span className="text-white">Software Engineer.</span> A self-taught
          developer with an interest in Computer Science.
        </p>
        <ul className="mt-8 grid grid-cols-2 gap-6 md:flex">
          <KeyTechnology
            className="[&_circle]:fill-gray-400 [&_g]:stroke-gray-400"
            icon={ReactIcon}
          >
            React
          </KeyTechnology>
          <KeyTechnology className="[&_path]:fill-gray-400" icon={NextjsIcon}>
            Next.js
          </KeyTechnology>
          <KeyTechnology className="[&_path]:fill-gray-400" icon={NodejsIcon}>
            Node.js
          </KeyTechnology>
          <KeyTechnology className="[&_path]:fill-gray-400" icon={TizenIcon}>
            Samsung TV
          </KeyTechnology>
        </ul>
      </div>
    </section>
  );
};

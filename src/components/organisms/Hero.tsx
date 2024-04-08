import React from "react";
import { KeyTechnology } from "../atoms/KeyTechnology";
import { NextjsIcon } from "@/icons/Nextjs";
import { NodejsIcon } from "@/icons/Nodejs";
import { TizenIcon } from "@/icons/Tizen";
import { ReactIcon } from "@/icons/React";
import { LogoIcon } from "@/icons/Logo";

export const Hero = () => {
  return (
    <section className="relative flex h-[100svh] min-h-[500px] w-full flex-col pt-[10vh] md:pt-[22vh]">
      <LogoIcon className="absolute bottom-14 left-[40vw] h-[20vh] w-auto fill-white opacity-15 md:left-[20vw] md:h-[90vh]" />
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
          <KeyTechnology icon={ReactIcon}>React</KeyTechnology>
          <KeyTechnology icon={NextjsIcon}>Next.js</KeyTechnology>
          <KeyTechnology icon={NodejsIcon}>Node.js</KeyTechnology>
          <KeyTechnology icon={TizenIcon}>Samsung TV</KeyTechnology>
        </ul>
      </div>
    </section>
  );
};

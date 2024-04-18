import { ReactIcon } from "@/icons/React";
import { Heading } from "../atoms/Heading";
import { KeyTechnology } from "../atoms/KeyTechnology";
import { SectionTitle } from "../atoms/SectionTitle";
import { NextjsIcon } from "@/icons/Nextjs";
import { NodejsIcon } from "@/icons/Nodejs";
import { TizenIcon } from "@/icons/Tizen";
import { TechnologyGroup } from "../molecules/TechnologyGroup";
import { HtmlIcon } from "@/icons/Html";
import { CssIcon } from "@/icons/Css";
import { SassIcon } from "@/icons/Sass";
import { LessIcon } from "@/icons/Less";
import { JsIcon } from "@/icons/Js";
import { TsIcon } from "@/icons/Ts";
import { ReduxIcon } from "@/icons/Redux";
import { MuiIcon } from "@/icons/Mui";
import { TailwindIcon } from "@/icons/Tailwind";
import { ChakraUiIcon } from "@/icons/ChakraUi";
import { MantineIcon } from "@/icons/Mantine";
import { PwaIcon } from "@/icons/Pwa";
import { ExpressIcon } from "@/icons/Express";
import { MySqlIcon } from "@/icons/MySql";
import { PostgreSqlIcon } from "@/icons/PostgreSql";
import { FirebaseIcon } from "@/icons/Firebase";
import { MongoDbIcon } from "@/icons/MongoDb";
import { AwsIcon } from "@/icons/Aws";
import { StrapiIcon } from "@/icons/Strapi";
import { JestIcon } from "@/icons/Jest";
import { ReactTestingLibraryIcon } from "@/icons/ReactTestingLibrary";
import { CypressIcon } from "@/icons/Cypress";
import { BackstopIcon } from "@/icons/Backstop";
import { JenkinsIcon } from "@/icons/Jenkins";
import { AzureIcon } from "@/icons/Azure";
import { WebOsIcon } from "@/icons/WebOs";

export const Technologies = () => (
  <section className="w-full max-w-[600px] py-20 lg:max-w-[1100px]">
    <SectionTitle>Technologies</SectionTitle>
    <div className="mt-10 flex flex-col gap-10">
      <TechnologyGroup heading="Frontend">
        <KeyTechnology icon={HtmlIcon}>HTML</KeyTechnology>
        <KeyTechnology icon={CssIcon}>CSS</KeyTechnology>
        <KeyTechnology icon={LessIcon}>Less</KeyTechnology>
        <KeyTechnology icon={SassIcon}>Sass</KeyTechnology>
        <KeyTechnology icon={JsIcon}>JavaScript</KeyTechnology>
        <KeyTechnology icon={TsIcon}>TypeScript</KeyTechnology>
        <KeyTechnology icon={ReactIcon}>React</KeyTechnology>
        <KeyTechnology icon={ReduxIcon}>Redux</KeyTechnology>
        <KeyTechnology icon={NextjsIcon}>Next.js</KeyTechnology>
        <KeyTechnology icon={TailwindIcon}>Tailwind CSS</KeyTechnology>
        <KeyTechnology icon={MuiIcon}>Material UI</KeyTechnology>
        <KeyTechnology icon={ChakraUiIcon}>Chakra UI</KeyTechnology>
        <KeyTechnology icon={MantineIcon}>Mantine</KeyTechnology>
        <KeyTechnology icon={PwaIcon}>PWA</KeyTechnology>
      </TechnologyGroup>
      <TechnologyGroup heading="Backend">
        <KeyTechnology icon={NodejsIcon}>Node.js</KeyTechnology>
        <KeyTechnology icon={ExpressIcon}>Express</KeyTechnology>
        <KeyTechnology icon={FirebaseIcon}>Firebase</KeyTechnology>
        <KeyTechnology icon={MySqlIcon}>MySQL</KeyTechnology>
        <KeyTechnology icon={PostgreSqlIcon}>PostgreSQL</KeyTechnology>
        <KeyTechnology icon={MongoDbIcon}>MongoDB</KeyTechnology>
        <KeyTechnology icon={AwsIcon}>AWS</KeyTechnology>
        <KeyTechnology icon={StrapiIcon}>Strapi</KeyTechnology>
      </TechnologyGroup>
      <TechnologyGroup heading="Testing & DevOps">
        <KeyTechnology icon={JestIcon}>Jest</KeyTechnology>
        <KeyTechnology icon={ReactTestingLibraryIcon}>RTL</KeyTechnology>
        <KeyTechnology icon={CypressIcon}>Cypress</KeyTechnology>
        <KeyTechnology icon={BackstopIcon}>BackstopJS</KeyTechnology>
        <KeyTechnology icon={JenkinsIcon}>Jenkins</KeyTechnology>
        <KeyTechnology icon={AzureIcon}>Azure DevOps</KeyTechnology>
      </TechnologyGroup>
      <TechnologyGroup heading="TVs">
        <KeyTechnology icon={TizenIcon}>Tizen OS</KeyTechnology>
        <KeyTechnology icon={WebOsIcon}>LG webOS</KeyTechnology>
      </TechnologyGroup>
    </div>
  </section>
);

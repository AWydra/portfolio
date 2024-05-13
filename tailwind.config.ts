import type { Config } from "tailwindcss";
import plugin from "tailwindcss/plugin";
const flattenColorPalette =
  require("tailwindcss/lib/util/flattenColorPalette").default;
const { parseColor } = require("tailwindcss/lib/util/color");

const transformBaseString =
  "translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))";

const fluidTypography = (minFont: number, maxFont: number) => {
  let XX = 768 / 100;
  let YY = (100 * (maxFont - minFont)) / (1920 - 768);
  let ZZ = minFont / 16;
  return `calc(${ZZ}rem + ((1vw - ${XX}px) * ${YY}))`;
};

const config: Config = {
  content: ["./src/**/*.{js,ts,jsx,tsx,mdx}"],
  theme: {
    screens: {
      sm: "640px",
      md: "800px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
    },
    extend: {
      backgroundImage: {
        "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        "gradient-conic":
          "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
      },
      colors: {
        primary: "#041230",
        secondary: "#ff7800",
        page: "#030516",
        typography: "#cfcfcf",
      },
      fontSize: {
        display: fluidTypography(80, 144),
        display2: fluidTypography(24, 36),
        display3: fluidTypography(18, 24),
      },
    },
  },
  plugins: [
    plugin(function ({ matchUtilities, theme }) {
      matchUtilities(
        {
          "translate-z": (value) => ({
            "--tw-translate-z": value,
            transform: `translate3d(var(--tw-translate-x), var(--tw-translate-y), var(--tw-translate-z)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))`,
          }),
        },
        { values: theme("translate"), supportsNegativeValues: true },
      );
    }),
    plugin(({ matchUtilities, theme }) => {
      matchUtilities(
        {
          "slide-underline": (value) => {
            const { color } = parseColor(value);

            return {
              paddingBottom: "2px",
              transitionDuration: "0.25s",
              transitionTimingFunction: "cubic-bezier(0.4, 0, 0.2, 1)",
              transitionProperty: "background-size",
              background: `linear-gradient(rgb(${color[0]} ${color[1]} ${color[2]}), rgb(${color[0]} ${color[1]} ${color[2]})) no-repeat 100% 100% / 0 2px,
                           linear-gradient(rgba(${color[0]} ${color[1]} ${color[2]} / 0.3), rgba(${color[0]} ${color[1]} ${color[2]} / 0.3)) no-repeat 0 100% / 100% 2px`,
              outline: "none",
              "&:hover, &:focus-visible": {
                background: `linear-gradient(rgb(${color[0]} ${color[1]} ${color[2]}), rgb(${color[0]} ${color[1]} ${color[2]})) no-repeat 0 100% / 100% 2px,
                             linear-gradient(rgba(${color[0]} ${color[1]} ${color[2]} / 0.3), rgba(${color[0]} ${color[1]} ${color[2]} / 0.3)) no-repeat 0 100% / 100% 2px`,
              },
            };
          },
        },
        { values: flattenColorPalette(theme("colors")), type: "color" },
      );
    }),
    plugin(({ matchUtilities, theme }) => {
      matchUtilities(
        {
          "slide-strikethrough": (value) => {
            const { color } = parseColor(value);

            return {
              outline: "none",
              "&:after": {
                content: "var(--tw-content)",
                position: "absolute",
                bottom: "0",
                height: "100%",
                width: "0.25rem",
                transformOrigin: "bottom left",
                "--tw-scale-y": "0",
                transform: transformBaseString,
                background: `rgb(${color[0]} ${color[1]} ${color[2]})`,
                transition: "transform 0.25s cubic-bezier(0.4, 0, 0.2, 1)",
              },
              "&:hover:after, &:focus-visible:after": {
                "--tw-scale-y": "1",
                transform: transformBaseString,
                transformOrigin: "top left",
                outline: "none",
              },
            };
          },
        },
        { values: flattenColorPalette(theme("colors")), type: "color" },
      );
    }),
    plugin(({ matchUtilities, theme }) => {
      matchUtilities(
        {
          "slide-bg": (value) => {
            const { color } = parseColor(value);

            return {
              position: "relative",
              outline: "none",
              "&:after": {
                content: "var(--tw-content)",
                position: "absolute",
                top: "0",
                right: "0",
                bottom: "0",
                left: "0",
                background: `rgba(${color[0]}, ${color[1]}, ${color[2]}, 0.2)`,
                transform: "scale3d(0,1,1)",
                transformOrigin: "right",
                transition: "transform 0.25s cubic-bezier(0.4, 0, 0.2, 1)",
              },
              "&:hover:after, &:focus-visible:after": {
                transform: "scaleZ(1)",
                transformOrigin: "left",
              },
            };
          },
        },
        { values: flattenColorPalette(theme("colors")), type: "color" },
      );
    }),
  ],
};
export default config;

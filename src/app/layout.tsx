import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "./globals.css";
import { Sidebar } from "@/components/organisms/Sidebar";

const inter = Inter({
  weight: ["400", "500", "600", "700"],
  style: ["normal"],
  subsets: ["latin"],
});

export const metadata: Metadata = {
  title: "Arkadiusz Wydra | React Software Engineer",
  description: "",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className={`bg-page ${inter.className}`}>
        <div className="pl-32">
          <Sidebar />
          <div className="px-[4vw] pt-[15vh] md:pt-[22vh] lg:px-[7vw]">
            {children}
          </div>
        </div>
      </body>
    </html>
  );
}

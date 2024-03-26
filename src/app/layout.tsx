import { Sidebar } from "@/components/Sidebar";
import type { Metadata } from "next";
import { Montserrat } from "next/font/google";
import "./globals.css";

const montserrat = Montserrat({
  weight: ["400", "600", "700"],
  style: ["normal"],
  subsets: ["latin"],
  display: "swap",
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
      <body className={montserrat.className}>
        <div className="flex">
          <Sidebar />
          <div className="w-[100vw] flex-1 pl-80">{children}</div>
        </div>
      </body>
    </html>
  );
}

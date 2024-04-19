import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "./globals.css";
import { Sidebar } from "@/components/organisms/Sidebar";
import { Footer } from "@/components/organisms/Footer";

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
        <div className="overflow-x-hidden md:pl-32">
          <Sidebar />
          <main>{children}</main>
          <Footer />
        </div>
      </body>
    </html>
  );
}

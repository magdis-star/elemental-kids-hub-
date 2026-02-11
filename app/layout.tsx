import type { Metadata } from "next";
import { Bangers, Inter } from "next/font/google";
import "./globals.css";
import Header from "@/components/Header";
import Footer from "@/components/Footer";
import CookieBanner from "@/components/CookieBanner";

const bangers = Bangers({
  weight: "400",
  subsets: ["latin"],
  variable: "--font-bangers",
});

const inter = Inter({
  subsets: ["latin"],
  variable: "--font-inter",
});

export const metadata: Metadata = {
  title: "Elemental Kids - Hub de Libros",
  description: "Explora la Saga Elemental. Desafíos lógicos y creativos para mentes inquietas.",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="es">
      <body
        className={`${bangers.variable} ${inter.variable} antialiased font-inter`}
      >
        <Header />
        {children}
        <Footer />
        <CookieBanner />
      </body>
    </html>
  );
}

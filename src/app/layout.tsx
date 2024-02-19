import "./globals.css";
import type { Metadata } from "next";
import { Inter } from "next/font/google";
import Navbar from "./components/navbar/Navbar";
import "@fortawesome/fontawesome-svg-core/styles.css";
import { config } from "@fortawesome/fontawesome-svg-core";
import Footer from "./components/footer/Footer";
import { FAMILIES, SUB_FAMILIES } from "./constants/constants";
config.autoAddCss = false;
const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "Triumph Motorcycles Macedonia",
  description: "Triumph Motorcycles Macedonia, Триумф Моторцикли Македонија, Триумф, Мотори, Triumph",
};

export default async function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {


  try {

      const   familiesRes = await fetch(`${FAMILIES}`, {next: {revalidate: 3000}})
      const families = await familiesRes.json()

      const subFamiliesRes = await fetch(`${SUB_FAMILIES}`, {next: {revalidate: 3000}})
      const subFamilies = await subFamiliesRes.json()

      return (
        <html lang="en">
          <body className={inter.className}>
            <Navbar families={families} subFamilies={subFamilies}/>
    
            {children}
            <Footer families={families}/>
          </body>
        </html>
      );

  }catch(e){
    console.error(e);
    
    return <>Err</>
  }
  
}

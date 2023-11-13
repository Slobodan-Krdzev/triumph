"use client";
import Image from "next/image";
import Link from "next/link";
import logo from "../../../../public/images/logo.png";
import logo1 from "../../../../public/logo.svg"
import NavbarLinkList from "./NavbarLinkList";
import { useSearchParams } from "next/navigation";
import { useState } from "react";
import SectionContent from "./SectionContent";
import { BIKES, FAMILIES } from "@/app/constants/constants";

const Nav = () => {

  const query = useSearchParams()

  const getQueryParam = () => query.get('navItem')
  

  try{

    return (
      <>
        <nav className="flex bg items-center px-8 xl:gap-8 gap-5">
          <Link href={"/"}>
            <Image src={logo1} alt={"Logo"} height={70} width={128}/>
          </Link>
  
          <NavbarLinkList/>
        </nav>
  
        {getQueryParam() && <SectionContent/>}
        {/* {isSectionShown && <div className="text-slate-500 border h-screen">{getQueryParam()}</div>} */}
      </>
    );
  }catch{
    <>err</>
  }

  
};

export default Nav;

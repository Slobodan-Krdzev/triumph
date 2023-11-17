"use client";
import Image from "next/image";
import Link from "next/link";
import React, { useState } from "react";
import logo1 from "../../../../../public/logo.svg";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars, faX } from "@fortawesome/free-solid-svg-icons";
import Dropdown from "./Dropdown";
import { handleBodyScrollWhenMenuIsOpen } from "../../helpers/handleBodyScrollWhenMenuOpens";
import { usePathname, useRouter } from "next/navigation";

const MobileNav = () => {
  const [isMainDropdownShown, setIsMainDropdownShown] = useState(false);
  
  const router = useRouter()
  const pathname = usePathname()

  const handleMenuVisibility = () => {

    if(!isMainDropdownShown){
        router.push(`${pathname}`)
    }

    setIsMainDropdownShown(!isMainDropdownShown);
    handleBodyScrollWhenMenuIsOpen(isMainDropdownShown)
  };

  return (
    <>
      <nav className="flex bg justify-start items-center px-8 xl:gap-8 gap-5 z-50 h-16">
        <button className="basis-1/12" onClick={handleMenuVisibility}>
          <FontAwesomeIcon icon={isMainDropdownShown ? faX : faBars} color="white" size="xl" />
        </button>
        <Link href={"/"} className="basis-10/12 flex justify-center">
          <Image src={logo1} alt={"Logo"} height={70} width={128} />
        </Link>
        <div className="basis-1/12"></div>
      </nav>

      {isMainDropdownShown && <Dropdown visibility={isMainDropdownShown}/>}
    </>
  );
};

export default MobileNav;

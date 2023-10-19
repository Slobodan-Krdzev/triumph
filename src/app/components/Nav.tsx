"use client";
import Image from "next/image";
import React, { useState } from "react";
import logo from "../../../public/images/logo.png";
import NavbarLinkList from "./NavbarLinkList";
import Link from "next/link";

const Nav = () => {
  const [isSectionShown, setIsSectionShown] = useState(false);
  const [sectionType, setSectionType] = useState('')

  const handleHiddenSection = (type: string) => {
    setIsSectionShown(!isSectionShown);
    setSectionType(type)
  };

  return (
    <>
      <nav className="flex bg items-center px-5">
        <Link href={""}>
          <Image src={logo} alt={"Logo"} height={70} />
        </Link>

        <NavbarLinkList action={handleHiddenSection} />
      </nav>

      {isSectionShown && <div className="text-slate-500 border h-screen">{sectionType}</div>}
    </>
  );
};

export default Nav;

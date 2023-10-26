"use client";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React, { useState } from "react";

type NavListItemProps = {
  text: string;
};


const NavListItem = ({ text }: NavListItemProps) => {

  const router = useRouter()
  const pathname = usePathname()
  const searchParams = useSearchParams()

  const handleHover = () => {

    console.log(pathname);
    

    router.push(`${pathname}/?navItem=${text}`)
    
  }

  const handleHoverOut = () => {
    router.push(`${pathname}`)
  }

  return (
    <>
      <li
        className="px-4 uppercase font-semibold border cursor-pointer"
        onMouseEnter={handleHover}
        onMouseLeave={handleHoverOut}
      >
        {text}
      </li>

    
      
    </>
  );
};

export default NavListItem;

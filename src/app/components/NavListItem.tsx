"use client";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React, { useState } from "react";

type NavListItemProps = {
  text: string;
};


const NavListItem = ({ text }: NavListItemProps) => {

  const router = useRouter()
  const searchParams = useSearchParams()

  const handleHover = () => {
    router.push(`/?navItem=${text}`)
    
  }

  const handleHoverOut = () => {
    router.push(`/`)
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

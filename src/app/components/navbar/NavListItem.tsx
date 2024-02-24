"use client";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React, { useState } from "react";

type NavListItemProps = {
  text: string;
  filter: string;
};

const NavListItem = ({ text, filter }: NavListItemProps) => {
  const router = useRouter();
  const pathname = usePathname();
  const query = useSearchParams().get('navItem')
  const colorQuery = useSearchParams().get('color')
  const reversQuery = useSearchParams().get('reversed')
  

  const handleHover = () => {

    if(Boolean(colorQuery) || Boolean(reversQuery)) {

      router.push(`${pathname}?navItem=${filter}&color=${colorQuery}&reversed=${reversQuery}`, {scroll: false})
      
    }else {
      router.push(`${pathname}?navItem=${filter}`, {scroll: false})
    }

  };

  return (
    <>
      <li
        className={`px-4 text-sm uppercase font-semibold flex items-center cursor-pointer h-16 gray-btn-hover ${query === filter ? 'gray-btn' : ''}`}
        onMouseEnter={handleHover}
      >
        {text}
      </li>
    </>
  );
};

export default NavListItem;

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

  console.log(colorQuery, reversQuery);
  

  const handleHover = () => {

    if(Boolean(colorQuery) || Boolean(reversQuery)) {

      router.push(`${pathname}/?navItem=${filter}&color=${colorQuery}&reversed=${reversQuery}`, {scroll: false})
      
      console.log('if');
      
    }else {
      router.push(`${pathname}/?navItem=${filter}`, {scroll: false})

      console.log('else');
      
    }

  };

  return (
    <>
      <li
        className={`px-4 text-base uppercase font-medium flex items-center cursor-pointer h-16 gray-btn-hover ${query === filter ? 'gray-btn' : ''}`}
        onMouseEnter={handleHover}
      >
        {text}
      </li>
    </>
  );
};

export default NavListItem;

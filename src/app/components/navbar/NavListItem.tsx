"use client";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React, { useState } from "react";

type NavListItemProps = {
  text: string;
};

const NavListItem = ({ text }: NavListItemProps) => {
  const router = useRouter();
  const pathname = usePathname();

  const handleHover = () => router.push(`${pathname}/?navItem=${text}`);

  return (
    <>
      <li
        className="px-4 uppercase  font-semibold flex items-center cursor-pointer h-16"
        onMouseEnter={handleHover}
      >
        {text}
      </li>
    </>
  );
};

export default NavListItem;

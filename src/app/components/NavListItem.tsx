"use client";
import React, { useState } from "react";

type NavListItemProps = {
  text: string;
  action: (type:string) => void
};


const NavListItem = ({ text, action }: NavListItemProps) => {


  return (
    <>
      <li
        className="mr-4 uppercase font-semibold"
        onMouseEnter={() => action(text)}
        onMouseLeave={() => action(text)}
      >
        {text}
      </li>

    
      
    </>
  );
};

export default NavListItem;

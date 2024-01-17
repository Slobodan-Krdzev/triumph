"use client";
import { usePathname, useSearchParams } from "next/navigation";
import React from "react";

type TitleProps = {
  text: string;
};

const Title = ({ text }: TitleProps) => {
  const pathname = usePathname();
  
  const isOffRoadRoute = Boolean(pathname.split("/")[2] === "off-road");

  return (
    <span className={`${isOffRoadRoute ? "text-black" : "text-red"} text-xl font-bold uppercase italic mr-10 tracking-tighter`}>
      {text}
    </span>
  );
};

export default Title;

"use client"
import Link from "next/link";
import { usePathname, useRouter } from "next/navigation";
import React from "react";

type BtnProps = {
  link?: string;
  text: string;
  isLink?: boolean;
  bgBlack: boolean;
  whiteBg?: boolean;
  fullWidth?: boolean;
  action?: () => void;
};

const MainBtn = ({
  link,
  text,
  isLink,
  bgBlack,
  fullWidth,
  action,
}: BtnProps) => {

  const router = useRouter()
  const pathname = usePathname()

  const isOffRoadRoute = Boolean(pathname.split("/")[2] === 'off-road');
  

  if (isLink && link) {
    return (
      <Link
        href={link}
        className={`${
          bgBlack ? "bg main-btn-black-hover text-white" : `${isOffRoadRoute ? "quartal-bg-color" : "red-bg-color main-btn-hover"}`
        }  ${
          fullWidth ? "block" : ""
        } uppercase font-bold px-5 py-3 ${isOffRoadRoute ? "text-black" : "text-slate-100"} text-base leading-7 `}
        onClick={() => {
          router.push(`${link}?section=${false}`)
        }}
      >
        {" "}
        {text}
      </Link>
    );
  }

  return (
    <button
      className={`${
        bgBlack ? "bg main-btn-black-hover" : "red-bg-color main-btn-hover"
      } ${
        fullWidth ? "block" : ""
      } uppercase font-bold px-5 py-3 text-slate-100 text-base `}
      onClick={action}
    >
      {text}
    </button>
  );
};

export default MainBtn;

"use client";
import { faChevronDown, faChevronUp } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Link from "next/link";
import React, { useState } from "react";

type MobileFooterProps = {
  list: any;
  title?: string
};

const MobileFooterList = ({ list, title }: MobileFooterProps) => {
  const [isMenuVisible, setIsMenuVisible] = useState(false);

  return (
    <>
      <button
      onClick={() => setIsMenuVisible(!isMenuVisible)}
      className={`${isMenuVisible ? 'mb-2' : 'mb-6'} uppercase font-semibold text-lg tracking-tighter flex justify-between w-full items-center`}>
        {list.title ?? title}
        <FontAwesomeIcon icon={isMenuVisible ? faChevronUp : faChevronDown} />
      </button>
      {isMenuVisible && (
        <ul className="mb-4">
          
          {list.items?.map((item: any) => (
            <li key={item.id} className="uppercase text-neutral-500 font-normal text-md tracking-tighter mb-4">
              <Link href={item.url}>{item.text}</Link>
            </li>
          ))}
        </ul>
      )}
    </>
  );
};

export default MobileFooterList;

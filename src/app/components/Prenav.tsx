"use client";
import { faChevronDown } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import Link from "next/link";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React from "react";

function Prenav() {
  const router = useRouter();
  const pathname = usePathname();

  const colorQuery = useSearchParams().get("color");
  const reversQuery = useSearchParams().get("reversed");

  const handleSectionClose = () => {

    if(colorQuery && reversQuery){
      router.push(`${pathname}/?color=${colorQuery}&reversed=${reversQuery}`, { scroll: false });

    }else if(colorQuery){
      router.push(`${pathname}/?color=${colorQuery}`, { scroll: false });

    }else if(reversQuery){
      router.push(`${pathname}/?reversed=${reversQuery}`, { scroll: false });
    }else {
      router.push(`${pathname}`,{scroll: false})
    }

  };


  const handleLocationSection = () => {

    if(colorQuery && reversQuery){
      router.push(`${pathname}/?navItem=Locations&color=${colorQuery}&reversed=${reversQuery}`, { scroll: false });

    }else if(colorQuery){
      router.push(`${pathname}/?navItem=Locations&color=${colorQuery}`, { scroll: false });

    }else if(reversQuery){
      router.push(`${pathname}/?navItem=Locations&reversed=${reversQuery}`, { scroll: false });
    }else {
      router.push(`${pathname}/?navItem=Locations`, { scroll: false });

    }

  };

  return (
    <div
      className="flex py-2 px-10 justify-end text-white text-xs"
      onMouseEnter={handleSectionClose}
    >
      <ul className="flex gap-4 items-center text-md font-semibold">
        <li>
          <Link href={"/dealer"} className="text-white">
            Контакт
          </Link>
        </li>
        <li>
          <Link href={"/configure"} className="text-white">
            Конфигурација
          </Link>
        </li>
        <li>
          <Link href={"/latest-offers"} className="text-white">
            Понуди
          </Link>
        </li>
        <li>
          <button
            onMouseOver={handleLocationSection}
            className="flex justify-between items-center gap-2"
          >
            <Image
              src={"/images/pinIcon-01.svg"}
              alt="Pin"
              width={30}
              height={30}
            />
            <span>Macedonia</span>
            <FontAwesomeIcon icon={faChevronDown} />
          </button>
        </li>
      </ul>
    </div>
  );
}

export default Prenav;

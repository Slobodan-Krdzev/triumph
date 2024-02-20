"use client";
import Image from "next/image";
import Link from "next/link";
import React, { useEffect, useState } from "react";
import logo1 from "../../../../../public/logo.svg";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars, faX } from "@fortawesome/free-solid-svg-icons";
import Dropdown from "./Dropdown";
import { handleBodyScrollWhenMenuIsOpen } from "../../helpers/handleBodyScrollWhenMenuOpens";
import { usePathname, useRouter, useSearchParams } from "next/navigation";

type MobileNavProps = {
  fams: any[];
  allBikes: any[];
};

const MobileNav = ({ fams, allBikes }: MobileNavProps) => {
  const [isMainDropdownShown, setIsMainDropdownShown] = useState(false);

  const router = useRouter();
  const pathname = usePathname();
  const colorQuery = useSearchParams().get("color");
  const reversedQuery = useSearchParams().get("reversed");

  const handleMenuVisibility = () => {
    if (!isMainDropdownShown) {
      if (Boolean(colorQuery) || Boolean(reversedQuery)) {
        router.push(
          `${pathname}?section=false&color=${colorQuery}&reversed=${reversedQuery}`,
          { scroll: false }
        );
      } else {
        router.push(`${pathname}?section=false`, { scroll: false });
      }
    }

    setIsMainDropdownShown(!isMainDropdownShown);
    handleBodyScrollWhenMenuIsOpen(isMainDropdownShown);
  };

  useEffect(() => {
    setIsMainDropdownShown(false);
    handleBodyScrollWhenMenuIsOpen(true);
  }, [pathname]);

  return (
    <>
      <nav className="flex bg justify-start items-center px-8 xl:gap-8 gap-5 z-50 h-16">
        <button className="basis-1/12" onClick={handleMenuVisibility}>
          <FontAwesomeIcon
            icon={isMainDropdownShown ? faX : faBars}
            color="white"
            size="xl"
          />
        </button>
        <Link href={"/"} className="basis-10/12 flex justify-center">
          <Image src={logo1} alt={"Logo"} height={70} width={128} />
        </Link>
        <div className="basis-1/12"></div>
      </nav>

      {isMainDropdownShown && (
        <Dropdown
          visibility={isMainDropdownShown}
          closeMainMenu={handleMenuVisibility}
          families={fams}
          bikes={allBikes}
        />
      )}
    </>
  );
};

export default MobileNav;

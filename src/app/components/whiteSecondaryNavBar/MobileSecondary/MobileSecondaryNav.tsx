"use client";
import React, { useEffect, useRef, useState } from "react";
import { SecondaryNavItemsType } from "../SecondaryNavBar";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faChevronDown, faChevronUp } from "@fortawesome/free-solid-svg-icons";
import Link from "next/link";
import { usePathname } from "next/navigation";
import MainBtn from "../../MainBtn";

type MobileSecondaryNavProps = {
  items: SecondaryNavItemsType[];
  title: string | string[];
  configurationLink: string[] | string;
};

const MobileSecondaryNav = ({
  items = [],
  title,
  configurationLink,
}: MobileSecondaryNavProps) => {

  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const pathname = usePathname()

  useEffect(() => {
    
    setIsMenuOpen(false)
  }, [pathname])
  

  return (
    <section className="px-4 bg-white border-thin-gray-bottom relative shadow-xl" style={{zIndex: 47}}>
      <button
        className="py-4 text-red text-md font-bold uppercase italic mr-10 tracking-tighter"
        onClick={() => setIsMenuOpen(!isMenuOpen)}
      >
        {isMenuOpen ? "Затвори" : title}
        <FontAwesomeIcon
          icon={isMenuOpen ? faChevronUp : faChevronDown}
          size="sm"
          className="ml-2"
        />
      </button>

      {isMenuOpen && (
        <div className=" absolute border-thin-gray border-thin-gray-bottom shadow-lg left-0 bg-white p-4 pb-6" style={{top: "100%", right: 0}}>
          <p className="text-red text-xl font-bold uppercase italic mr-10 tracking-tighter mb-6">
            {title}
          </p>
          <ul className="mb-6">
            {items.map((link) => (
              <li key={link.link} className="mb-4 last:mb-0">
                <Link href={link.link} className="uppercase text-neutral-700 text-sm font-semibold tracking-tighter">{link.text}</Link>
              </li>
            ))}
          </ul>

          <MainBtn text={"КОНФИГУРИРАЈ"} bgBlack={false} isLink={true} link={`${configurationLink.toString()}`}/>
        </div>
      )}
    </section>
  );
};

export default MobileSecondaryNav;

"use client";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { useEffect, useState } from "react";
import { useBreakpoint } from "../helpers/useBreakpoint";
import Nav from "./Nav";
import MobileNav from "./mobileNav/MobileNav";

const Navbar = () => {
  const [families, setFamilies] = useState<any[]>([]);
  const [bikes, setBikes] = useState<any[]>([]);
  const breakpoint = useBreakpoint();

  useEffect(() => {
    fetch(`${FAMILIES}`)
      .then((res) => res.json())
      .then((data) => {
        const familiesToRender = data.map((family: any) => family.type);
        const filtersToRender = [
          ...familiesToRender,
          "special",
          "stealth",
          "chrome",
        ];

        setFamilies(filtersToRender);
      });

    fetch(`${SUB_FAMILIES}`)
      .then((res) => res.json())
      .then((data) => setBikes(data));
  }, []);

  return (
    <header
      className={`fixed top-0 left-0 right-0 `}
      style={{zIndex: 9999}}
    >
      {breakpoint > 1024 && (
        <>
          <Nav fams={families} allBikes={bikes} />
        </>
      )}
      {breakpoint <= 1024 && <MobileNav fams={families} allBikes={bikes} />}
    </header>
  );
};

export default Navbar;

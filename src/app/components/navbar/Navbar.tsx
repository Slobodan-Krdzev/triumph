"use client";
import React, { useEffect, useState } from "react";
import Prenav from "../Prenav";
import Nav from "./Nav";
import { useBreakpoint } from "../helpers/useBreakpoint";
import MobileNav from "./mobileNav/MobileNav";
import { FAMILIES, BIKES } from "@/app/constants/constants";

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

    fetch(`${BIKES}`)
      .then((res) => res.json())
      .then((data) => setBikes(data));
  }, []);


  return (
    <header>
      {breakpoint > 768 && (
        <>
          <Prenav />
          <Nav fams={families} allBikes={bikes}/>
        </>
      )}
      {breakpoint <= 768 && <MobileNav fams={families} allBikes={bikes}/>}
    </header>
  );
};

export default Navbar;

"use client";
import Image from "next/image";
import Link from "next/link";
import { useSearchParams } from "next/navigation";
import logo1 from "../../../../public/logo.svg";
import NavbarLinkList from "./NavbarLinkList";
import SectionContent from "./SectionContent";
import { FAMILIES, BIKES } from "@/app/constants/constants";
import { useState, useEffect } from "react";

const Nav = () => {
  const query = useSearchParams();

  const getQueryParam = () => query.get("navItem");
  const [families, setFamilies] = useState<any[]>([]);
  const [bikes, setBikes] = useState<any[]>([]);

  const [bikeToRender, setBikeToRender] = useState<any>(bikes.filter(bike => bike.id === +query.get('bikeID')!))

  useEffect(() => {
    fetch(`${FAMILIES}`)
      .then((res) => res.json())
      .then((data) => {
        const familiesToRender = data.map((family: any) => family.type);
        const filtersToRender = [
          ...familiesToRender,
          "special editions",
          "stealth edition",
          "chrome collection",
        ];

        setFamilies(filtersToRender);
      });

    fetch(`${BIKES}`)
      .then((res) => res.json())
      .then((data) => setBikes(data));
  }, []);

  useEffect(() => {

    if(query.get('bikeID')) {
      setBikeToRender(bikes.filter(bike => bike.id === +query.get('bikeID')!))

    } else {
      setBikeToRender(bikes.filter(bike => bike.id === 1))

    }

    console.log(bikeToRender);
    
  }, [query.get('bikeID')])

  try {
    return (
      <>
        <nav className="flex bg items-center px-8 xl:gap-8 gap-5 z-50">
          <Link href={"/"}>
            <Image src={logo1} alt={"Logo"} height={70} width={128} />
          </Link>

          <NavbarLinkList />
        </nav>

        {getQueryParam() && <SectionContent families={families} bikes={bikes} bikeToRender={bikeToRender}/>}
        {/* {isSectionShown && <div className="text-slate-500 border h-screen">{getQueryParam()}</div>} */}
      </>
    );
  } catch {
    <>err</>;
  }
};

export default Nav;

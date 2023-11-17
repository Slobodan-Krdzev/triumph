"use client";
import Image from "next/image";
import Link from "next/link";
import { useSearchParams } from "next/navigation";
import logo1 from "../../../../public/logo.svg";
import NavbarLinkList from "./NavbarLinkList";
import SectionContent from "./SectionContent";
import { FAMILIES, BIKES } from "@/app/constants/constants";
import { useState, useEffect } from "react";

type NavProps = {
  fams: any[],
  allBikes: any[]
}

const Nav = ({fams, allBikes}: NavProps) => {
  const query = useSearchParams();

  const getQueryParam = () => query.get("navItem");
  const [families, setFamilies] = useState<any[]>(fams);
  const [bikes, setBikes] = useState<any[]>(allBikes);

  const [bikeToRender, setBikeToRender] = useState<any>(bikes.filter(bike => bike.id === +query.get('bikeID')!))

  // useEffect(() => {
  //   setFamilies(fams)
  //   setBikes(allBikes)
  // }, [])

  // useEffect(() => {
  //   fetch(`${FAMILIES}`)
  //     .then((res) => res.json())
  //     .then((data) => {
  //       const familiesToRender = data.map((family: any) => family.type);
  //       const filtersToRender = [
  //         ...familiesToRender,
  //         "special",
  //         "stealth",
  //         "chrome",
  //       ];

  //       setFamilies(filtersToRender);
  //     });

  //   fetch(`${BIKES}`)
  //     .then((res) => res.json())
  //     .then((data) => setBikes(data));
  // }, []);

  useEffect(() => {

    setFamilies(fams)
    setBikes(allBikes)

    if(query.get('bikeID')) {
      setBikeToRender(bikes.filter(bike => bike.id === +query.get('bikeID')!))

    } else {
      setBikeToRender(bikes.filter(bike => bike.id === 1))

    }

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
      </>
    );
  } catch {
    <>err</>;
  }
};

export default Nav;

"use client";
import Image from "next/image";
import Link from "next/link";
import { useSearchParams } from "next/navigation";
import { useEffect, useState } from "react";
import logo1 from "../../../../public/logo.svg";
import Prenav from "../Prenav";
import NavbarLinkList from "./NavbarLinkList";
import SectionContent from "./SectionContent";

type NavProps = {
  fams: any[];
  allBikes: any[];
};

const Nav = ({ fams, allBikes }: NavProps) => {
  const query = useSearchParams();

  const getQueryParam = () => query.get("navItem");
  const [families, setFamilies] = useState<any[]>(fams);
  const [bikes, setBikes] = useState<any[]>(allBikes);


  const [bikeToRender, setBikeToRender] = useState<any>(
    bikes.filter((bike) => bike.id === +query.get("bikeID")!)
  );

  useEffect(() => {
    setFamilies(fams);
    setBikes(allBikes);

    if (query.get("bikeID")) {
      setBikeToRender(
        bikes.filter((bike) => bike.id === +query.get("bikeID")!)
      );
    } else {
      setBikeToRender(bikes.filter((bike) => bike.id === 1));
    }
  }, [query.get("bikeID")]);

  

  try {
    return (
      <>
        <nav className="flex justify-between bg items-center  z-50">
          <div className="flex px-8 xl:gap-8 gap-5 items-center">
            <Link href={"/"}>
              <Image src={logo1} alt={"Logo"} height={70} width={128} />
            </Link>

            <NavbarLinkList />
          </div>

          <Prenav />
        </nav>

        {getQueryParam() && (
          <SectionContent
            families={families}
            bikes={bikes}
            bikeToRender={bikeToRender}
          />
        )}
      </>
    );
  } catch {
    <>err</>;
  }
};

export default Nav;

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

  const [bikeToRender, setBikeToRender] = useState<any>(
    allBikes.filter((bike: any) => bike.id === +query.get("bikeID")!)
  );

  useEffect(() => {
    if (query.get("bikeID")) {
      setBikeToRender(
        allBikes.filter((bike) => bike.id === +query.get("bikeID")!)
      );
    } else {
      setBikeToRender(allBikes.filter((bike) => bike.id === 1));
    }
  }, [query.get("bikeID")]);

  try {
    return (
      <>
        <nav className="bg z-50 hidden xl:block">
          <div className="flex justify-between items-center">
            <div className="flex px-8 xl:gap-8 gap-5 items-center">
              <Link href={"/"}>
                <Image src={logo1} alt={"Logo"} height={60} width={98} />
              </Link>

              <NavbarLinkList />
            </div>

            <Prenav />
          </div>
        </nav>

        {getQueryParam() && (
          <SectionContent
            families={fams}
            bikes={allBikes}
            bikeToRender={bikeToRender}
          />
        )}
      </>
    );
  } catch {
   return <>err</>;
  }
};

export default Nav;

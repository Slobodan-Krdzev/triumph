"use client";
import Image from "next/image";
import Link from "next/link";
import logo1 from "../../../../public/logo.svg";
import { useFetchFamilies } from "../CustomHooks/useFetchFamilies";
import { useFetchSubFams } from "../CustomHooks/useFetchSubFams";
import Prenav from "../Prenav";
import { useBreakpoint } from "../helpers/useBreakpoint";
import Nav from "./Nav";
import MobileNav from "./mobileNav/MobileNav";

const Navbar = () => {
  const breakpoint = useBreakpoint();

  const { statusFams, fams } = useFetchFamilies();
  const { statusSubFams, subFams } = useFetchSubFams();

  if (statusFams !== "success" && statusSubFams !== "success") {
    return (
      <header
        className={`fixed top-0 left-0 right-0 `}
        style={{ zIndex: 9999 }}
      >
        <nav
          className="flex justify-between bg items-center  z-50"
          style={{ minHeight: 64 }}
        >
          <div className="flex px-8 xl:gap-8 gap-5 items-center">
            <Link href={"/"}>
              <Image src={logo1} alt={"Logo"} height={70} width={128} />
            </Link>
          </div>

          <Prenav />
        </nav>
      </header>
    );
  }

  return (
    <header className={`fixed top-0 left-0 right-0 `} style={{ zIndex: 9999 }}>
      {breakpoint > 1024 && (
        <>
          <Nav fams={fams} allBikes={subFams} />
        </>
      )}
      {breakpoint <= 1024 && <MobileNav fams={fams} allBikes={subFams} />}
    </header>
  );
};

export default Navbar;

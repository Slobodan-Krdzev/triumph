"use client";
import Image from "next/image";
import Link from "next/link";
import logo from "../../../public/images/logo.png";
import NavbarLinkList from "./NavbarLinkList";
import { useSearchParams } from "next/navigation";

const Nav = () => {
 
  const query = useSearchParams()

  const getQueryParam = () => {

    return query.get('navItem')
  }

  return (
    <>
      <nav className="flex bg items-center px-9">
        <Link href={"/"}>
          <Image src={logo} alt={"Logo"} height={70} />
        </Link>

        <NavbarLinkList />
      </nav>

      {getQueryParam() && <div className="text-slate-500 border p-10">{getQueryParam()}</div>}
      {/* {isSectionShown && <div className="text-slate-500 border h-screen">{sectionType}</div>} */}
    </>
  );
};

export default Nav;

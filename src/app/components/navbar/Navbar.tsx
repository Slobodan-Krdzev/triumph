"use client";
import { useBreakpoint } from "../helpers/useBreakpoint";
import Nav from "./Nav";
import MobileNav from "./mobileNav/MobileNav";

type NavbarProps = {

  families: any[],
  subFamilies: any[]
}

const Navbar = ({families, subFamilies}: NavbarProps) => {
  const breakpoint = useBreakpoint();

  if(families.length === 0 || subFamilies.length === 0) {
    return <>LOADING</>
  }

  return (
    <header className={`fixed top-0 left-0 right-0 `} style={{ zIndex: 9999 }}>
      {breakpoint > 1280 && (
        <>
          <Nav fams={families} allBikes={subFamilies} />
        </>
      )}
      {breakpoint <= 1280 && <MobileNav fams={families} allBikes={subFamilies} />}
    </header>
  );
};

export default Navbar;

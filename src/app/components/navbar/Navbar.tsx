import Nav from "./Nav";
import MobileNav from "./mobileNav/MobileNav";

type NavbarProps = {
  families: any[];
  subFamilies: any[];
};

const Navbar = ({ families, subFamilies }: NavbarProps) => {
  if (families.length === 0 || subFamilies.length === 0) {
    return (
      <header className={`fixed top-0 left-0 right-0 `} style={{ zIndex: 9999 }}>
        <div>LOADING</div>
      </header>
    );
  }

  return (
    <header className={`fixed top-0 left-0 right-0 `} style={{ zIndex: 9999 }}>
      <Nav fams={families} allBikes={subFamilies} />

      <MobileNav fams={families} allBikes={subFamilies} />
    </header>
  );
};

export default Navbar;

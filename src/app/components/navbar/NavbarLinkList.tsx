"use client";
import NavListItem from "./NavListItem";

const navLinks = [
  "Motorcycles",
  "Accessories",
  "Clothing",
  "Owners",
  "Discover",
];

const NavbarLinkList = () => {
  return (
    <ul className="text-white flex uppercase">
      {navLinks.map((link) => (
        <NavListItem key={link} text={link} />
      ))}
    </ul>
  );
};

export default NavbarLinkList;

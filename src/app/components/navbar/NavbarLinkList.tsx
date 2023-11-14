"use client";
import NavListItem from "./NavListItem";

const navLinks = [
  {text: "Моторцикли", filter:"Motorcycles"},
  {text: "Аксесоари", filter:"Accessories"},
  {text: "Облека", filter:"Clothing"},
  {text: "Сопственици", filter:"Owners"},
  {text: "Новости", filter:"Discover"}
];

const NavbarLinkList = () => {
  return (
    <ul className="text-white flex uppercase">
      {navLinks.map((link) => (
        <NavListItem key={link.filter} text={link.text} filter={link.filter}/>
      ))}
    </ul>
  );
};

export default NavbarLinkList;

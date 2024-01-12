"use client";
import Link from "next/link";
import NavListItem from "./NavListItem";

const navLinks = [
  {text: "Моторцикли", filter:"Motorcycles"},
  {text: "Аксесоари", filter:"Accessories"},
  {text: "Облека", filter:"Clothing"},
  {text: "Сопственици", filter:"Owners"}
];

const NavbarLinkList = () => {
  return (
    <ul className="text-white flex uppercase">
      {navLinks.map((link) => (
        <NavListItem key={link.filter} text={link.text} filter={link.filter}/>
      ))}
      <li
        className={`px-4 text-base uppercase font-medium flex items-center cursor-pointer h-16 gray-btn-hover `}
        
      >
        <Link href={"https://triumph-mediakits.com/en/news/news-listing.html"} target="blank">Новости</Link>
      </li>
      
    </ul>
  );
};

export default NavbarLinkList;

import Image from "next/image";
import Link from "next/link";
import React from "react";
import image from "../../../../public/images/accessoriesNavDropdownImage.avif";
import NavLinkListing, { NavLinkListingItemsType } from "./NavLinkListing";

export const linkItemsAccessory: NavLinkListingItemsType[] = [
  {
    text: "Конфигурација",
    link: "/configuration",
  },
  {
    text: "Оригинален Triumph Багаж",
    link: "/accessories/triumph-genuine-luggage",
  },
  {
    text: "Triumph Connectivity Систем",
    link: "/motorcycles/my-triumph-connectivity-system",
  },
  {
    text: "Triumph Sena Bluetooth®",
    link: "/accessories/triumph-sena-bluetooth-headset",
  },
  {
    text: "Triumph Beeline Навигација",
    link: "/accessories/triumph-beeline",
  },
];

export const linkItemsModels: NavLinkListingItemsType[] = [
  {
    text: "Speed triple 765",
    link: "/motorcycles/roadsters/street-triple-765/accessories-street-triple-765",
  },
  {
    text: "Trident 660",
    link: "/motorcycles/roadsters/trident/accessories",
  },
  {
    text: "Tiger 1200",
    link: "/motorcycles/adventure/tiger-1200/accessories",
  },
  {
    text: "Tiger 900",
    link: "/motorcycles/adventure/tiger-900-2023/tiger-900-accessories",
  },
  {
    text: "Tiger Rport 660",
    link: "/motorcycles/adventure/tiger-sport-660/accessories",
  },
  {
    text: "Rocket 3",
    link: "/motorcycles/rocket-3/rocket-3/accessories",
  },
  {
    text: "Speed Twin 900",
    link: "/motorcycles/classic/bonneville-speed-twin-900/accessories",
  },
];

export const linkItemsQuickLinks: NavLinkListingItemsType[] = [
  {
    text: "Orizondas Оригинални Аксесоари",
    link: "/accessories/why-buy-genuine",
  },
  {
    text: "Мојата Triumph Апликација",
    link: "/owners/my-triumph-app",
  },
  {
    text: "Мојот Triumph",
    link: "/owners/your-triumph",
  },
];

const AccessoriesNavSection = () => {
  return (
    <div className="flex justify-between p-8 px-52">
      <NavLinkListing
        items={linkItemsAccessory}
        title={"Аксесоари"}
        bottomLinkText={"Аксесоари за Вашиот Мотор"}
        bottomLinkUrl={"/configure"}
      />

      <NavLinkListing
        items={linkItemsModels}
        title={"Најнови Модели"}
        bottomLinkText={"Конфигурација"}
        bottomLinkUrl={"/configure"}
      />

      <NavLinkListing
        items={linkItemsQuickLinks}
        title={"Барани Линкови"}
        bottomLinkText={"Koнтакт"}
        bottomLinkUrl={"/dealers/dealer-search"}
      />

      <Link href={"/configure"}>
        <Image src={image} alt="Tiger 1200 GT" />
      </Link>
    </div>
  );
};

export default AccessoriesNavSection;

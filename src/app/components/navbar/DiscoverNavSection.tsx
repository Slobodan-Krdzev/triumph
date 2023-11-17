import React from "react";
import NavLinkListing, { NavLinkListingItemsType } from "./NavLinkListing";
import Link from "next/link";
import Image from "next/image";
import img1 from "../../../../public/images/discoverNavDropdown1.avif";
import img2 from "../../../../public/images/discoverDropdown2.avif";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faChevronRight } from "@fortawesome/free-solid-svg-icons";

// OVDE TREBA QUERY PARAMETRI ZA 2,3,4,5 OD PRVIOT LISTING
// SE KORISTAT ZA FILTRIRANJE NA BLOGOVITE

export const linkItemsNews: NavLinkListingItemsType[] = [
  {
    text: "Новости",
    link: "/for-the-ride/news",
  },
  {
    text: "Мотори",
    link: "/for-the-ride/news",
  },
  {
    text: "За Нас",
    link: "/for-the-ride/news",
  },
  {
    text: "Englishman",
    link: "/for-the-ride/news",
  },
  {
    text: "Авантури",
    link: "/for-the-ride/news",
  },
];

export const linkItemsRaces: NavLinkListingItemsType[] = [
  {
    text: "Motocross and Enduro",
    link: "/for-the-ride/racing/official-announcement-mx-enduro",
  },
  {
    text: "MXGP",
    link: "/for-the-ride/racing/mxgp",
  },
  {
    text: "US RACING",
    link: "/for-the-ride/racing/us-racing",
  },
  {
    text: "Moto2™",
    link: "/for-the-ride/racing/moto2",
  },
  {
    text: "PTR Triumph",
    link: "/for-the-ride/racing/ptr-triumph",
  },
];

export const linkItemsBrand: NavLinkListingItemsType[] = [
  {
    text: "Партнерство со James Bond",
    link: "/for-the-ride/brand/james-bond-partnership",
  },
  {
    text: "Triumph & Gibson",
    link: "/for-the-ride/brand/distinguished-gentlemans-ride/triumph-and-gibson",
  },
  {
    text: "Distinguished Gentleman's Ride",
    link: "/for-the-ride/brand/distinguished-gentlemans-ride",
  },
  {
    text: "Triumph and Breitling",
    link: "/for-the-ride/brand/triumph-and-breitling",
  },
  {
    text: "120 Години Постоење",
    link: "/for-the-ride/brand/120-years-celebration",
  },
  {
    text: "Времеплов",
    link: "/for-the-ride/brand",
  },
  {
    text: "Кариери",
    link: "/careers",
  },
];

export const linkItemsExperience: NavLinkListingItemsType[] = [
  {
    text: "Авантуризам со Triumph",
    link: "/for-the-ride/experiences/adventure",
  },
];

const DiscoverNavSection = () => {
  return (
    <div className="flex justify-between p-8">
      <NavLinkListing
        items={linkItemsNews}
        title={"Ново"}
        bottomLinkText={"Истражи Повеќе"}
        bottomLinkUrl={"/for-the-ride/news"}
      />

      <NavLinkListing
        items={linkItemsRaces}
        title={"Трки"}
        bottomLinkText={"Истражи Повеќе"}
        bottomLinkUrl={"/for-the-ride/racing"}
      />

      <NavLinkListing
        items={linkItemsBrand}
        title={"За Брендот"}
        bottomLinkText={"Истражи Повеќе"}
        bottomLinkUrl={"/for-the-ride/brand"}
      />

      <NavLinkListing
        items={linkItemsExperience}
        title={"Искуства"}
        bottomLinkText={"Истражи Повеќе"}
        bottomLinkUrl={"/for-the-ride/experiences"}
      />

      <Link href={"/for-the-ride/reviews"} className="group">
        <div className="overflow-hidden">
          <Image
            src={img1}
            alt="Tiger 1200 GT"
            height={367}
            className="group flex justify-start items-center gap-2 group-hover:scale-105 transition-transform ease-in-out delay-75 pb-4"
          />
        </div>
        <p className="child uppercase text-md font-medium group-hover:text-red-800">
          Истражи Повеќе <FontAwesomeIcon icon={faChevronRight} size="xs" />
        </p>
      </Link>
      <Link href={"/for-the-ride/news/epic-adventures"} className="group">
        <div className="overflow-hidden">
          <Image
            src={img2}
            alt="Tiger 1200 GT"
            height={367}
            className="group flex justify-start items-center gap-2 group-hover:group-hover:scale-105 transition-transform ease-in-out delay-75 pb-4"
          />
        </div>
        <p className="child uppercase text-md font-medium group-hover:text-red-800">
          Истражи Повеќе <FontAwesomeIcon icon={faChevronRight} size="xs" />
        </p>
      </Link>
    </div>
  );
};

export default DiscoverNavSection;

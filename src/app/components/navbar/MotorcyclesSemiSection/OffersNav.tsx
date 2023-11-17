import React from "react";
import NavLinkListing, { NavLinkListingItemsType } from "../NavLinkListing";
import Image from "next/image";
import image from "../../../../../public/images/offersNavDropdownImage.avif"

export const linkItems: NavLinkListingItemsType[] = [
  {
    text: "Финансирање",
    link: "/motorcycles/ride4less-finance",
  },
  {
    text: "Понуди",
    link: "/latest-offers",
  },
];

const OffersNav = () => {
  return (
    <div className="flex justify-center gap-16 py-4">
      <div>
        <NavLinkListing
          items={linkItems}
          title={"Финансирање & Понуди"}
          bottomLinkText={"Истражи Повеќе"}
          bottomLinkUrl={"/latest-offers"}
        />
      </div>
      <div>
        <Image src={image} alt={"Roadster Riding Pic"} />
      </div>
    </div>
  );
};

export default OffersNav;

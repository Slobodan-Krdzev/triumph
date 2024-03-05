import React from "react";
import NavLinkListing, { NavLinkListingItemsType } from "./NavLinkListing";
import Image from "next/image";
import image from "../../../../public/images/ownersNavDropdownImage.avif";

export const linkItemsTriumph: NavLinkListingItemsType[] = [
  {
    text: "Muc-off",
    link: "/owners/your-triumph",
  },
  {
    text: "Сигурносна Проверка",
    link: "/owners/safety-checks",
  },
  {
    text: "Препорачани масла",
    link: "/owners/oil-recommendations",
  },
  {
    text: "Гаранција и Помош",
    link: "/owners/your-triumph",
  },
  {
    text: "Мојата Triumph Аpp",
    link: "/owners/my-triumph-app",
  },
  {
    text: "What3words",
    link: "/owners/what3words",
  },
  {
    text: "Упатство за Сопственици",
    link: "/owners/manuals",
  },
];

export const linkItemsQuickLinksOwners: NavLinkListingItemsType[] = [
  {
    text: "Контакт",
    link: "/dealer",
  },
];

const OwnersNavSection = () => {
  return (
    <div className="flex justify-between py-8 md:px-48 lg:px-52">
      <NavLinkListing
        items={linkItemsTriumph}
        title={"Вашиот Triumph"}
        bottomLinkText={"Откријте Повеќе"}
        bottomLinkUrl={"/owners/your-triumph"}
      />

      <NavLinkListing
        items={linkItemsQuickLinksOwners}
        title={"Најнови Модели"}
        bottomLinkText={"Конфигурација"}
        bottomLinkUrl={"/configure"}
      />

      <Image src={image} alt="Triumph Bike" />
    </div>
  );
};

export default OwnersNavSection;

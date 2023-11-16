import React from "react";
import NavLinkListing, { NavLinkListingItemsType } from "./NavLinkListing";
import Image from "next/image";
import image from "../../../../public/images/ownersNavDropdownImage.avif";

const linkItemsTriumph: NavLinkListingItemsType[] = [
  {
    text: "Muc-off",
    link: "/owners/your-triumph",
  },
  {
    text: "Избор на Гуми",
    link: "/owners/your-triumph",
  },
  {
    text: "Сигурносна Проверка",
    link: "/owners/your-triumph/safety-checks",
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

const linkItemsQuickLinks: NavLinkListingItemsType[] = [
  {
    text: "Повлекување",
    link: "/owners/recalls",
  },
  {
    text: "Контакт",
    link: "/global-content/contact-us",
  },
];

const OwnersNavSection = () => {
  return (
    <div className="flex justify-between py-8 md:px-48">
      <NavLinkListing
        items={linkItemsTriumph}
        title={"Вашиот Triumph"}
        bottomLinkText={"Откријте Повеќе"}
        bottomLinkUrl={"/owners/your-triumph"}
      />

      <NavLinkListing
        items={linkItemsQuickLinks}
        title={"Најнови Модели"}
        bottomLinkText={"Конфигурација"}
        bottomLinkUrl={"/dealers/dealers-search"}
      />

      <Image src={image} alt="Triumph Bike" />
    </div>
  );
};

export default OwnersNavSection;

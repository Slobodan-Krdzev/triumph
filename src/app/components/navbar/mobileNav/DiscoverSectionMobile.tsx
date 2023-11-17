"use client"

import {
  faChevronLeft,
  faChevronRight,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Link from "next/link";
import { useState } from "react";
import {
  linkItemsBrand,
  linkItemsExperience,
  linkItemsNews,
  linkItemsRaces,
} from "../DiscoverNavSection";
import MobileMenuList from "./MobileMenuList";

type DiscoverSectionMobile = {
  handler: () => void;
  closeMainMenu: () => void

};

const DiscoverSectionMobile = ({ handler, closeMainMenu }: DiscoverSectionMobile) => {
  const [menusVisibility, setMenusVisibility] = useState({
    news: false,
    races: false,
    brand: false,
    expirinces: false,
  });

  const handleVisibleMenu = (
    menu: "news" | "races" | "brand" | "expiriences" 
  ) => {
    switch (menu) {
      case "news":
        setMenusVisibility({
          news: !menusVisibility.news,
          races: false,
          brand: false,
          expirinces: false,
        });
        break;
      case "races":
        setMenusVisibility({
          news: false,
          races: !menusVisibility.races,
          brand: false,
          expirinces: false,
        });
        break;
      case "brand":
        setMenusVisibility({
          news: false,
          races: false,
          brand: !menusVisibility.brand,
          expirinces: false,
        });
        break;
      case "expiriences":
        setMenusVisibility({
          news: false,
          races: false,
          brand: false,
          expirinces: !menusVisibility.expirinces,
        });
        break;
      default:
        break;
    }
  };

  return (
    <div>
      <div className="flex justify-start items-center px-8 py-4 gray-bg">
        <button className="basis-1/12" onClick={handler}>
          <FontAwesomeIcon icon={faChevronLeft} />
        </button>
        <p className="uppercase text-md basis-10/12 text-center font-semibold">
          новости
        </p>
        <div className="basis-1/12"></div>
      </div>
      <ul className="px-8 py-4 bg-white text-black">
        <MobileMenuList
          handler={() => handleVisibleMenu("news")}
          state={menusVisibility.news}
          menuTitle={"Новости"}
          menuType={"news"}
          menuItems={linkItemsNews}
        />

        <MobileMenuList
          handler={() => handleVisibleMenu("races")}
          state={menusVisibility.races}
          menuTitle={"Трки"}
          menuType={"races"}
          menuItems={linkItemsRaces}
        />

        <MobileMenuList
          handler={() => handleVisibleMenu("brand")}
          state={menusVisibility.brand}
          menuTitle={"За Брендот"}
          menuType={"brand"}
          menuItems={linkItemsBrand}
        />

        <MobileMenuList
          handler={() => handleVisibleMenu("expiriences")}
          state={menusVisibility.expirinces}
          menuTitle={"Искуства"}
          menuType={"experiences"}
          menuItems={linkItemsExperience}
        />

        <li>
          <Link
            href={"/for-the-ride/reviews"}
            className={`text-sm font-light text-gray uppercase py-3 flex w-full justify-between items-center`}
            onClick={closeMainMenu}
          >
            Критики и Препораки
            <FontAwesomeIcon icon={faChevronRight} size="sm" color="gray" />
          </Link>
        </li>
        <li>
          <Link
            href={"/for-the-ride/news/epic-adventures"}
            className={`text-sm font-light text-gray uppercase py-3 flex w-full justify-between items-center`}
            onClick={closeMainMenu}

          >
            Информации
            <FontAwesomeIcon icon={faChevronRight} size="sm" color="gray" />
          </Link>
        </li>
      </ul>
    </div>
  );
};

export default DiscoverSectionMobile;

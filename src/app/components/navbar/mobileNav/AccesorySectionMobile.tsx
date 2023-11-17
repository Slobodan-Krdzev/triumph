"use client";
import {
    faChevronLeft,
    faChevronRight
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Link from "next/link";
import { useState } from "react";
import {
    linkItemsAccessory,
    linkItemsModels,
    linkItemsQuickLinks,
} from "../AccessoriesNavSection";
import MobileMenuList from "./MobileMenuList";

type AccesorySectionProps = {
  handler: () => void;
};

const AccesorySectionMobile = ({ handler }: AccesorySectionProps) => {
  const [menusVisibility, setMenusVisibility] = useState({
    accessories: false,
    models: false,
    links: false,
  });

  const handleVisibleMenu = (menu: "accesories" | "models" | "links") => {
    switch (menu) {
      case "accesories":
        setMenusVisibility({
          accessories: !menusVisibility.accessories,
          models: false,
          links: false,
        });
        break;
      case "models":
        setMenusVisibility({
          accessories: false,
          models: !menusVisibility.models,
          links: false,
        });
        break;
      case "links":
        setMenusVisibility({
          accessories: false,
          models: false,
          links: !menusVisibility.links,
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
          аксесоари
        </p>
        <div className="basis-1/12"></div>
      </div>
      <ul className="px-8 py-4 bg-white text-black">
        <MobileMenuList
          handler={() => handleVisibleMenu("accesories")}
          state={menusVisibility.accessories}
          menuTitle={"Аксесоари"}
          menuType={"accesories"}
          menuItems={linkItemsAccessory}
        />

        <MobileMenuList
          handler={() => handleVisibleMenu("models")}
          state={menusVisibility.models}
          menuTitle={"модели"}
          menuType={"models"}
          menuItems={linkItemsModels}
        />

        <MobileMenuList
          handler={() => handleVisibleMenu("links")}
          state={menusVisibility.links}
          menuTitle={"Најбарани Линкови"}
          menuType={"links"}
          menuItems={linkItemsQuickLinks}
        />

        <li>
          <Link
            href={"/configure"}
            className={`text-sm font-light text-gray uppercase py-3 flex w-full justify-between items-center`}
          >
            Конфигурација
            <FontAwesomeIcon icon={faChevronRight} size="sm" color="gray" />
          </Link>
        </li>
      </ul>
    </div>
  );
};

export default AccesorySectionMobile;

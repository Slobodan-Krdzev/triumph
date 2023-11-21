"use client";
import {
  faArrowRight,
  faBars,
  faChevronLeft,
  faLocationPin,
  faSlidersH,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { motion } from "framer-motion";
import Link from "next/link";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import { useState } from "react";
import { getBikesByEdition } from "../../helpers/getBikesByEdition";
import MotorcycleCard from "./MotorcycleCard";

type MotorcycleSectionMobileProps = {
  handler: () => void;
  families: any[];
  bikes: any[];
  closeMainMenu: () => void;
};

const MotorcycleSectionMobile = ({
  handler,
  families = [],
  bikes = [],
  closeMainMenu,
}: MotorcycleSectionMobileProps) => {
  const [areMotorsShown, setAreMotorsShown] = useState(false);
  const [bikeInFocus, setBikeInFocus] = useState(0);
  const router = useRouter();
  const pathname = usePathname();
  const famQuery = useSearchParams().get("bikeType");

  const handleSectionClose = () => setAreMotorsShown(!areMotorsShown);

  const handleMotorsSection = (bikeType: string) => {
    router.push(`${pathname}?section=true&bikeType=${bikeType}`);

    setAreMotorsShown(!areMotorsShown);
  };

  const closeSection = () => router.push(`${pathname}?section=false`);

  const handleBikeToFocus = (bikeNum: number) => {
    setBikeInFocus(bikeNum);
  };

  return (
    <div>
      <div className="flex justify-start items-center px-8 py-4 gray-bg">
        <button
          className="basis-1/12"
          onClick={() => {
            handleSectionClose();
            setBikeInFocus(0);
            closeSection();
          }}
        >
          <FontAwesomeIcon icon={faChevronLeft} />
        </button>
        <p className="uppercase text-md basis-10/12 text-center font-semibold">
          МоторИ
        </p>
        <div className="basis-1/12"></div>
      </div>
      <div className="px-8 py-4 bg-white text-black">
        <ul className="mb-8">
          {families.map((family) => (
            <li key={family.id}>
              <button
                className="text-md font-semibold mb-1 uppercase"
                onClick={() => handleMotorsSection(family)}
              >
                {family}
              </button>
            </li>
          ))}
        </ul>

        <Link
          href={"/approved-triumph-pre-owned-motorcycles"}
          className="mb-8 block text-sm"
        >
          Проверени Second-Hand Мотори
        </Link>

        <ul className="flex flex-col gap-1 items-start">
          <li>
            <Link
              href={"/configure/bikes"}
              className="text-black flex justify-start gap-4 items-center text-sm"
            >
              <FontAwesomeIcon
                icon={faBars}
                color="black"
                size="lg"
                className="basis-1/12"
              />
              Модели
            </Link>
          </li>
          <li>
            <Link
              href={"/configure"}
              className="text-black flex justify-start gap-4 items-center text-sm"
            >
              <FontAwesomeIcon
                icon={faSlidersH}
                color="black"
                size="lg"
                className="basis-1/12"
              />
              Конфигурација
            </Link>
          </li>
          <li>
            <Link
              href={"/dealers/dealers-search"}
              className="text-black flex justify-start gap-4 items-center text-sm"
            >
              <FontAwesomeIcon
                icon={faLocationPin}
                color="black"
                size="lg"
                className="basis-1/12"
              />
              Продавница
            </Link>
          </li>
        </ul>
      </div>

      {areMotorsShown && (
        <motion.div
          className="fixed top-0 right-0 left-0 h-screen bg-white z-50 text-black overflow-y-auto"
          initial={{ x: "100vw" }}
          animate={{ x: 0 }}
          exit={{ x: "100vw" }}
        >
          <div className="px-8 py-4 gray-bg text-white items-center flex justify-between" >
            <button
              className="basis-1/12"
              onClick={() => setAreMotorsShown(false)}
            >
              <FontAwesomeIcon icon={faChevronLeft} />
            </button>
            <p className="uppercase text-md basis-10/12 text-center font-semibold">
              {famQuery}
            </p>
            <div className="basis-1/12"></div>
          </div>
          <div className="flex justify-between items-center mb-4 px-3 pt-2">
            <p className="uppercase font-semibold text-2xl">{famQuery}</p>
            {famQuery !== "special" &&
              famQuery !== "stealth" &&
              famQuery !== "chrome" && (
                <Link
                  href={`/motorcycles/${famQuery}`}
                  className="font-semibold uppercase text-md"
                  onClick={closeMainMenu}
                >
                  Истражи
                  <FontAwesomeIcon
                    icon={faArrowRight}
                    className="ml-2"
                    size="xs"
                  />
                </Link>
              )}
          </div>
          <div>
            {getBikesByEdition(famQuery!, bikes).map((bike: any, idx) => (
              <MotorcycleCard
                key={bike.id}
                bike={bike}
                idx={idx}
                bikeToFocus={bikeInFocus}
                focusHandler={handleBikeToFocus}
                closeMainMenu={closeMainMenu}
              />
            ))}
          </div>
        </motion.div>
      )}
    </div>
  );
};

export default MotorcycleSectionMobile;

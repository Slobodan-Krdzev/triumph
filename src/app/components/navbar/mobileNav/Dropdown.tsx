"use client";
import {
  faChevronDown,
  faChevronRight,
  faChevronUp,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { motion } from "framer-motion";
import Image from "next/image";
import Link from "next/link";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import { useState } from "react";
import AccesorySectionMobile from "./AccesorySectionMobile";
import ClothingSectionMobile from "./ClothingSectionMobile";
import DiscoverSectionMobile from "./DiscoverSectionMobile";
import LocationsMobile from "./LocationsMobile";
import MotorcycleSectionMobile from "./MotorcycleSectionMobile";
import OffersSectionMobile from "./OffersSectionMobile";
import OwnersSectionMobile from "./OwnersSectionMobile";

type SectionTypeType =
  | ""
  | "moto"
  | "accessories"
  | "owners"
  | "clothing"
  | "discover"
  | "moto-offers"
  | "locations";

type DropdownProps = {
  visibility: boolean;
  closeMainMenu: () => void;
  families: any[];
  bikes: any[];
};

const Dropdown = ({
  visibility,
  closeMainMenu,
  families,
  bikes,
}: DropdownProps) => {
  const [isMotoTabOpen, setIsMotoTabOpen] = useState(true);
  const [sectionType, setSectionType] = useState<SectionTypeType>("");

  const router = useRouter();
  const pathname = usePathname();
  const query = useSearchParams();

  const handleSectionOpen = (type?: SectionTypeType) => {
    if (query.get("section") && query.get("section") === "true") {
      router.push(`${pathname}?section=${false}`, { scroll: false });
    } else {
      router.push(`${pathname}?section=${true}`, { scroll: false });
    }

    setSectionType(type ? type : "");
  };

  const handleSectionClose = () => {
    router.push(`${pathname}?section=false`);
  };

  return (
    <>
      <motion.div
        className="fixed bg top-16 right-0 left-0 z-50 h-screen text-white overflow-y-scroll"
        initial={{ opacity: 0, y: -20 }}
        animate={{ opacity: 1, y: 0 }}
        exit={{ opacity: 0, y: -20 }}
      >
        <ul className="block">
          <li className="min-w-100 px-8">
            <button
              className="flex justify-between items-center w-full py-4"
              onClick={() => setIsMotoTabOpen(!isMotoTabOpen)}
            >
              <span className="text-md uppercase font-semibold">Мотори</span>
              <FontAwesomeIcon
                icon={isMotoTabOpen ? faChevronUp : faChevronDown}
                size="lg"
              />
            </button>
          </li>
          {isMotoTabOpen && (
            <>
              <motion.li
                initial={{ opacity: 0, y: -20 }}
                animate={{ opacity: 1, y: 0 }}
                exit={{ opacity: 0, y: -20 }}
                className="min-w-100 bg-white text-black px-8"
              >
                <button
                  className="flex justify-between items-center w-full py-4"
                  onClick={() => handleSectionOpen("moto")}
                >
                  <span className="text-md uppercase font-semibold">
                    Мотори
                  </span>
                  <FontAwesomeIcon icon={faChevronRight} size="lg" />
                </button>
              </motion.li>

              <motion.li
                initial={{ opacity: 0, y: -20 }}
                animate={{ opacity: 1, y: 0 }}
                exit={{ opacity: 0, y: -20 }}
                className="min-w-100 bg-white text-black px-8"
              >
                <button
                  className="flex justify-between items-center w-full py-4"
                  onClick={() => handleSectionOpen("moto-offers")}
                >
                  <span className="text-md uppercase font-semibold">
                    Понуди
                  </span>
                  <FontAwesomeIcon icon={faChevronRight} size="lg" />
                </button>
              </motion.li>
            </>
          )}

          <li className="min-w-100">
            <button
              className="flex justify-between items-center w-full py-4 px-8"
              onClick={() => handleSectionOpen("accessories")}
            >
              <span className="text-md uppercase font-semibold">Аксесоари</span>
              <FontAwesomeIcon icon={faChevronDown} size="lg" />
            </button>
          </li>
          <li className="min-w-100">
            <button
              className="flex justify-between items-center w-full py-4 px-8"
              onClick={() => handleSectionOpen("clothing")}
            >
              <span className="text-md uppercase font-semibold">Облека</span>
              <FontAwesomeIcon icon={faChevronDown} size="lg" />
            </button>
          </li>
          <li className="min-w-100">
            <button
              className="flex justify-between items-center w-full py-4 px-8"
              onClick={() => handleSectionOpen("owners")}
            >
              <span className="text-md uppercase font-semibold">
                Сопственици
              </span>
              <FontAwesomeIcon icon={faChevronDown} size="lg" />
            </button>
          </li>
          <li className="min-w-100">
            <Link
              href={"https://triumph-mediakits.com/en/news/news-listing.html"}
              className="flex justify-between items-center text-md uppercase font-semibold w-full py-4 px-8"
              target="_blank"
            >
              Новости
              <FontAwesomeIcon icon={faChevronRight} size="lg" />
            </Link>
          </li>
        </ul>
        <ul className="px-8 pt-8 text-sm font-semibold h-48">
          <li className="mt-4">
            <Link href={"/dealer"}>Контакт</Link>
          </li>
          <li className="mt-4">
            <Link href={"/configure"}>Конфигурација</Link>
          </li>
          <li className="uppercase my-4">
            <Link href={"/latest-offers"}>Понуди</Link>
          </li>
          <li className="flex justify-start items-center gap-2">
            <button
              onClick={() => handleSectionOpen("locations")}
              className="flex justify-start items-center gap-2"
            >
              <Image
                src={"/images/pinIcon-01.svg"}
                alt="Pin"
                width={30}
                height={30}
              />{" "}
              Macedonia
              <FontAwesomeIcon icon={faChevronRight} size="lg" />
            </button>
          </li>
        </ul>
      </motion.div>

      {query.get("section") === "true" && (
        <motion.div
          className="fixed top-16 right-0 left-0 h-screen bg-white z-50 text-white overflow-y-auto"
          style={{ height: " calc(100vh - 64px)" }}
          initial={{ x: "100vw" }}
          animate={{ x: 0 }}
          exit={{ x: "100vw" }}
        >
          {sectionType === "moto" && (
            <MotorcycleSectionMobile
              handler={handleSectionClose}
              families={families}
              bikes={bikes}
              closeMainMenu={closeMainMenu}
            />
          )}
          {sectionType === "moto-offers" && (
            <OffersSectionMobile handler={handleSectionClose} />
          )}

          {sectionType === "accessories" && (
            <AccesorySectionMobile handler={handleSectionClose} bikes={bikes} />
          )}
          {sectionType === "clothing" && (
            <ClothingSectionMobile handler={handleSectionClose} />
          )}
          {sectionType === "owners" && (
            <OwnersSectionMobile handler={handleSectionClose} />
          )}
          {sectionType === "discover" && (
            <DiscoverSectionMobile handler={handleSectionClose} />
          )}
          {sectionType === "locations" && (
            <LocationsMobile handler={handleSectionClose} />
          )}
        </motion.div>
      )}
    </>
  );
};

export default Dropdown;

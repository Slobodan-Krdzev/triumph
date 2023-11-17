"use client";
import {
    faChevronDown,
    faChevronRight,
    faChevronUp,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { motion } from "framer-motion";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import { useState } from "react";
import AccesorySectionMobile from "./AccesorySectionMobile";
import ClothingSectionMobile from "./ClothingSectionMobile";
import DiscoverSectionMobile from "./DiscoverSectionMobile";
import MotorcycleSectionMobile from "./MotorcycleSectionMobile";
import OwnersSectionMobile from "./OwnersSectionMobile";

type SectionTypeType =
  | ""
  | "moto"
  | "accessories"
  | "owners"
  | "clothing"
  | "discover";

type DropdownProps = {
  visibility: boolean;
};

const Dropdown = ({ visibility }: DropdownProps) => {
  const [isMotoTabOpen, setIsMotoTabOpen] = useState(true);
  const [sectionType, setSectionType] = useState<SectionTypeType>("");

  const router = useRouter();
  const pathname = usePathname();
  const query = useSearchParams();

  const handleSectionOpen = (type?: SectionTypeType) => {
    if (query.get("section") && query.get("section") === "true") {
      router.push(`${pathname}?section=${false}`);
    } else {
      router.push(`${pathname}?section=${true}`);
    }

    setSectionType(type ? type : "");
  };

  const handleSectionClose = () => router.push(`${pathname}?section=false`)

  return (
    <>
      <motion.div
        className="fixed bg top-16 right-0 left-0 h-screen z-50 text-white"
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
              <li className="min-w-100 bg-white text-black px-8">
                <button
                  className="flex justify-between items-center w-full py-4"
                  onClick={() => handleSectionOpen("moto")}
                >
                  <span className="text-md uppercase font-semibold">
                    Мотори
                  </span>
                  <FontAwesomeIcon icon={faChevronRight} size="lg" />
                </button>
              </li>

              <li className="min-w-100 bg-white text-black px-8">
                <button className="flex justify-between items-center w-full py-4">
                  <span className="text-md uppercase font-semibold">
                    Понуди
                  </span>
                  <FontAwesomeIcon icon={faChevronRight} size="lg" />
                </button>
              </li>
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
            <button
              className="flex justify-between items-center w-full py-4 px-8"
              onClick={() => handleSectionOpen("discover")}
            >
              <span className="text-md uppercase font-semibold">Новости</span>
              <FontAwesomeIcon icon={faChevronDown} size="lg" />
            </button>
          </li>
        </ul>
      </motion.div>

      {query.get("section") === "true" && (
        <motion.div
          className="fixed top-16 right-0 left-0 h-screen bg-white z-50 text-white border"
          initial={{ x: "100vw" }}
          animate={{ x: 0 }}
          exit={{ x: "100vw" }}
        >
          {sectionType === "moto" && <MotorcycleSectionMobile />}
          {sectionType === "accessories" && <AccesorySectionMobile handler={handleSectionClose}/>}
          {sectionType === "clothing" && <ClothingSectionMobile />}
          {sectionType === "owners" && <OwnersSectionMobile handler={handleSectionClose}/>}
          {sectionType === "discover" && <DiscoverSectionMobile handler={handleSectionClose} />}
        </motion.div>
      )}
    </>
  );
};

export default Dropdown;

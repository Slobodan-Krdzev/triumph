"use client";
import { faMinus, faPlus } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import React, { useState } from "react";
import MainBtn from "../../MainBtn";
import { motion } from "framer-motion";

type MotorcycleCardProps = {
  bike: any;
  idx: number;
  bikeToFocus: number;
  focusHandler: (idx: number) => void;
  closeMainMenu: () => void
};

const MotorcycleCard = ({
  bike,
  idx,
  bikeToFocus,
  focusHandler,
  closeMainMenu
}: MotorcycleCardProps) => {

  return (
    <div
      className={`px-2 py-4 border-thin-gray-bottom ${
        idx === bikeToFocus ? "slight-white-bg" : ""
      }`}
    >
      <div className="flex justify-between items-center">
        <Image
          className="basis-4/12"
          src={bike.gallery.modelImage.src}
          alt={bike.gallery.modelImage.alt}
          width={88}
          height={68}
        />
        <div className="basis-6/12">
          <h4 className="uppercase font-semibold">{bike.title}</h4>
          <p className="text-gray-500 text-sm">
            {bike.price === null ? "Цени Наскоро" : `Цена: €${bike.price}.00 `}
          </p>
        </div>
        <button className="mr-3" onClick={() => focusHandler(idx)}>
          <FontAwesomeIcon
            icon={idx === bikeToFocus ? faMinus : faPlus}
            className="basis-2/12"
            size="xl"
          />
        </button>
      </div>
      {idx === bikeToFocus && (
        <motion.div
          initial={{ opacity: 0, y: -20 }}
          animate={{ opacity: 1, y: 0 }}
          exit={{ opacity: 0, y: -20 }}
          className="flex justify-center gap-4 my-2"
        >
          <MainBtn
            text={"Конфигурирај"}
            bgBlack={false}
            isLink={true}
            link={`/configure/bikes/${bike?.subFamilyName}`}
            // action={closeMainMenu}
          />
          <MainBtn
            text={"Детали"}
            bgBlack={true}
            isLink={true}
            link={`/motorcycles/${bike?.familyType}/${bike?.subFamilyName}`}
            action={closeMainMenu}
          />
        </motion.div>
      )}
    </div>
  );
};

export default MotorcycleCard;

import { faChevronLeft } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React from "react";
import ClothingNavCard from "../ClothingNavCard";
import { clothingItems } from "../ClothingNavSection";

type ClothingSectionProps = {
  handler: () => void;
};

const ClothingSectionMobile = ({ handler }: ClothingSectionProps) => {
  return (
    <div>
      <div className="flex justify-start items-center px-8 py-4 gray-bg">
        <button className="basis-1/12" onClick={handler}>
          <FontAwesomeIcon icon={faChevronLeft} />
        </button>
        <p className="uppercase text-md basis-10/12 text-center font-semibold">
          Облека
        </p>
        <div className="basis-1/12"></div>
      </div>
      <div className="flex justify-between flex-wrap p-4 text-black">
        {clothingItems.map((item) => (
          <div key={item.title} className="basis-6/12 p-1 last:mt-4">
            <ClothingNavCard
              title={item.title}
              desc={item.desc}
              link={item.link}
              image={{
                src: item.image.src,
                alt: item.image.alt,
              }}
            />
          </div>
        ))}
      </div>
    </div>
  );
};

export default ClothingSectionMobile;

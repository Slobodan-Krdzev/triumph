import React from "react";
import { CarousellItemType } from "../MainCarousell";
import MobileCaroItem from "./MobileCaroItem";
import { faArrowLeft, faArrowRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";

type MobileCarousellProps = {
  items: CarousellItemType[];
  progress: number;
  activeIndex: number;
  updateIndex: (index: number) => void;
};

const MobileCarousell = ({
  items = [],
  progress,
  activeIndex,
  updateIndex,
}: MobileCarousellProps) => {
  return (
    <section className="relative overflow-hidden border">
        <button
          onClick={() => updateIndex(activeIndex - 1)}
          className="gradient-caro-btn-left-to-right absolute left-0 z-20 bg-white text-black top-0 overlay-carousell-btn w-20 flex flex-col justify-end items-center pb-10"
          style={{ height: "50vh" }}
        >
          <FontAwesomeIcon
            icon={faArrowLeft}
            color="white"
            size="lg"
            className="mt-5"
          />
        </button>

        <button
          onClick={() => updateIndex(activeIndex + 1)}
          className="gradient-caro-btn-right-to-left absolute right-0 z-20 bg-white text-black top-0 overlay-carousell-btn w-20 flex flex-col justify-end items-center pb-10"
          style={{ height: "50vh" }}
        >
          
          <FontAwesomeIcon
            icon={faArrowRight}
            color="white"
            size="lg"
            className="mt-5"
          />
        </button>

      <div className="h-1 z-30 w-screen absolute top-0 left-0">
        <div
          className="red-bg-color h-2"
          style={{
            width: `${progress}%`,
            height: "100%",
          }}
        ></div>
      </div>

      <div
        style={{ transform: `translate(-${activeIndex * 100}%)` }}
        className="transition-transform delay-300 ease-in-out flex"
      >
        {items.map((item, idx) => (
          <MobileCaroItem key={idx} item={item} />
        ))}
      </div>
    </section>
  );
};

export default MobileCarousell;

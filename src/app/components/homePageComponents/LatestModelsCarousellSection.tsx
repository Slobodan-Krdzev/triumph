"use client";
import React, { useState } from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import LatestModelsCarousellItem from "./LatestModelsCarousellItem";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faArrowRight, faArrowLeft } from "@fortawesome/free-solid-svg-icons";

const carousellItems = [
  {
    title: "SCRAMBLER 1200",
    desc: "Authentic Scrambler style with class-defining adventure ready capability; the Scrambler 1200 is the real deal. The latest editions are even more accessible and ready for the everyday, weekend escapism and pure adventure.",
    url: "/motorcycles/classic/Bonneville Scrambler 1200",
    image: "/images/home/scrambler1200LatestModelsCarousell.avif",
  },
  {
    title: "TIGER 900 ARAGON EDITIONS",
    desc: "Inspired by the dominant, race-winning performance of the Tiger 900 Rally Pro at the 2022 Baja Aragón rally.",
    url: "/motorcycles/adventure/Tiger 900",
    image: "/images/home/tiger900AragonLatestModelsCarousell.avif",
  },
  {
    title: "SPEED 400",
    desc: "Born into a peerless bloodline, the Speed 400 has Triumph’s unique Modern Classic roadster design in its DNA.",
    url: "/motorcycles/classic/Speed 400",
    image: "/images/home/speed400LatestModelsCarousell.avif",
  },
  {
    title: "SCRAMBLER 400 X",
    desc: "Beautifully balanced, effortlessly agile. The Scrambler 400 X is built for all riders and all terrains.",
    url: "/motorcycles/classic/Scrambler 400 X",
    image: "/images/home/scrambler400XLatestModelsCarousell.avif",
  },
];

const LatestModelsCarousellSection = () => {
  const [activeIndex, setActiveIndex] = useState(0);

  const updateIndex = (newIndex: number) => {
    if (newIndex < 0) {
      newIndex = 0;
    } else if (newIndex >= carousellItems.length) {
      newIndex = carousellItems.length - 1;
    }

    setActiveIndex(newIndex);
  };

  return (
    <section className="flex items-center flex-col overflow-hidden relative pt-16 basis-1/2">
      <SectionTitleH2 text={"Најнови Модели"} color={"dark"} />

      <div className="carousell-indicators z-10 flex justify-between w-1/6 text-xl text-neutral-600">
        <p>
          0{activeIndex + 1} / 0{carousellItems.length}
        </p>
        <div className="flex justify-between gap-4">
          <button onClick={() => updateIndex(activeIndex - 1)}>
            <FontAwesomeIcon icon={faArrowLeft} />
          </button>
          <button onClick={() => updateIndex(activeIndex + 1)}>
            <FontAwesomeIcon icon={faArrowRight} />
          </button>
        </div>
      </div>

      <div
        style={{ transform: `translate(-${activeIndex * 100}%)` }}
        className="transition-transform delay-300 ease-in-out flex mt-16"
      >
        {carousellItems.map((item) => (
          <LatestModelsCarousellItem
            key={item.desc}
            width={"100%"}
            title={item.title}
            image={item.image}
            desc={item.desc}
            url={item.url}
          />
        ))}
      </div>
    </section>
  );
};

export default LatestModelsCarousellSection;

"use client";
import { faArrowLeft, faArrowRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useState } from "react";
import MainBtn from "../MainBtn";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import { carousellItems } from "./LatestModelsCarousellSection";

const LatestModelsMobile = () => {
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
    <section className="flex flex-col items-center overflow-hidden relative p-4">
      <SectionTitleH2 text={"Најнови Модели"} color={"dark"} />

      <div className="z-10 mb-2 flex justify-between text-xl text-neutral-600 w-full px-4">
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
        className="flex items-center justify-center w-full h-64 overflow-hidden"
        style={{
          background: `url(${carousellItems[activeIndex].image}) center/cover`,
        }}
      >
      </div>

      <div className="md:basis-2/5 flex flex-col justify-center items-start">
        <SectionTitleH2 text={carousellItems[activeIndex].title} color={"dark"} />
        <p className="mb-4">{carousellItems[activeIndex].desc}</p>
        <MainBtn
          text={"Детали"}
          bgBlack={true}
          isLink={true}
          link={carousellItems[activeIndex].url}
          fullWidth={false}
        />
      </div>
    </section>
    
  );
};

export default LatestModelsMobile;

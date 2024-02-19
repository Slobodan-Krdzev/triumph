"use client";
import { faArrowLeft, faArrowRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useState } from "react";
import MainBtn from "../MainBtn";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import { LatestModelsCarousellItemType } from "./LatestModelsCarousellSection";

type LatesModelsMObileProps = {
  items: LatestModelsCarousellItemType[],
  showTitle: boolean
}

const LatestModelsMobile = ({items = [], showTitle}: LatesModelsMObileProps) => {
  const [activeIndex, setActiveIndex] = useState(0);

  const updateIndex = (newIndex: number) => {
    if (newIndex < 0) {
      newIndex = 0;
    } else if (newIndex >= items.length) {
      newIndex = items.length - 1;
    }

    setActiveIndex(newIndex);
  };

  return (
    <section className="flex flex-col items-center overflow-hidden relative p-4 gap-4">
      
      {showTitle && <SectionTitleH2 text={"Најнови Модели"} color={"dark"} />}

      <div className="z-10 mb-2 flex justify-between text-xl text-neutral-600 w-full px-4">
        <p>
        {(activeIndex + 1) > 9 ? activeIndex + 1 : `0${activeIndex + 1}`} / {items.length > 9 ? `${items.length}` : `0${items.length}`}
        </p>
        <div className="flex justify-between gap-4">
          <button onClick={() => updateIndex(activeIndex - 1)}>
            <FontAwesomeIcon icon={faArrowLeft} size="lg"/>
          </button>
          <button onClick={() => updateIndex(activeIndex + 1)}>
            <FontAwesomeIcon icon={faArrowRight} size="lg"/>
          </button>
        </div>
      </div>

      <div
        className="flex items-center justify-center w-full h-64 overflow-hidden"
        style={{
          background: `url(${items[activeIndex].image}) center/cover`,
        }}
      >
      </div>

      <div className="md:basis-2/5 flex flex-col justify-center items-start mt-4">
        <SectionTitleH2 text={items[activeIndex].title} color={"dark"} />
        <p className="mb-4">{items[activeIndex].desc}</p>
        {items[activeIndex].url && <MainBtn
          text={"Детали"}
          bgBlack={true}
          isLink={true}
          link={items[activeIndex].url}
          fullWidth={false}
        />}
        
      </div>
    </section>
    
  );
};

export default LatestModelsMobile;

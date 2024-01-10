"use client";
import { faArrowLeft, faArrowRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useState } from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import { useBreakpoint } from "../helpers/useBreakpoint";
import LatestModelsCarousellItem from "./LatestModelsCarousellItem";
import LatestModelsMobile from "./LatestModelsMobile";

export type LatestModelsCarousellItemType = {
  title: string,
  desc: string,
  url?: string,
  image: string,
}





type LatesModelsCarousellSectionProps = {
  items: LatestModelsCarousellItemType[],
  showTitle: boolean
}

const LatestModelsCarousellSection = ({items, showTitle}: LatesModelsCarousellSectionProps) => {
  const [activeIndex, setActiveIndex] = useState(0);
  const breakpoint = useBreakpoint()

  const updateIndex = (newIndex: number) => {
    if (newIndex < 0) {
      newIndex = 0;
    } else if (newIndex >= items.length) {
      newIndex = items.length - 1;
    }

    setActiveIndex(newIndex);
  };


  if(breakpoint >= 1024) {
    return (
      <section className="flex items-center flex-col overflow-hidden relative pt-16 basis-1/2">
        {showTitle && <SectionTitleH2 text={"Најнови Модели"} color={"dark"} />}
        
  
        <div className="carousell-indicators z-10 flex justify-between w-1/6 text-xl text-neutral-600">
          <p>
            {(activeIndex + 1) > 9 ? activeIndex + 1 : `0${activeIndex + 1}`} / {items.length > 9 ? `${items.length}` : `0${items.length}`}
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
          {items.map((item) => (
            <LatestModelsCarousellItem
              key={item.image}
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
  }
  
  if(breakpoint < 1024) {
    return <LatestModelsMobile items={items} showTitle={true}/>
  }
};

export default LatestModelsCarousellSection;

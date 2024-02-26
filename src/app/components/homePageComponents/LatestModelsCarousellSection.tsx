"use client";
import { useState } from "react";
import { useBreakpoint } from "../helpers/useBreakpoint";
import LatestCaroV2 from "./LatestCaroV2";
import LatestModelsMobile from "./LatestModelsMobile";

export type LatestModelsCarousellItemType = {
  title: string;
  desc: string;
  url?: string;
  image: string;
};

type LatesModelsCarousellSectionProps = {
  items: LatestModelsCarousellItemType[];
  showTitle: boolean;
};

const LatestModelsCarousellSection = ({
  items,
  showTitle,
}: LatesModelsCarousellSectionProps) => {
  const [activeIndex, setActiveIndex] = useState(0);
  const breakpoint = useBreakpoint();

  const updateIndex = (newIndex: number) => {
    if (newIndex < 0) {
      newIndex = 0;
    } else if (newIndex >= items.length) {
      newIndex = items.length - 1;
    }

    setActiveIndex(newIndex);
  };

  if (breakpoint >= 1024) {
    return (
      //   {/* controls   */}
      //   <div className="carousell-indicators z-10 flex justify-between w-1/6 text-xl text-neutral-600">
      //     <p className="ml-20">
      //       {activeIndex + 1 > 9 ? activeIndex + 1 : `0${activeIndex + 1}`} /{" "}
      //       {items.length > 9 ? `${items.length}` : `0${items.length}`}
      //     </p>
      //     <div className="flex justify-between gap-4">
      //       <button onClick={() => updateIndex(activeIndex - 1)}>
      //         <FontAwesomeIcon icon={faArrowLeft} size="lg" />
      //       </button>
      //       <button onClick={() => updateIndex(activeIndex + 1)}>
      //         <FontAwesomeIcon icon={faArrowRight} size="lg" />
      //       </button>
      //     </div>
      //   </div>
      <section className="py-8 lg:my-16">
        <LatestCaroV2 items={items} />
      </section>
    );
  }

  if (breakpoint < 1024) {
    return <LatestModelsMobile items={items} showTitle={true} />;
  }
};

export default LatestModelsCarousellSection;

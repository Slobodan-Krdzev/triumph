"use client";
import { faArrowLeft, faArrowRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useEffect, useState } from "react";
import { useBreakpoint } from "../../helpers/useBreakpoint";
import MainCarousellItem from "./MainCarousellItem";
import MobileCarousell from "./MobileCarousell/MobileCarousell";
import { useSearchParams } from "next/navigation";

export type CarousellItemType = {
  image?: string;
  imageMobile? :string
  video?: string;
  title: string;
  desc: string;
  link1: {
    url: string;
    text: string;
  };
  link2?: {
    url: string;
    text: string;
  };
};

type MainCarousellProps = {
  items: CarousellItemType[] | any[];
};

const MainCarousell = ({ items = [] }: MainCarousellProps) => {
  const [activeIndex, setActiveIndex] = useState(0);
  const [progress, setProgress] = useState(0);
  const breakpoint = useBreakpoint();

  const updateIndex = (newIndex: number) => {
    if (newIndex < 0) {
      newIndex = 0;
    } else if (newIndex >= items.length) {
      newIndex = items.length - 1;
    }

    setActiveIndex(newIndex);
  };

  // AUTOPLAY
  useEffect(() => {
    const interval = setInterval(() => {
      setActiveIndex((prevIndex) => (prevIndex + 1) % items.length);
    }, 8000);

    return () => clearInterval(interval);
  }, [activeIndex, items.length]);

  //   PROGRESS BAR
  useEffect(() => {
    const interval = setInterval(() => {
      setProgress((prevProgress) => {
        const newProgress = prevProgress + 1;
        if (newProgress >= 100) {
          clearInterval(interval);
        }
        return newProgress;
      });
    }, 85);

    return () => {
      setProgress(0);
      clearInterval(interval);
    };
  }, [activeIndex]);

  if (breakpoint >= 1024) {
    return (
      <div className="relative overflow-hidden" style={{ height: "90vh" }}>
        
        <div
          style={{ transform: `translate(-${activeIndex * 100}%)` }}
          className="transition-transform delay-300 ease-in-out flex"
        >
          {items.map((item, idx) => (
            <MainCarousellItem key={idx} item={item} />
          ))}
        </div>
        <button
          onClick={() => updateIndex(activeIndex - 1)}
          className="gradient-caro-btn-right-to-left absolute z-20 bg-transparent text-black top-0 h-full  w-18 flex flex-col justify-end items-center pb-10"
          style={{ right: "80px" }}
        >
          <p className="rotate-90 text-white font-semibold uppercase font-xl mb-5">
            {"Претходно"}
          </p>
          <FontAwesomeIcon
            icon={faArrowLeft}
            color="white"
            size="lg"
            className="mt-5"
          />
        </button>

        <div className="absolute top-0 h-full right-0 flex flex-row">
          <button
            onClick={() => updateIndex(activeIndex + 1)}
            className="gradient-caro-btn-left-to-right bg-transparent h-full z-20 text-black  w-20 flex flex-col justify-end items-center pb-10"
            style={{ right: "0%" }}
          >
            <p className="rotate-90 text-white font-semibold uppercase font-xl mb-5">
              {"Следно"}
            </p>
            <FontAwesomeIcon
              icon={faArrowRight}
              color="white"
              size="lg"
              className="mt-5"
            />
          </button>
        </div>
      </div>
    );
  }

  if (breakpoint < 1024) {
    return (
      <MobileCarousell
        items={items}
        progress={progress}
        activeIndex={activeIndex}
        updateIndex={updateIndex}
      />
    );
  }
};

export default MainCarousell;

"use client";
import Image from "next/image";
import { useEffect, useState } from "react";
import { useBreakpoint } from "../../helpers/useBreakpoint";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import {
  faArrowLeft,
  faArrowRight,
  faChevronLeft,
  faChevronRight,
} from "@fortawesome/free-solid-svg-icons";
import MainCarousellItem from "./MainCarousellItem";

const items = [
  {
    video: "/images/home/mainCarousell/thruxtonCaroVideo.webm",
    title: "Новата Thruxton Final Edition",
    desc: "За крај на една ера - Thruxton Final Edition",
    link1: {
      url: "/motorcycles/classic/thruxton-rs/thruxton-final-edition-2024",
      text: "Погледни ја Серијата",
    },
  },
  {
    image: "/images/home/mainCarousell/Speed400CaroImage.avif",
    title: "Нови Попусти, Нови Цени",
    desc: "Погледнете ги новите цени за Speed 400 & Scrambler 400 X",
    link1: {
      url: "/motorcycles/classic/speed-400",
      text: "Speed 400",
    },
    link2: {
      url: "/motorcycles/classic/scrambler-400-x",
      text: "Scrambler 400 X",
    },
  },
  {
    video: "/images/home/mainCarousell/scrambler1200CaroVideo.webm",
    title: "Направени за секој терен",
    desc: "Новите Scrambler 1200 XE & X",
    link1: {
      url: "/motorcycles/classic/bonneville-scrambler-1200",
      text: "Погледни ја Серијата",
    },
  },
  {
    video: "/images/home/mainCarousell/tigerCaroVideo.webm",
    title: "Tiger 900 Серија",
    desc: "Новиот Tiger 900 повторно повторно се искачи на врвот и стана репер за останатите мотори од авантуристички карактер. Откријте го новиот Tiger 900.",
    link1: {
      url: "/motorcycles/adventure/tiger-900",
      text: "Погледни ја Серијата",
    },
    link2: {
        url: "/configure/bike/tiger-900-gt-2024",
        text: "Конфигурации",
      },
  },
  {
    video: "/images/home/mainCarousell/stealthEditionsCaroVideo.webm",
    title: "Драматичен Custom Стил",
    desc: "Новата Triumph Stealth Серија",
    link1: {
      url: "/motorcycles/classic/stealth-editions",
      text: "Погледни ја Серијата",
    },
  },
];

const MainCarousell = () => {
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
    }, 5000);

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
    }, 55);

    return () => {
      setProgress(0);
      clearInterval(interval);
    };
  }, [activeIndex]);

  return (
    <div className="relative overflow-hidden" style={{height: '90vh'}}>
      <div>
        <div
          className="h-1 z-30 rotate-90 w-screen absolute"
          style={{ right: "-42.7%" }}
        >
          <div
            className="red-bg-color h-2"
            style={{
              width: `${progress}%`,
              height: "100%",
            }}
          ></div>
        </div>
      </div>
      <div
        style={{ transform: `translate(-${activeIndex * 92}%)` }}
        className="transition-transform delay-300 ease-in-out flex"
      >
        {items.map((item, idx) => (
          <MainCarousellItem key={idx} item={item} />
        ))}
      </div>
      <button
        onClick={() => updateIndex(activeIndex - 1)}
        className="absolute z-20 bg-white text-black top-0 h-full overlay-carousell-btn w-14 flex flex-col justify-end items-center pb-10"
        style={{ right: "8%" }}
      >
        <p className="rotate-90 text-white font-semibold uppercase font-xl mb-5">
          Previous
        </p>
        <FontAwesomeIcon
          icon={faArrowLeft}
          color="white"
          size="lg"
          className="mt-5"
        />
      </button>

      <button
        onClick={() => updateIndex(activeIndex + 1)}
        className="absolute z-20 bg-white text-black top-0 h-full overlay-carousell-btn w-14 flex flex-col justify-end items-center pb-10"
        style={{ right: "4.3%" }}
      >
        <p className="rotate-90 text-white font-semibold uppercase font-xl">
          Next
        </p>
        <FontAwesomeIcon
          icon={faArrowRight}
          color="white"
          size="lg"
          className="mt-5"
        />
      </button>
    </div>
  );
};

export default MainCarousell;

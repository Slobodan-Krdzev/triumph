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

const items = [
  { src: "/images/home/reviews.avif", alt: "Item 1" },
  { src: "/images/home/races.avif", alt: "Item 2" },
  { src: "/images/home/experience.avif", alt: "Item 3" },
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

  useEffect(() => {
    const interval = setInterval(() => {
      setActiveIndex((prevIndex) => (prevIndex + 1) % items.length);
    }, 3000);

    return () => clearInterval(interval);
  }, [activeIndex, items.length]);

  useEffect(() => {
    const interval = setInterval(() => {
      setProgress((prevProgress) => {
        const newProgress = prevProgress + 1;
        if (newProgress >= 100) {
          clearInterval(interval);
        }
        return newProgress;
      });
    }, 25);

    return () => {
      setProgress(0);
      clearInterval(interval);
    };
  }, [activeIndex]);

  return (
    <div className="relative overflow-hidden h-screen">
      <div>
    
        <div
          className="h-1 z-50 rotate-90 w-screen absolute"
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
          <div key={idx} style={{ minWidth: "92%" }}>
            <Image src={item.src} alt="asd" width={2000} height={200} />
          </div>
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
        style={{ right: "3.8%" }}
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

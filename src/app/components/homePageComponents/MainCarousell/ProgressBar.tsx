"use client";
import React, { useEffect, useState } from "react";

type ProgressProps = {
  activeIndex: number;
};

const ProgressBar = ({ activeIndex }: ProgressProps) => {
  const [progress, setProgress] = useState(0);

  //   PROGRESS BAR
  useEffect(() => {
    const interval = setInterval(() => {
      setProgress((prevProgress) => {
        const newProgress = prevProgress + 0.125;
        if (newProgress >= 100) {
          clearInterval(interval);
        }
        return newProgress;
      });
    }, 10.5);

    return () => {
      setProgress(0);
      clearInterval(interval);
    };
  }, [activeIndex]);

  return (
    <div
      className="red-bg-color h-2  absolute"
      style={{
        width: `5%`,

        height: `${progress + 2}%`,
        transform: "rotate(180deg)",
        left: 0,
        bottom: 0,
      }}
    ></div>
  );
};

export default ProgressBar;

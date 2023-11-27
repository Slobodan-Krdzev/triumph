"use client";
import { transform } from "framer-motion";
import Image from "next/image";
import React, { useEffect, useState } from "react";
import ImagePreviwer from "./ImagePreviwer";

type Image360Props = {
  image: string;
  alt: string;
};

const Image360 = ({ image, alt }: Image360Props) => {
  // 2.7778

  // const [rotation, setRotation] = useState(3.8228 + 5.800);
  const [deg, setDeg] = useState(0);

  const handleMouseMove = (event:any ) => {
    // You can adjust the factor (2.7778%) based on your needs
    const factor = 2.7778;
    const mouseX = event.clientX / window.innerWidth;
    const newDeg = deg + (mouseX - 0.5) * factor;
    setDeg(newDeg);
  };
  // useEffect(() => {
  //   if (rotation === 0) {
  //     setRotation(5.5228);
  //   }
  //   const timer = setTimeout(() => {
  //     setRotation((prevRotation) => prevRotation + 5.5228);
  //   }, 100);

  //   return () => clearTimeout(timer);
  // }, [rotation]);

  return (
    <>
      <div onMouseMove={handleMouseMove}>
      <ImagePreviwer deg={deg} image={image} alt={alt} />


      </div>
    </>
  );
};

export default Image360;

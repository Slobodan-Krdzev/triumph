"use client";
import { faArrowsLeftRight } from "@fortawesome/free-solid-svg-icons/faArrowsLeftRight";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React, { useState } from "react";

const ImageActions = () => {
  const [isImageReversed, setIsImageReversed] = useState(true);

  const router = useRouter();
  const pathname = usePathname();
  const colorQuery = useSearchParams().get("color");

  const handleReversal = () => {

    if(colorQuery) {
      router.push(`${pathname}?color=${colorQuery}&reversed=${isImageReversed}`);

    } else {
      router.push(`${pathname}?color=color1&reversed=${isImageReversed}`);

    }

    setIsImageReversed(!isImageReversed);
  };

  return (
    <div>
      <div className="absolute group bottom-10  left-1/2">
        <button
          className="p-3 bg rounded-full"
          onClick={handleReversal}
        >
          <FontAwesomeIcon icon={faArrowsLeftRight} size="xl" color="white" />
        </button>
        <p className="absolute -bottom-5 left-1 hidden group-hover:block text-xs">Сврти</p>
      </div>
    </div>
  );
};

export default ImageActions;

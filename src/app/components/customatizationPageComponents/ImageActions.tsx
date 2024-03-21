"use client";
import { faArrowsLeftRight } from "@fortawesome/free-solid-svg-icons/faArrowsLeftRight";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React, { useState } from "react";
import BikeModal from "./BikeModal";
import { faMaximize, faMinimize, faX } from "@fortawesome/free-solid-svg-icons";
import { handleBodyScrollWhenMenuIsOpen } from "../helpers/handleBodyScrollWhenMenuOpens";

type ImageActionsProps = {
  bike?: any;
  modalVersion?: boolean;
};

const ImageActions = ({ bike, modalVersion }: ImageActionsProps) => {
  const [isImageReversed, setIsImageReversed] = useState(true);
  const [isModalShown, setIsModalShown] = useState(false);

  const router = useRouter();
  const pathname = usePathname();
  const colorQuery = useSearchParams().get("color");

  const handleReversal = () => {
    if (colorQuery) {
      router.push(
        `${pathname}?color=${colorQuery}&reversed=${isImageReversed}`,
        { scroll: false }
      );
    } else {
      router.push(`${pathname}?color=color1&reversed=${isImageReversed}`, {
        scroll: false,
      });
    }

    setIsImageReversed(!isImageReversed);
  };

  const handleClose = () => {
    setIsModalShown(false);
  };

  if (modalVersion) {
    return (
      <>
        <div className="group actions">
          <button className="p-3 bg rounded-full" onClick={handleReversal}>
            <FontAwesomeIcon icon={faArrowsLeftRight} size="xl" color="white" />
          </button>
          <p className="invisible group-hover:visible text-xs text-center">
            Сврти
          </p>
        </div>
      </>
    );
  }

  return (
    <>
      <div className="group actions">
        <button
          className="p-3 bg rounded-full"
          onClick={() => {
            setIsModalShown(modalVersion ? false : !isModalShown)
            handleBodyScrollWhenMenuIsOpen(true);

          }}
        >
          <FontAwesomeIcon icon={modalVersion ? faMinimize : faMaximize} size="xl" color="white" />
        </button>
        <p className="invisible group-hover:visible text-xs text-center">
          Зголеми
        </p>
      </div>

      <div className="group actions">
        <button className="p-3 bg rounded-full" onClick={handleReversal}>
          <FontAwesomeIcon icon={faArrowsLeftRight} size="xl" color="white" />
        </button>
        <p className="invisible group-hover:visible text-xs text-center">
          Сврти
        </p>
        </div>

      {isModalShown && <BikeModal bike={bike} handleClose={handleClose} />}
    </>
  );
};

export default ImageActions;

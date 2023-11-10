'use client'
import {
  faChevronLeft,
  faChevronRight,
  faFloppyDisk,
  faShareNodes,
  faWarehouse,
} from "@fortawesome/free-solid-svg-icons";
import { faInfoCircle } from "@fortawesome/free-solid-svg-icons/faInfoCircle";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React from "react";
import { useBreakpoint } from "../helpers/useBreakpoint";

type BottomFixedRibbonProps = {
    info: any
}

const BottomFixedRibbon = ({info}: BottomFixedRibbonProps) => {

    const breakpoint = useBreakpoint()

    if(breakpoint > 768) {
        return (
            <section className="fixed bottom-0 left-0 right-0 flex justify-between border-t-2 gray-300">
              <button className="py-8 px-4 font-semibold text-neutral-800 light-gray-bg hover:bg-neutral-600 hover:text-neutral-900 transition-colors ease-in-out delay-50 basis-3/12">
                <FontAwesomeIcon
                  icon={faChevronLeft}
                  color="38 38 38"
                  size="2xs"
                  className="pr-2"
                />
                PREVIOUS
              </button>
              <button className="bg-white basis-2/12 flex flex-col items-center justify-center text-lg text-neutral-600">
                <FontAwesomeIcon icon={faFloppyDisk} color="black" size="lg" />
                Save
              </button>
              <button className="bg-white basis-2/12 flex flex-col items-center justify-center text-lg border-x-2 border-gray-300 text-neutral-600">
                <FontAwesomeIcon icon={faWarehouse} color="black" size="lg" />
                Garage
              </button>
              <button className="bg-white basis-2/12 flex flex-col items-center justify-center text-lg text-neutral-600">
                <FontAwesomeIcon icon={faShareNodes} color="black" size="lg" />
                Share
              </button>
              <div className="basis-3/12 bg text-white justify-between items-center flex">
                <button className="flex justify-end items-center basis-1/3">
                  <FontAwesomeIcon icon={faInfoCircle} />
                </button>
                <div className="flex flex-col justify-center items-start basis-2/3 pl-5">
                  <p className="text-sm">Цена</p>
                  <p className="text-xl font-medium">€{info.price}.00</p>
                </div>
              </div>
              <button className="basis-3/12 red-bg-color text-white red-bg-hover-color font-semibold">
                NEXT
                <FontAwesomeIcon icon={faChevronRight} color="white" size="2xs" className="pl-2" />
              </button>
            </section>
          );
    }

    if(breakpoint < 768){
        return 'mobile ribbon'
    }
 
};

export default BottomFixedRibbon;

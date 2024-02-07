"use client";
import {
  faBars,
  faChevronLeft,
  faChevronRight,
  faFloppyDisk,
  faShareNodes,
  faWarehouse,
  faX,
} from "@fortawesome/free-solid-svg-icons";
import { faInfoCircle } from "@fortawesome/free-solid-svg-icons/faInfoCircle";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React, { useEffect, useState } from "react";
import { useBreakpoint } from "../helpers/useBreakpoint";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import { handleBodyScrollWhenMenuIsOpen } from "../helpers/handleBodyScrollWhenMenuOpens";
import { CustomizationColorType } from "@/app/types/HomeTypes/SharedTypes/types";
import Link from "next/link";
import MainBtn from "../MainBtn";
import Image from "next/image";

type BottomFixedRibbonProps = {
  info: any;
};

const BottomFixedRibbon = ({ info }: BottomFixedRibbonProps) => {
  const [isMobileMenuShown, setIsMobileMenuShown] = useState(false);
  const [isModalShown, setIsModalShown] = useState(false);

  const breakpoint = useBreakpoint();
  const router = useRouter();
  const pathname = usePathname();
  const colorQuery = useSearchParams().get("color") ?? "color1";

  const colorPrice = info.customizationColors.find(
    (color: CustomizationColorType) => color.colorCode === colorQuery
  ).price;

  useEffect(() => {
    if (breakpoint > 768) {
      setIsMobileMenuShown(false);
    }
  }, [breakpoint]);

  const handlePreviousBtn = () => router.back();

  const handleMenu = () => {
    setIsMobileMenuShown(!isMobileMenuShown);
    handleBodyScrollWhenMenuIsOpen(isMobileMenuShown);
  };

  const handlePriceChange = (startingPrice: number) => {
    if (colorQuery !== null) {
      return startingPrice + colorPrice;
    }

    return startingPrice;
  };

  const getLinkForSharing = () => window?.location.href;

  if (breakpoint > 768) {
    return (
      <>
        <section className="fixed bottom-0 left-0 right-0 flex justify-between border-t-2 gray-300">
          <button
            className="py-8 px-4 font-semibold text-neutral-800 light-gray-bg hover:bg-neutral-600 hover:text-neutral-900 transition-colors ease-in-out delay-50 basis-3/12"
            onClick={handlePreviousBtn}
          >
            <FontAwesomeIcon
              icon={faChevronLeft}
              color="38 38 38"
              size="2xs"
              className="pr-2"
            />
            НАЗАД
          </button>
          <button className="bg-white basis-2/12 flex flex-col items-center justify-center text-lg text-neutral-600">
            <FontAwesomeIcon icon={faFloppyDisk} color="black" size="lg" />
            Зачувај
          </button>
          <button className="bg-white basis-2/12 flex flex-col items-center justify-center text-lg border-x-2 border-gray-300 text-neutral-600">
            <FontAwesomeIcon icon={faWarehouse} color="black" size="lg" />
            Моја Гаража
          </button>
          <button
            className="bg-white basis-2/12 flex flex-col items-center justify-center text-lg text-neutral-600"
            onClick={() => {
              setIsModalShown(true);
              handleBodyScrollWhenMenuIsOpen(isModalShown);
            }}
          >
            <FontAwesomeIcon icon={faShareNodes} color="black" size="lg" />
            Сподели
          </button>
          <div className="basis-3/12 bg text-white justify-between items-center flex">
            <button className="flex justify-end items-center basis-1/3">
              <FontAwesomeIcon icon={faInfoCircle} />
            </button>
            <div className="flex flex-col justify-center items-start basis-2/3 pl-5">
              <p className="text-sm">Цена</p>
              {info.price && (
                <p className="text-xl font-medium">
                  €{handlePriceChange(info.price)}.00{" "}
                </p>
              )}
              {info.price === null && (
                <p className="text-xl font-medium">Наскоро!!! </p>
              )}
            </div>
          </div>
          <Link
            className="basis-3/12 red-bg-color text-white red-bg-hover-color font-semibold flex"
            href={`/motorcycles/${info.category}/${info.subFamilyCategory}/${info.model}`}
          >
            <div className="flex justify-center items-center w-full h-full">
              <span>ДЕТАЛИ</span>
              <FontAwesomeIcon
                icon={faChevronRight}
                color="white"
                size="2xs"
                className="pl-2"
              />{" "}
            </div>
          </Link>
        </section>

        {isModalShown && (
          <div className="absolute h-screen w-full top-0 left-0 flex flex-col gap-8 justify-center items-center bg-neutral-100">
            <Image
              src={"/images/triumphLogo.png"}
              alt="Logo"
              width={300}
              height={300}
            />
            <p className="font-bold text-2xl text-center">
              Копирајте го овој линк <br /> и споделете го со вашите пријатели
            </p>
            <p className="border p-2 bg-white shado">{getLinkForSharing()}</p>
            <MainBtn
              text={"Затвори"}
              bgBlack={false}
              action={() => {
                handleBodyScrollWhenMenuIsOpen(isModalShown);
                setIsModalShown(false);
              }}
            />
          </div>
        )}
      </>
    );
  }

  if (breakpoint <= 768) {
    return (
      <>
        <section className="fixed bottom-0 left-0 right-0 flex justify-between border-t-2 gray-300">
          <button className="basis-2/12 light-gray-bg" onClick={handleMenu}>
            <FontAwesomeIcon icon={faBars} color="black" size="xl" />
          </button>
          <div className="basis-5/12 bg text-white justify-start items-center flex">
            <button className="flex justify-end items-center basis-1/5">
              <FontAwesomeIcon icon={faInfoCircle} />
            </button>
            <div className="flex flex-col justify-center items-start basis-3/5 pl-2">
              <p className="text-xs">Цена</p>
              {info.price && (
                <p className="text-xl font-medium">
                  €{handlePriceChange(info.price)}.00{" "}
                </p>
              )}
              {info.price === null && (
                <p className="text-xl font-medium">Наскоро!!! </p>
              )}
            </div>
          </div>
          <Link
            className="basis-5/12 red-bg-color text-white red-bg-hover-color font-semibold py-6"
            href={`/motorcycles/${info.category}/${info.subFamilyCategory}/${info.model}`}
          >
            <div className="flex justify-center items-center w-full h-full">
              <span>ДЕТАЛИ</span>
              <FontAwesomeIcon
                icon={faChevronRight}
                color="white"
                size="2xs"
                className="pl-2"
              />{" "}
            </div>
          </Link>
        </section>

        {isMobileMenuShown && (
          <section className="fixed z-100 top-0 left-0 right-0 w-screen h-full bg-white flex flex-col justify-between">
            <div className="light-gray-bg py-4 flex justify-between px-6 items-center">
              <p className="uppercase font-semibold">МОДУЛАТОР</p>
              <button onClick={handleMenu}>
                <FontAwesomeIcon icon={faX} color="black" />
              </button>
            </div>
            <div className="px-10 flex flex-col">
              <button className="flex items-center justify-between text-lg text-neutral-600  py-3">
                <FontAwesomeIcon icon={faFloppyDisk} color="black" size="lg" />
                <p className="basic-8/12 grow">Зачувај</p>

                <FontAwesomeIcon
                  icon={faChevronRight}
                  color="black"
                  size="lg"
                />
              </button>
              <button className=" flex  justify-between text-lg border-y-2 border-gray-300 text-neutral-600 py-3">
                <FontAwesomeIcon icon={faWarehouse} color="black" size="lg" />
                <p className="basic-8/12">Гаража</p>

                <FontAwesomeIcon
                  icon={faChevronRight}
                  color="black"
                  size="lg"
                />
              </button>
              <button
                className=" flex  justify-between text-lg text-neutral-600 py-3"
                onClick={() => {
                  setIsModalShown(true);
                  handleBodyScrollWhenMenuIsOpen(isModalShown);
                }}
              >
                <FontAwesomeIcon icon={faShareNodes} color="black" size="lg" />
                Сподели
                <FontAwesomeIcon
                  icon={faChevronRight}
                  color="black"
                  size="lg"
                />
              </button>
            </div>
            <button
              className="red-bg-color py-4 text-white uppercase font-semibold "
              onClick={() => setIsMobileMenuShown(false)}
            >
              НАЗАД
            </button>
          </section>
        )}

        {isModalShown && (
          <div className="absolute h-screen w-full top-0 left-0 flex flex-col gap-4 justify-start items-center bg-neutral-100 py-8">
            <Image
              src={"/images/triumphLogo.png"}
              alt="Logo"
              width={300}
              height={300}
            />
            <p className="font-bold text-2xl text-center">
              Копирајте го овој линк <br /> и споделете го со вашите пријатели
            </p>
            <p className="border p-2 bg-white shadow-md w-11/12 ">{getLinkForSharing()}</p>
            <MainBtn
              text={"Затвори"}
              bgBlack={false}
              action={() => {
                handleBodyScrollWhenMenuIsOpen(isModalShown);
                setIsModalShown(false);
              }}
            />
          </div>
        )}
      </>
    );
  }
};

export default BottomFixedRibbon;

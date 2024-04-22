"use client";
import {
  faCheck,
  faCircleInfo,
  faInfoCircle,
  faPlus,
  faX,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import { useState } from "react";
import { handleBodyScrollWhenMenuIsOpen } from "../helpers/handleBodyScrollWhenMenuOpens";
import { ColorType } from "./BikeModelImage";

type ColorCardProps = {
  color: any;
  idx:number;
  allColors: ColorType[]
};

const ColorCard = ({ color, idx }: ColorCardProps) => {
  const router = useRouter();
  const pathname = usePathname();
  const query = useSearchParams().get("color");
  const rotationQuery = useSearchParams().get("reversed");

  const [isModalOpen, setIsModalOpen] = useState(false);

  const handleColorChange = (query: any) => {
    router.push(`${pathname}?color=${query}&reversed=${rotationQuery}`);
  };


  return (
    <>
      <div className="md:basis-5/12 basis-1/3 grow sm:grow-0 shadow-lg">
        <button
          onClick={() => handleColorChange(color.colorName)}
          className="w-full h-28 relative block"
          style={{
            backgroundImage: `url('${color.image ?? ''}')`,
            backgroundSize: "cover",
            backgroundRepeat: "no-repeat",
            backgroundPosition: "center",
            padding: 2,
          }}
        >
          <p className="absolute -top-1 right-0 p-1">
            <FontAwesomeIcon
              icon={query === null && idx === 0 ? faCheck : (query === color.colorName ? faCheck : faPlus)}

              color="white"
              className="hover:text-white transition-colors ease-in-out delay-100"
            />
          </p>
        </button>
        <div
          className="bg-white px-2 py-2 relative flex flex-col justify-between"
          style={{ height: 76 }}
        >
          <h3 className="md:text-sm text-xs font-semibold uppercase basis-1/2">
            {color.colorName ?? "Color"}
          </h3>
          <p className="text-xs text-gray-600 basis-1/2">
            {color.price ? `€${color.price}` : `Вклучено во Цената`}
          </p>
          <button
            className="absolute bottom-1 right-2"
            onClick={() => {
              setIsModalOpen(!isModalOpen)
              handleBodyScrollWhenMenuIsOpen(false)
            }}
          >
            <FontAwesomeIcon icon={faCircleInfo} color="grey" />
          </button>
        </div>
      </div>

      {isModalOpen && (
        <section
          tabIndex={0}
          className="fixed top-0 left-0 bottom-0 right-0 bg-white modal-blur bg-transparent flex justify-center items-center z-40"
          onClick={() => {
            setIsModalOpen(false)
            handleBodyScrollWhenMenuIsOpen(true)

          }}
          style={{minHeight: "100%"}}
        >
          <div className="w-11/12 md:w-3/4 h-2/3" style={{height:'500px', zIndex: '8888'}}>
            <div className="m-auto w-full flex flex-col md:flex-row justify-between ">
              <Image
                src={color.image}
                alt={color.name}
                width={400}
                height={100}
                className="w-full md:w-1/2 h-64 "
              />
              <div className="basis-1/2 relative py-8 md:py-0 flex justify-center items-center border-2 borger-l-0 rounded-r-lg border-neutral-400 bg-white">
                <div className="">
                  <h3 className="text-2xl font-bold">{color.colorName}</h3>
                  <p className="text-xl sont-semibold">Цена: €{color.price}.00</p>
                </div>

                <button
                  type="button"
                  className="absolute top-3 right-3"
                  onClick={() => {
                    setIsModalOpen(false)
                    handleBodyScrollWhenMenuIsOpen(true)
        
                  }}
                >
                  {" "}
                  <FontAwesomeIcon icon={faX} />{" "}
                </button>
              </div>
            </div>
          </div>
        </section>
      )}
    </>
  );
};

export default ColorCard;

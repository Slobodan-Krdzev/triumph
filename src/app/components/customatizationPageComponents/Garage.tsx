import React from "react";
import Card from "../Card";
import Image from "next/image";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faX } from "@fortawesome/free-solid-svg-icons";
import MainBtn from "../MainBtn";
import BikesByFamilyWithSlider from "../BikesByFamilyWithSlider";
import FamilyBikesSlider from "../FamilyBikesSlider";

type GarageProps = {
  bikes: any[];
  handleClose: () => void;
};

const Garage = ({ bikes, handleClose }: GarageProps) => {
  if (bikes.length === 0) {
    return (
      <section
        className="fixed left-0 right-0 bottom-0 slight-white-bg border-2  py-16 px-24"
        style={{ top: "64px" }}
      >
        <div className="relative flex flex-col justify-center items-center h-full w-full">
          <button className="absolute top-5 right-5" onClick={handleClose}>
            <FontAwesomeIcon icon={faX} size="xl" />
          </button>
          <div className="flex justify-center items-center gap-6">
            <Image
              src={"/images/triumphLogo.png"}
              alt="Logo"
              width={50}
              height={50}
            />
            <h2 className="text-center text-3xl md:text-4xl lg:text-7xl uppercase font-bold tracking-tighter">
              Вашата Гаража е Празна
            </h2>
            <Image
              src={"/images/triumphLogo.png"}
              alt="Logo"
              width={50}
              height={50}
            />
          </div>
          <div className="flex mt-6 justify-center gap-6">
            <MainBtn text={"Контакт"} bgBlack={false} isLink link="/dealer" />
            <MainBtn
              text={"Види ги сите"}
              bgBlack={true}
              isLink
              link="/configure/bikes"
            />
          </div>
        </div>
      </section>
    );
  }

  return (
    <section
      className="fixed left-0 right-0 bottom-0 slight-white-bg border-2  py-16 px-24"
      style={{ top: "64px" }}
    >
      <div className="relative">
        <button className="absolute top-5 right-5" onClick={handleClose}>
          <FontAwesomeIcon icon={faX} size="xl" />
        </button>
        <div className="flex flex-col gap-8">
          <div className="flex justify-center items-center gap-6">
            <Image
              src={"/images/triumphLogo.png"}
              alt="Logo"
              width={50}
              height={50}
            />
            <h2 className="text-center text-3xl md:text-4xl lg:text-7xl uppercase font-bold tracking-tighter">
              Моја Гаража
            </h2>
            <Image
              src={"/images/triumphLogo.png"}
              alt="Logo"
              width={50}
              height={50}
            />
          </div>
          <FamilyBikesSlider itemsToRender={bikes} />
        </div>
        <div className="flex mt-6 justify-center gap-6">
          <MainBtn text={"Контакт"} bgBlack={false} isLink link="/dealer" />
          <MainBtn
            text={"Види ги сите"}
            bgBlack={true}
            isLink
            link="/configure/bikes"
          />
        </div>
      </div>
    </section>
  );
};

export default Garage;
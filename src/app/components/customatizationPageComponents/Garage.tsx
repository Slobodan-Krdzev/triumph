"use client"
import { faX } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import FamilyBikesSlider from "../FamilyBikesSlider";
import MainBtn from "../MainBtn";
import { useEffect, useState } from "react";

type GarageProps = {
  handleClose: () => void;
  handleBtn?: () => void
};

const Garage = ({ handleClose, handleBtn }: GarageProps) => {

  const [bikesForGarage, setBikesForGarage] = useState<any[]>(JSON.parse(localStorage.getItem("garage")!))

  const garage = JSON.parse(localStorage.getItem("garage")!)

  const updateBikes = (bike: any) => {

    const updatedGarage:any[] = bikesForGarage.filter(bikeFromGarage => bikeFromGarage.id !== bike.id)

    localStorage.setItem('garage', JSON.stringify(updatedGarage))
    setBikesForGarage(updatedGarage)
  }
  
  if (localStorage.getItem("garage") === null) {
    return (
      <section
        className="fixed left-0 right-0 bottom-0 slight-white-bg border-2 py-4 px-4 lg:py-16 lg:px-24"
        style={{ top: "64px" , zIndex: 5}}
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
          <div className="flex flex-col lg:flex-row text-center mt-6 justify-center gap-6">
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
      className="fixed left-0 right-0 h-screen slight-white-bg  lg:py-16 lg:px-24 overflow-y-scroll lg:overflow-y-auto"
      style={{ top: "64px" }}
    >
      <div className="lg:hidden flex justify-between py-4 px-8 gray-bg text-white mb-4">
        <p className="uppercase font-semibold font-xl">Моја Гаража</p>
        <button
          className=" top-3 right-3 lg:top-16 lg:right-16"
          onClick={handleClose}
        >
          <FontAwesomeIcon icon={faX} size="xl" />
        </button>
      </div>

      <div className="flex flex-col gap-8 px-8 relative">
          <button className="hidden lg:block absolute top-5 right-5" onClick={handleClose}>
            <FontAwesomeIcon icon={faX} size="xl" />
          </button>
        <div className="justify-center items-center gap-6 hidden lg:flex ">
          <Image
            src={"/images/triumphLogo.png"}
            alt="Logo"
            width={50}
            height={50}
          />
          <h2 className=" text-center text-3xl md:text-4xl lg:text-7xl uppercase font-bold tracking-tighter">
            Моја Гаража
          </h2>
          <Image
            src={"/images/triumphLogo.png"}
            alt="Logo"
            width={50}
            height={50}
          />
        </div>
        <FamilyBikesSlider itemsToRender={bikesForGarage} deleteBtn={true} updateGrg={updateBikes} handleBtn={handleBtn}/>
      </div>
      <div className="hidden lg:flex flex-col lg;flex-row mt-6 items-center justify-center gap-6">
        <MainBtn text={"Контакт"} bgBlack={false} isLink link="/dealer" />
        <MainBtn
          text={"Види ги сите"}
          bgBlack={true}
          isLink
          link="/configure/bikes"
        />
      </div>
    </section>
  );
};

export default Garage;

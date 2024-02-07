"use client";
import { faChevronLeft } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import Link from "next/link";
import { useState } from "react";
import { locations } from "../Locations";

type LocationsMobileProps = {
  handler: () => void;
};

const LocationsMobile = ({ handler }: LocationsMobileProps) => {

  const [activeRegion, setActiveRegion] = useState('Africa')


  const regions = Array.from(
    new Set(locations.map((location) => location.region))
  ).map((region) => region);

  const filteredLocations = locations
    .slice()
    .filter((location) => location.region === activeRegion);

  return (
    <div>
      <div className="flex justify-start items-center px-8 py-4 gray-bg">
        <button className="basis-1/12" onClick={handler}>
          <FontAwesomeIcon icon={faChevronLeft} />
        </button>
        <p className="uppercase text-md basis-10/12 text-center font-semibold">
          Локации
        </p>
        <div className="basis-1/12"></div>
      </div>
      <div className="flex justify-between flex-wrap p-4 text-black">
        <div className="w-full flex justify-center items-center gap-4 border-thin-gray-bottom">
          {regions.map((region) => (
            <button key={region} className={`p-1 ${activeRegion === region ? "border-bottom" : ""}`} onClick={() => setActiveRegion(region)}>
              {region}
            </button>
          ))}
        </div>

        <div className="py-4 flex flex-col justify-center gap-x-6 gap-y-2 w-full overflow-y-scroll">
        {filteredLocations.map(location => <Link
            className="flex justify-start items-center uppercase text-neutral-500 gap-2 border py-3 rounded-lg"
            key={location.id}
            href={location.link}
            target="_blank"
          >
            <Image src={"/images/pinIcon-01.svg"} alt="pin" width={32} height={32} />
            {location.country}
          </Link>)}
        </div>   
      </div>
    </div>
  );
};

export default LocationsMobile;

function setMenusVisibility(arg0: {
  news: boolean;
  races: boolean;
  brand: boolean;
  expirinces: boolean;
}) {
  throw new Error("Function not implemented.");
}

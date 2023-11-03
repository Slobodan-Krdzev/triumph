import Image from "next/image";
import React from "react";
import MainBtn from "./MainBtn";
import Link from "next/link";

type FamilyBikesSliderProps = {
  bikesToRender: any[];
};

const FamilyBikesSlider = ({ bikesToRender = [] }: FamilyBikesSliderProps) => {
  console.log("BIKES TO RENDER", bikesToRender);
  if (bikesToRender) {
    return <div className="flex justify-between gap-4 overflow-x-scroll bg-white rounded-sm slight-white-bg">
        {bikesToRender.map((bike:any) => <div key={bike.bikeId} className="bg-white shadow-lg">
            <Image src={bike.familyPageInfo.image.src} alt={bike.familyPageInfo.image.alt} width={271} height={150}/>
            <div className="mb-8 p-4 text-center flex flex-col items-center justify-between">
                <h3 className="text-xl font-semibold uppercase">{bike.familyPageInfo.image.alt}</h3>
                <p className="text-md mb-4">From €{bike.price}</p>
                <ul className="flex flex-col list-disc mb-10 pl-4 w-3/4 m-auto text-sm">
                    <li>cc</li>
                    <li>service</li>
                </ul>
            </div>
            <div className="flex border-t-2 border-gray-300 py-2">
                <Link href={`/configure/bikes/${bike.model}`} className="text-xl p-2 border-r-2 border-gray-300 ">Конфигuрација</Link>
                <Link href={`/motorcycles/${bike.category}/${bike.model}`} className="text-xl p-2 ">Види Детали</Link>
            </div>
        </div> )}</div>;
  }
};

export default FamilyBikesSlider;

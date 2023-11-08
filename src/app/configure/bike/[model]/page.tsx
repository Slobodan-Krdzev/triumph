import { BIKES } from "@/app/constants/constants";
import Image from "next/image";
import React from "react";

const BikeConfigPage = async ({ params }: any) => {
  // ovde treba fallback da se sredi ako nema toj bike da mani 404
  // try / catch

  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.model}`, {
      cache: "no-store",
    });
    const bike = await bikeRes.json();

    console.log("motor", bike);

    if (bike) {
      return (
        <>
          <section className="flex lg:flex-row flex-col">
            <div className="flex flex-col basis-7/12 bg-white border">
              <div className="flex border-b-2 border-gray-300">
                <div className="basis-1/2 flex justify-center items-center py-3 px-10">
                  <p>Mотор</p>
                </div>
                <div className=" flex justify-center items-center py-3 px-10 border-l-2 border-gray-300">
                  <p>2. Бои</p>
                </div>
              </div>
              <div className="relative md:px-48 md:py-32">
                <h1 className="absolute top-30 left-36 font-semibold text-2xl uppercase">
                  {bike[0].title}
                </h1>
                <Image
                  src={bike[0].gallery.modelImage.src}
                  alt={bike[0].title}
                  width={824}
                  height={376}
                />
              </div>
            </div>
            <div className="flex justiy-center items-center">
              <div className="border w-10/12 m-auto">
                <h2 className="text-2xl font-semibold uppercase md:mb-4 mb-2">Одберете Боја</h2>
                <p className="text-sm font-medium">Боите кои се на располагање се прикажани долу.</p>
                <div>OVDE BOI</div>
              </div>
            </div>
          </section>
          <div>
            <h1>Bike Model: {bike[0].model}</h1>
            <h2>Bike Price: {bike[0].price}</h2>
          </div>
        </>
      );
    }
  } catch {
    return "err";
  }
};

export default BikeConfigPage;

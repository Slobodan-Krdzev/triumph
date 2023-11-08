import { BIKES } from "@/app/constants/constants";
import Image from "next/image";
import React from "react";

import boja from "../../../../../../triumf-trial/public/images/redStormPaint.jpg";

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
              <div className="relative md:px-52 md:py-32">
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
            <div className="flex justiy-center items-center md:px-8">
              <div>
                <h2 className="text-2xl font-semibold uppercase mb-2">
                  Одберете Боја
                </h2>
                <p className="text-md font-medium">
                  Боите кои се на располагање се прикажани долу.
                </p>
                <div className="flex flex-wrap gap-4">
                  {bike[0].customizationCollors.map((color: any) => (
                    <div className="grow" key={color.collorName}>
                      <div 
                      className="w-100 h-20"
                        style={{
                          backgroundImage: `url('${color.image}')`,
                          backgroundSize: "cover",
                          backgroundRepeat: "no-repeat",
                          backgroundPosition: "center",
                          padding: 2,
                        }}
                      >
                      </div>
                      <div className="bg-white px-2 py-4">
                        <h3 className="text-sm font-semibold uppercase">{color.collorName}</h3>
                        <p className="text-xs">{color.price}</p>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </section>
          <div>tuka lentata</div>
        </>
      );
    }
  } catch {
    return "err";
  }
};

export default BikeConfigPage;

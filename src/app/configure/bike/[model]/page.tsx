import { BIKES } from "@/app/constants/constants";
import Image from "next/image";

import ColorCard from "@/app/components/customatizationPageComponents/ColorCard";
import { faCheck } from "@fortawesome/free-solid-svg-icons/faCheck";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import BikeModelImage from "@/app/components/customatizationPageComponents/BikeModelImage";
import BottomFixedRibbon from "@/app/components/customatizationPageComponents/BottomFixedRibbon";
import ImageActions from "@/app/components/customatizationPageComponents/ImageActions";

const BikeConfigPage = async ({ params }: any) => {
  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.model}`, {
      cache: "no-store",
    });
    const bike = await bikeRes.json();

    return (
      <>
        <main className="relative pb-4 md:pb-8 lg:pb-16">
          <section className="flex lg:flex-row flex-col ">
            <div className="flex flex-col md:basis-8/12 bg-white shadow-2xl">
              <div className="flex uppercase text-sm font-medium slight-white-bg">
                <div className="grow flex justify-center items-center py-3 px-10 border-b-2 border-gray-300">
                  <p>
                    {" "}
                    <FontAwesomeIcon icon={faCheck} color="black" /> Mотор
                  </p>
                </div>
                <div className="flex grow justify-center items-center py-3 px-10 border-l-2 border-b-3 red-border-bottom border-gray-300">
                  <p>2. Бои</p>
                </div>
              </div>
              <div className="relative md:px-32 md:py-10">
                <h1
                  style={{ top: "10%", left: "10%" }}
                  className="absolute font-bold text-2xl md:text-6xl text-neutral-200 uppercase tracking-tighter"
                >
                  {bike[0].title}
                </h1>
                <BikeModelImage bike={bike[0]} />
                <div className="flex justify-center items-center gap-6">
                  <ImageActions bike={bike[0]}/>
                </div>
              </div>
            </div>
            <div className="flex justify-center lg:justify-start items-start md:px-8 px-4 lg:py-10 py-8 md:basis-4/12">
              <div className="w-full m-auto">
                <h2 className="text-xl text-center font-bold uppercase mb-2 tracking-wider">
                  Одберете Боја
                </h2>
                <p className="text-sm mb-2 hidden md:block">
                  Боите кои се на располагање се прикажани долу.
                </p>
                <div className="grid grid-rows-2 grid-cols-2 gap-4">
                  {bike[0].customizationColors.map((color: any) => (
                    <ColorCard key={color.colorName} color={color} />
                  ))}
                </div>
              </div>
            </div>
          </section>
          <BottomFixedRibbon info={bike[0]} />
        </main>

        
      </>
    );
  } catch {
    return "err";
  }
};

export default BikeConfigPage;

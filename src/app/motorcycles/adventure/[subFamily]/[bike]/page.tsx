import BikeTitle from "@/app/components/BikePageComponents/BikeTitle";
import CustomizationColorsListing from "@/app/components/BikePageComponents/CustomizationColorsListing";
import Image360 from "@/app/components/BikePageComponents/Image360";
import ImagePreview from "@/app/components/BikePageComponents/ImagePreview";
import MainBtn from "@/app/components/MainBtn";
import { BIKES } from "@/app/constants/constants";
import { CustomizationColorType } from "@/app/types/HomeTypes/SharedTypes/types";
import Image from "next/image";
import React from "react";



const BikePage = async ({ params }: any) => {


  
  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.bike}`, {
      cache: "no-store",
    });
    const bikeData = await bikeRes.json();
    const bike = bikeData[0];

    return (
      <>
        <section className="bg-white">
          <div className="flex flex-col justify-end pt-8 md:pt-16 px-4 md:px-8 lg:px-16">
            <BikeTitle text={bike.title} />
            <div className="flex items-center flex-col md:flex-row gap-4 md:gap-0">
              <div className="flex flex-col w-full md:w-2/12 items-start md:justify-center lg:pl-24 md:pl-16 pl-0 order-3 md:order-1">
                <p className="text-sm mb-6 text-neutral-500">color name</p>
                <p className="text-sm font-semibold text-neutral-500">Цени од:</p>
                <p className="text-5xl font-medium tracking-tighter mb-2 lg:mb-4">
                  €{bike.price}
                </p>
                <div className="flex flex-col gap-6 text-center">
                  <MainBtn
                    text={"КОНФИГУРАЦИЈА"}
                    bgBlack={false}
                    isLink={true}
                    link={`/configure/bike/${bike.model}`}
                  />
                  <MainBtn
                    text={"КОНТАКТ"}
                    bgBlack={true}
                    isLink={true}
                    link={"/dealers/dealer-search"}
                  />
                </div>
              </div>

              <div className="md:w-8/12 w-full m-auto order-1 md:order-2">
                {/* <Image360 image={bike.gallery.image360.src} alt={bike.gallery.image360.alt}/>   */}
                
                <ImagePreview bike={bike}/>
              </div>
              <div className="md:w-2/12 w-full order-2 md:order-3">
                <CustomizationColorsListing colors={bike.customizationColors}/>
              </div>
            </div>
          </div>
        </section>
      </>
    );
  } catch (err) {
    console.log(err);
    return "err";
  }
};

export default BikePage;

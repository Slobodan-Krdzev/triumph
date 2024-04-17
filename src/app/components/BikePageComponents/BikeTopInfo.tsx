import React from "react";
import MainBtn from "../MainBtn";
import BikeTitle from "./BikeTitle";
import ColorNamePreviewer from "./ColorNamePreviewer";
import CustomizationColorsListing from "./CustomizationColorsListing";
import ImagePreview from "./ImagePreview";
import PricePriviewer from "./PricePriviewer";

type BikeTopInfoPropsType = {
  bike: any;
};

const BikeTopInfo = ({ bike }: BikeTopInfoPropsType) => {
  return (
    <section className="flex flex-col justify-end pt-8 md:pt-16 px-4 md:px-8 lg:px-16">
      <BikeTitle text={bike.title} />
      <div className="flex items-center flex-col md:flex-row gap-4 md:gap-0 w-full lg:w-10/12 m-auto">
        <div className="flex flex-col w-full md:w-2/12 items-start md:justify-center order-3 md:order-1">
          {bike.customizationColors && <ColorNamePreviewer bike={bike} />}

          <p className="text-md font-semibold text-neutral-500">Ценa:</p>
          <PricePriviewer bike={bike} />
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
              link={"/dealer"}
            />
          </div>
        </div>

        <div className="md:w-8/12 w-full m-auto order-1 md:order-2">
          {bike.bikeCollorPalletteGallery && <ImagePreview bike={bike} />}
        </div>
        <div className="md:w-2/12 w-full order-2 md:order-3">
          {bike.customizationColors && (
            <CustomizationColorsListing colors={bike.customizationColors} />
          )}
        </div>
      </div>
    </section>
  );
};

export default BikeTopInfo;

import React from "react";
import { AccessoryItemsType } from "../ClassicAccesoryPage/AccessoriesListing";
import SectionTitleH2 from "../../familiySharedComponents/SectionTitleH2";
import Image from "next/image";

type Rocket3AccessoryItemWrapperTypeProps = {
  item: AccessoryItemsType;
  index: number
};

const Rocket3AccessoryItemWrapper = ({
  item: { title, desc, image1, image2, itemsList = []}, index,
}: Rocket3AccessoryItemWrapperTypeProps) => {
  return (
    <div className=" py-4 gray-bg text-white flex flex-col lg:flex-row gap-6 px-4 w-full md:w-11/12 lg:7/12 m-auto">
      <div className={`w-full lg:w-2/4 m-auto ${(index % 2 === 0) ? 'order-2' : ''}`}>
        <div className="md:w-10/12 w-full m-auto">
          <SectionTitleH2 text={title} color={"white"} />

          <p className="font-normal md:text-lg text-md">{desc}</p>
          <ul className="mt-4 md:mt-8 list-disc marker:text-red-600 marker:text-2xl list-inside">
            {itemsList.map((item) => (
              <li key={item} className="text-sm md:text-lg">
                {item}
              </li>
            ))}
          </ul>
        </div>
      </div>
      <div
      >
        {image1 && (
          <Image src={image1.src} alt={image1.alt} width={770} height={770} />
        )}
      </div>
    </div>
  );
};

export default Rocket3AccessoryItemWrapper;

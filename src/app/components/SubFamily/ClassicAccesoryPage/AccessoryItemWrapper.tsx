import React from "react";
import { AccessoryItemsType } from "./AccessoriesListing";
import SectionTitleH2 from "../../familiySharedComponents/SectionTitleH2";
import Image from "next/image";

type AccesoryItemWrapperProps = {
  item: AccessoryItemsType;
};

const AccessoryItemWrapper = ({
  item: { title, desc, image1, image2, itemsList = [] },
}: AccesoryItemWrapperProps) => {
  return (
    <div className=" py-4 md:py-8 lg:py-16">
      <div className="w-full md:w-2/4 m-auto">
        <SectionTitleH2 text={title} color={"dark"} />

        <p className="font-normal md:text-lg text-md">{desc}</p>
        <ul className="mt-4 md:mt-8 list-disc marker:text-red-600 marker:text-2xl list-inside">
          {itemsList.map((item) => (
            <li key={item} className="text-xl">
              {item}
            </li>
          )) ?? ""}
        </ul>
      </div>
      <div className={`flex ${image2 ? "  flex-col justify-between gap-8 md:flex-row" : 'justify-center'}  mt-4 md:mt-8 lg:mt-20`}>
        {image1 && (
          <Image src={image1.src} alt={image1.alt} width={image2 ? 739 : 1410 } height={image2 ? 462 : 793} />
        )}
        {image2 && (
          <Image src={image2.src} alt={image2.alt} width={739} height={462} />
        )}
      </div>
    </div>
  );
};

export default AccessoryItemWrapper;

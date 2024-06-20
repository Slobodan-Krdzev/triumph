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
    <div className="py-4 md:py-8 lg:py-16">
      <div className="w-full md:w-2/4 m-auto mb-8 md:mb-16">
        <SectionTitleH2 text={title} color={"dark"} />

        <p className="font-normal md:text-lg text-md">{desc}</p>
        {itemsList[0] !== null && (
          <ul className="mt-4 md:mt-8 list-disc marker:text-red-600 marker:text-2xl list-inside">
            {itemsList.map((item) => (
              <li key={item} className="text-xl">
                {item}
              </li>
            )) ?? ""}
          </ul>
        )}
      </div>
      {image1?.alt !== null && (
        <div className="flex flex-col lg:flex-row justify-center gap-4">
          {image1?.alt !== null && (
            <Image
              src={image1?.src ?? ""}
              alt={image1?.alt ?? ""}
              width={image2 ? 739 : 1410}
              height={image2 ? 462 : 793}
              loading="lazy"
            />
          )}
          {image2?.alt !== null && (
            <Image
              src={image2?.src ?? ""}
              alt={image2?.alt ?? ""}
              width={739}
              height={462}
              loading="lazy"
            />
          )}
        </div>
      )}
    </div>
  );
};

export default AccessoryItemWrapper;

import Image from "next/image";
import Link from "next/link";
import React from "react";

// ovdeka treba BIKE ILI SUBFAMILY tYPE

type CardProps = {
  item: any;
};

const Card = ({ item }: CardProps) => {
  return (
    <div
      key={item.id}
      className="bg-white shadow-lg lg:mb-8 flex flex-col justify-between rounded-md"
    >
      <div className="basis-2/6 border-b-2 border-gray-300">
        
        {item.gallery.modelImage && <Image
          src={item.gallery?.modelImage.src}
          alt={item.gallery?.modelImage.alt}
          width={271}
          height={150}
        />}
        
      </div>

      <div className="mb-8 p-4 text-center flex flex-col justify-start basis-2/6 w-72">
        <h3 className="text-xl font-semibold uppercase tracking-tighter">
          {item.title}
        </h3>
        <p className="text-md mb-4 font-medium">
          {item.price === "Наскоро" ? "Цени Наскоро." : `Oд ${item.price} €.`}
        </p>

        {item.shortSpecInfo && (
          <ul className="flex flex-col list-disc text-sm px-8 text-start">
            {item.shortSpecInfo.info1 && <li>{item.shortSpecInfo.info1}</li>}
            {item.shortSpecInfo.info2 && <li>{item.shortSpecInfo.info2}</li>}
            {item.shortSpecInfo.info3 && <li>{item.shortSpecInfo.info3}</li>}
          </ul>
        )}
      </div>
      <div className="flex border-t-2 border-gray-300 py-2 items-center text-center ">
        <Link
          href={`${
            item.model
              ? `/configure/bike/${item.model}`
              : `/configure/bikes/${item.subFamilyName}`
          }`}
          className="text-sm text-red uppercase w-1/2 font-medium"
        >
          Конфигурација
        </Link>
        <Link
          href={`${
            item.model
              ? `/motorcycles/${item.category}/${item.subFamilyCategory}/${item.model}`
              : `${item.url}`
          }`}
          className="text-md p-2 w-1/2 uppercase text-sm border-l-2 border-gray-300 font-medium"
        >
          Види Детали
        </Link>
      </div>
    </div>
  );
};

export default Card;

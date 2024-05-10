import { faTrash } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import Link from "next/link";
import React from "react";

// ovdeka treba BIKE ILI SUBFAMILY tYPE

type CardProps = {
  item: any;
  deleteBtn?: boolean;
  updateGrg?: (bike: any) => void;
  handleBtn?: () => void
};

const Card = ({ item, deleteBtn, updateGrg, handleBtn }: CardProps) => {
  const handleDeleteBike = () => {
    const garage = JSON.parse(localStorage.getItem("garage")!);
    const filteredBikes = garage.filter((bike: any) => bike.id !== item.id);
    localStorage.setItem("garage", JSON.stringify(filteredBikes));

    if (handleBtn) {
      handleBtn();
    }
    if (updateGrg) {
      updateGrg(item);
    }
  };

  return (
    <div
      key={item.id}
      className="bg-white shadow-xl lg:mb-8 flex flex-col justify-between rounded-md relative"
    >
      {deleteBtn && (
        <button
          className="absolute top-2 right-2  hover:scale-12 group"
          style={{
            transition: "all 0.2s ease-in-out",
          }}
          onClick={handleDeleteBike}
        >
          <span className="hidden group-hover:inline text-sm text-red-500 mr-2">
            Избриши
          </span>
          <FontAwesomeIcon icon={faTrash} size="sm" className="text-red-500" />
        </button>
      )}
      <div className="basis-2/6 border-thin-gray-bottom">
        {item.gallery?.modelImage && (
          <Image
            src={item.gallery?.modelImage.src ?? "/images/triumphLogo.png"}
            alt={item.gallery?.modelImage.alt ?? "Triumph"}
            width={271}
            height={150}
          />
        )}
      </div>

      <div className="mb-8 p-4 text-center flex flex-col justify-start basis-2/6 w-72">
        <h3 className="text-xl font-semibold uppercase tracking-tighter">
          {item?.title ?? "Triumph"}
        </h3>
        <p className="text-md mb-4 font-medium">
          {item?.price === null ? "Цени Наскоро" : `€ ${item.price.toLocaleString('en-EN')} `}
        </p>

        {item?.shortSpecInfo && (
          <ul className="flex flex-col list-disc text-sm px-8 text-start">
            {item?.shortSpecInfo?.info1 && <li>{item?.shortSpecInfo?.info1 ?? "Triumph"}</li>}
            {item?.shortSpecInfo?.info2 && <li>{item?.shortSpecInfo?.info2 ?? "Triumph"}</li>}
            {item?.shortSpecInfo?.info3 && <li>{item?.shortSpecInfo?.info3 ?? "Triumph"}</li>}
          </ul>
        )}
      </div>
      <div className="flex border-thin-gray-top py-2 items-center text-center ">
        <Link
          href={`${
            item?.model
              ? `/configure/bike/${item.model}`
              : `/configure/bikes/${item.subFamilyName}`
          }`}
          className="text-sm text-red uppercase w-1/2 font-medium "
        >
          Конфигурација
        </Link>
        <Link
          href={`${
            item.model
              ? `/motorcycles/${item.category}/${item.subFamilyCategory}/${item.model}`
              : `${item.url}`
          }`}
          className="text-md p-2 w-1/2 uppercase text-sm border-thin-left font-medium "
        >
          Види Детали
        </Link>
      </div>
    </div>
  );
};

export default Card;

"use client";
import {
  faBars,
  faChevronRight,
  faLocationPin,
  faSlidersH,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Link from "next/link";
import { useSearchParams } from "next/navigation";
import { getBikesByFamily } from "../../helpers/getBikesByFamily";
import MotorcycleInfo from "./MotorcycleInfo";
import SingleMotorcycleCard from "./SingleMotorcycleCard";
import { useState } from "react";

type Props = {
  families: any[];
  bikes: any[];
  bikeToRender: any
};

const MotorcyclesNav = ({ families = [], bikes = [], bikeToRender }: Props) => {
  const [family, setFamily] = useState('adventure')

  return (
    <div className="flex ">
      <div className=" flex flex-col gap-6 basis-3/12 py-8">
        <ul>
          {families?.map((filter: any) => (
            <li key={filter}>
              <button className={`${family === filter ? 'text-red-600' : 'text-black'} uppercase font-medium text-lg  focus:text-red-700`} onClick={() => setFamily(filter)}>
                {filter}
              </button>
            </li>
          ))}
        </ul>
        <Link href={"/"} className="text-md text-black">
          {" "}
          Aproved{" "}
        </Link>
        <ul className="flex flex-col gap-2">
          <li>
            <Link
              href={"/configure/bikes"}
              className="text-black flex justify-start gap-4 items-center"
            >
              <FontAwesomeIcon icon={faBars} color="black" size="xl" />
              Модели
            </Link>
          </li>
          <li>
            <Link
              href={"/configure"}
              className="text-black flex justify-start gap-4 items-center"
            >
              <FontAwesomeIcon icon={faSlidersH} color="black" size="xl" />
              Конфигурација
            </Link>
          </li>
          <li>
            <Link
              href={"/dealers/dealers-search"}
              className="text-black flex justify-start gap-4 items-center"
            >
              <FontAwesomeIcon icon={faLocationPin} color="black" size="xl" />
              Продавница
            </Link>
          </li>
        </ul>
      </div>
      <div className="basis-3/12 lighter-white-bg py-8">
        <div className="flex justify-between ">
          <p className="text-black text-lg font-medium uppercase">Фамилија д</p>
          <Link href={"/"} className="text-black text-md font-medium uppercase">
            Истражи
            <FontAwesomeIcon
              icon={faChevronRight}
              color="#CD192D"
              size="xs"
              className="pl-2"
            />
          </Link>
        </div>
        <div className="overflow-y-scroll h-80">
          {getBikesByFamily(family, bikes).map((bike: any) => (
            <SingleMotorcycleCard key={bike.id} bike={bike} />
          ))}
        </div>
      </div>
      <div className="basis-6/12 py-8">
        <MotorcycleInfo bike={bikeToRender} bikes={bikes}/>
      </div>
    </div>
  );
};

export default MotorcyclesNav;

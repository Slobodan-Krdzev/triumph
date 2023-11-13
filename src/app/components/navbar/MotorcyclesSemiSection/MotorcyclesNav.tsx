import { BIKES, FAMILIES } from "@/app/constants/constants";
import {
  faBars,
  faChevronRight,
  faLocationPin,
  faSlidersH,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Link from "next/link";
import React from "react";
import { getBikesByFamily } from "../../helpers/getBikesByFamily";
import SingleMotorcycleCard from "./SingleMotorcycleCard";

const MotorcyclesNav = async () => {
  try {
    const familiesRes = await fetch(`${FAMILIES}`);
    const families = await familiesRes.json();

    const bikesRes = await fetch(`${BIKES}`)
    const bikes = await bikesRes.json()

    const familiesToRender = families.map((family: any) => family.type);
    const filtersToRender = [
      ...familiesToRender,
      "special editions",
      "stealth edition",
      "chrome collection",
    ];

    return (
      <div className="flex ">
        <div className=" flex flex-col gap-6 basis-3/12 py-8">
          <ul>
            {filtersToRender.map((filter: any) => (
              <li key={filter}>
                <button className="uppercase font-medium text-lg text-black focus:text-red-700">
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
        <div className="basis-4/12 lighter-white-bg py-8">
          <div className="flex justify-between ">
            <p className="text-black text-lg font-medium uppercase">Фамилија д</p>
            <Link href={"/"} className="text-black text-md font-medium uppercase">Истражи
                <FontAwesomeIcon icon={faChevronRight} color="#CD192D" size="xs" className="pl-2"/>
            </Link>
          </div>
          <div className="overflow-y-scroll h-80">
                {getBikesByFamily('adventure', bikes).map((bike: any) => <SingleMotorcycleCard key={bike.id} bike={bike}/>)}
          </div>
        </div>
        <div className="basis-5/12 py-8">asd</div>
      </div>
    );
  } catch {}
};

export default MotorcyclesNav;

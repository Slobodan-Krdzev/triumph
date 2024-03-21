"use client";
import {
  faBars,
  faChevronRight,
  faLocationPin,
  faSlidersH,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Link from "next/link";
import { useState } from "react";
import { getBikesByEdition } from "../../helpers/getBikesByEdition";
import MotorcycleInfo from "./MotorcycleInfo";
import SingleMotorcycleCard from "./SingleMotorcycleCard";
import { usePathname, useRouter, useSearchParams } from "next/navigation";

type Props = {
  families: any[];
  bikes: any[];
  bikeToRender: any;
};

const MotorcyclesNav = ({ families = [], bikes = [], bikeToRender }: Props) => {
  const [family, setFamily] = useState("adventure");

  const router = useRouter();
  const pathname = usePathname();
  const navQuery = useSearchParams().get("navItem");
  const colorQuery = useSearchParams().get("color");
  const reversQuery = useSearchParams().get("reversed");

  const handleFamilyClick = (family: string) => {
    setFamily(family);

    const bikesFromActiveFamily = bikes.filter(
      (bike) => bike.familyType === family
    );

    const idOfFirstBike = bikesFromActiveFamily[0].id;

    if (Boolean(colorQuery) || Boolean(reversQuery)) {
      router.push(
        `${pathname}?navItem=${navQuery}&bikeID=${idOfFirstBike}&color=${colorQuery}&reversed=${reversQuery}`,
        { scroll: false }
      );
    } else {
      router.push(`${pathname}?navItem=${navQuery}&bikeID=${idOfFirstBike}`, {
        scroll: false,
      });
    }
  };

  return (
    <div className="flex ">
      <div className=" flex flex-col gap-6 basis-2/12 pt-8">
        <ul>
          {families?.map((filter: any, idx: number) => (
            <li key={idx}>
              <button
                className={`${
                  family === filter.type ? "text-red-600" : "text-black"
                } uppercase font-semibold text-lg  focus:text-red-700`}
                onClick={() => handleFamilyClick(filter.type)}
              >
                {filter.type}
              </button>
            </li>
          ))}
        </ul>
        <Link href={"/"} className="text-sm text-black">
          Проверени Second-Hand Мотори
        </Link>
        <ul className="flex flex-col gap-2">
          <li>
            <Link
              href={"/configure/bikes"}
              className="text-black flex justify-start gap-4 items-center text-sm"
            >
              <FontAwesomeIcon
                icon={faBars}
                color="black"
                size="lg"
                className="basis-1/12"
              />
              Модели
            </Link>
          </li>
          <li>
            <Link
              href={"/configure"}
              className="text-black flex justify-start gap-4 items-center text-sm"
            >
              <FontAwesomeIcon
                icon={faSlidersH}
                color="black"
                size="lg"
                className="basis-1/12"
              />
              Конфигурација
            </Link>
          </li>
          <li>
            <Link
              href={"/dealer"}
              className="text-black flex justify-start gap-4 items-center text-sm"
            >
              <FontAwesomeIcon
                icon={faLocationPin}
                color="black"
                size="lg"
                className="basis-1/12"
              />
              Продавница
            </Link>
          </li>
        </ul>
      </div>
      <div className="basis-4/12 lighter-white-bg pt-8 ">
        <div className="flex justify-between px-4">
          <p className="text-black text-lg font-semibold uppercase">{family}</p>

          {family !== "special" &&
            family !== "stealth" &&
            family !== "chrome" && (
              <Link
                href={`/motorcycles/${family}`}
                className="text-black text-sm font-semibold uppercase"
              >
                Истражи
                <FontAwesomeIcon
                  icon={faChevronRight}
                  color="#CD192D"
                  size="xs"
                  className="pl-2"
                />
              </Link>
            )}
        </div>

        {getBikesByEdition(family, bikes).length >= 5 && (
          <div className="overflow-y-scroll" style={{ height: 480 }}>
            {getBikesByEdition(family, bikes).map((bike: any) => (
              <SingleMotorcycleCard key={bike.id} bike={bike} />
            ))}
          </div>
        )}

        {/* za da ne kreira scroll */}
        {getBikesByEdition(family, bikes).length < 5 && (
          <div className="" style={{ height: 480 }}>
            {getBikesByEdition(family, bikes).map((bike: any) => (
              <SingleMotorcycleCard key={bike.id} bike={bike} />
            ))}
          </div>
        )}
      </div>
      <div className="basis-6/12 py-8">
        <MotorcycleInfo bike={bikeToRender} />
      </div>
    </div>
  );
};

export default MotorcyclesNav;

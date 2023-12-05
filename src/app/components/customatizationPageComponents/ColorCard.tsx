"use client";
import {
  faCheck,
  faCircleInfo,
  faInfoCircle,
  faPlus,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { usePathname, useRouter, useSearchParams } from "next/navigation";

type ColorCardProps = {
  color: any;
};

const ColorCard = ({ color }: ColorCardProps) => {
  const router = useRouter();
  const pathname = usePathname();
  const query = useSearchParams().get("color");
  const rotationQuery = useSearchParams().get("reversed");

  const handleColorChange = (query: any) => {
    router.push(`${pathname}?color=${query}&reversed=${rotationQuery}`);
  };

  return (
    <div className="md:basis-5/12 basis-1/3 grow sm:grow-0 shadow-lg">
      <button
        onClick={() => handleColorChange(color.colorCode)}
        className="w-full h-28 relative block"
        style={{
          backgroundImage: `url('${color.image}')`,
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          backgroundPosition: "center",
          padding: 2,
        }}
      >
        <p className="absolute -top-1 right-0 p-1">
          <FontAwesomeIcon
            icon={query === color.colorCode ? faCheck : faPlus}
            color="white"
            className="hover:text-white transition-colors ease-in-out delay-100"
          />
        </p>
      </button>
      <div
        className="bg-white px-2 py-2 relative flex flex-col justify-between"
        style={{ height: 76 }}
      >
        <h3 className="md:text-sm text-xs font-semibold uppercase basis-1/2">
          {color.colorName}
        </h3>
        <p className="text-xs text-gray-600 basis-1/2">
          {color.price ? `€${color.price}.00` : `Вклучено во Цената`}
        </p>
        <button className="absolute bottom-1 right-2">
          <FontAwesomeIcon icon={faCircleInfo} color="grey" />
        </button>
      </div>
    </div>
  );
};

export default ColorCard;

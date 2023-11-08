'use client'
import { faPlus } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { usePathname, useRouter } from "next/navigation";

type ColorCardProps = {
  color: any;
};

const ColorCard = ({ color }: ColorCardProps) => {

    const router = useRouter()
    const pathname = usePathname()

    const handleColorChange = (query: any) => {

        router.push(`${pathname}?color=${query}`)
    }    

  return (
    <div className="md:basis-5/12 sm:basis-1/2 basis-1 grow sm:grow-0 shadow-lg">
      <div
        className="w-100 h-20 relative"
        style={{
          backgroundImage: `url('${color.image}')`,
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          backgroundPosition: "center",
          padding: 2,
        }}
      >
        <button className="absolute -top-1 right-0 p-1" onClick={() => handleColorChange(color.colorCode)}>
          <FontAwesomeIcon icon={faPlus} color="black" className="hover:text-white transition-colors ease-in-out delay-100"/>
        </button>
      </div>
      <div className="bg-white px-2 py-4">
        <h3 className="text-sm font-semibold uppercase">{color.colorName}</h3>
        <p className="text-xs text-gray-600">{color.price}</p>
      </div>
    </div>
  );
};

export default ColorCard;

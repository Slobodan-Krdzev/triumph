'use client'
import { faCheck, faCircleInfo, faInfoCircle, faPlus } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { usePathname, useRouter, useSearchParams } from "next/navigation";

type ColorCardProps = {
  color: any;
};

const ColorCard = ({ color }: ColorCardProps) => {

    const router = useRouter()
    const pathname = usePathname()
    const query = useSearchParams().get('color')
    const rotationQuery = useSearchParams().get('reversed')

    const handleColorChange = (query: any) => {

        router.push(`${pathname}?color=${query}&reversed=${rotationQuery}`)
    }    

  return (
    <div className="md:basis-5/12 basis-1/3 grow sm:grow-0 shadow-lg">
      <div
        className="w-100 h-28 relative"
        style={{
          backgroundImage: `url('${color.image}')`,
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          backgroundPosition: "center",
          padding: 2,
        }}
      >
        <button className="absolute -top-1 right-0 p-1" onClick={() => handleColorChange(color.colorCode)}>
          <FontAwesomeIcon icon={query === color.colorCode ? faCheck : faPlus} color="white" className="hover:text-white transition-colors ease-in-out delay-100"/>
        </button>
      </div>
      <div className="bg-white px-2 py-2 relative">
        <h3 className="md:text-sm text-xs font-semibold uppercase">{color.colorName}</h3>
        <p className="text-xs text-gray-600">{color.price}</p>
        <button className="absolute top-1 right-2" >
          <FontAwesomeIcon icon={faCircleInfo} color="grey" />
        </button>
      </div>
    </div>
  );
};

export default ColorCard;

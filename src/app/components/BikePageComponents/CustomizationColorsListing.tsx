// 'use client'
// import { CustomizationColorType } from "@/app/types/HomeTypes/SharedTypes/types";
import { ColorType } from "../customatizationPageComponents/BikeModelImage";
import CustomizationColorBtn from "./CustomizationColorBtn";

type CustomizationColorsListingProps = {
    colors: ColorType[]
}

const CustomizationColorsListing = ({colors}: CustomizationColorsListingProps) => {

    // const [activeColor, setActiveColor] = useState<undefined | string>()
    // const router = useRouter()
    // const pathname = usePathname()

    // useEffect(() => {
    //     router.push(`${pathname}?color=${activeColor}`)

    // }, [activeColor])


  return (
    <ul className="flex flex-row md:flex-col gap-4">
      {colors.map((color: ColorType) => (
        <CustomizationColorBtn key={color.colorName} color={color}/>
      ))}
    </ul>
  );
};

export default CustomizationColorsListing;

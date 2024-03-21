'use client'
import { CustomizationColorType } from "@/app/types/HomeTypes/SharedTypes/types";
import React, { useEffect, useState } from "react";
import CustomizationColorBtn from "./CustomizationColorBtn";
import { usePathname, useRouter } from "next/navigation";

type CustomizationColorsListingProps = {
    colors: CustomizationColorType[]
}

const CustomizationColorsListing = ({colors}: CustomizationColorsListingProps) => {

    const [activeColor, setActiveColor] = useState('color1')
    const router = useRouter()
    const pathname = usePathname()

    useEffect(() => {
        router.push(`${pathname}?color=${activeColor}`)

    }, [activeColor])


  return (
    <ul className="flex flex-row md:flex-col gap-4">
      {colors.map((color: CustomizationColorType) => (
        <CustomizationColorBtn key={color.colorName} color={color}/>
      ))}
    </ul>
  );
};

export default CustomizationColorsListing;

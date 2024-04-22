'use client'
// import { CustomizationColorType } from '@/app/types/HomeTypes/SharedTypes/types'
import Image from 'next/image'
import { usePathname, useRouter, useSearchParams } from 'next/navigation'
import React from 'react'
import { ColorType } from '../customatizationPageComponents/BikeModelImage'

type CustomizationColorBtnProps = {
    color: ColorType
}

const CustomizationColorBtn = ({color:{ colorName, image, price}}: CustomizationColorBtnProps) => {

    const router = useRouter()
    const pathname = usePathname()
    const colorQuery = useSearchParams().get('color')

    const handleColorChange = (color:string) => {

        router.push(`${pathname}?color=${color}`, {scroll: false})
    }   

  return (
    <li className={`rounded-full flex justify-center items-center p-1 ${colorName === colorQuery ? 'border-2 border-black' : ''}`} style={{width:'50px', height: '50px', lineHeight:'50px'}}>
        <button className='w-full h-full' onClick={() => {
            handleColorChange(colorName)
        }}>
            <Image src={image} alt={colorName} width={40} height={40} className='rounded-full w-full h-full'/>
        </button>
    </li>
  )
}

export default CustomizationColorBtn
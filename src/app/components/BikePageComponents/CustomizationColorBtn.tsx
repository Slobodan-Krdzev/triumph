'use client'
import { CustomizationColorType } from '@/app/types/HomeTypes/SharedTypes/types'
import Image from 'next/image'
import { usePathname, useRouter } from 'next/navigation'
import React from 'react'

type CustomizationColorBtnProps = {
    color: CustomizationColorType
}

const CustomizationColorBtn = ({color:{colorCode, colorName, image, price}}: CustomizationColorBtnProps) => {

    const router = useRouter()
    const pathname = usePathname()

    const handleColorChange = (color:string) => {

        router.push(`${pathname}?color=${color}`)
    }   

  return (
    <li className='rounded-full flex justify-center items-center' style={{width:'40px'}}>
        <button className='w-full h-full' onClick={() => {
            handleColorChange(colorCode)
        }}>
            <Image src={image} alt={colorCode} width={40} height={40} className='rounded-full'/>
        </button>
    </li>
  )
}

export default CustomizationColorBtn
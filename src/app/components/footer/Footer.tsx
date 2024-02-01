"use client"
import React, { useEffect, useState } from 'react'
import { useBreakpoint } from '../helpers/useBreakpoint'
import DesktopFooter from './DesktopFooter'
import MobileFooter from './MobileFooter/MobileFooter'
import { FAMILIES } from '@/app/constants/constants'

export const footerLists = [
  
  {
    title: "Стартувај",
    items: [
      {
        id: 6,
        url: "/configure",
        text: "Конфигурирај",
      },
      {
        id: 7,
        url: "/dealer/dealer-search",
        text: "Контакт",
      },
    ],
  },
  {
    title: '"For the ride"',
    items: [
      {
        id: 8,
        url: "https://triumph-mediakits.com/en/news/news-listing.html",
        text: "Нoвости",
      }
    ],
  },
  {
    title: "За Сопственици",
    items: [
      {
        id: 11,
        url: "/owners/my-triumph-app",
        text: 'Мојата "Triumph" апликација',
      },
      {
        id: 12,
        url: "/owners/what3words",
        text: '"what3words"',
      },
      {
        id: 13,
        url: "/owners/your-triumph",
        text: 'Вашиот "Triumph"',
      },
    ],
  },
];

const Footer = () => {

    const [families, setFamilies] = useState<any[]>([])

    const breakpoint = useBreakpoint()
    

    useEffect(() => {

       fetch(FAMILIES)
       .then(res => res.json())
       .then(data => {



          setFamilies( data.map((family: any) => family.type))
       })


    }, [])
   

    if(families.length > 0) {
      return (
        <footer className="px-4 md:px-0 border-t-2 border-thin-gray md:pt-8 pt-4 mt-4 md:mt-0 w-full md:w-10/12 m-auto">
            {breakpoint > 1024 ? <DesktopFooter familyItems={families}/> : <MobileFooter familyItems={families}/>}
        </footer>
      )
    } else {
      return "Loading"
    }
  
}

export default Footer
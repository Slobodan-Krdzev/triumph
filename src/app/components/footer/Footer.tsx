"use client"
import React from 'react'
import { useBreakpoint } from '../helpers/useBreakpoint'
import DesktopFooter from './DesktopFooter'
import MobileFooter from './MobileFooter/MobileFooter'

export const footerLists = [
  {
    title: "Моторцикли",
    items: [
      {
        id: 1,
        url: "/motorcycles/adventure",
        text: "Adventure",
      },
      {
        id: 2,
        url: "/motorcycles/classics",
        text: "Classic",
      },
      {
        id: 3,
        url: "/motorcycles/roadsters",
        text: "Roadster",
      },
      {
        id: 4,
        url: "/motorcycles/rocket-3",
        text: "Rocket-3",
      },
      {
        id: 5,
        url: "/latest-offers",
        text: "Понуди",
      },
      {
        id: 6,
        url: "/approved-triumph-pre-owned-motorcycles",
        text: "Користени",
      },
    ],
  },
  {
    title: "Стартувај",
    items: [
      {
        id: 6,
        url: "/configuration",
        text: "Конфигурирај",
      },
      {
        id: 7,
        url: "/dealer/dealer-search",
        text: "Најди Дилер / Контакт",
      },
    ],
  },
  {
    title: '"For the ride"',
    items: [
      {
        id: 8,
        url: "/for-the-ride",
        text: "Новости",
      },
      {
        id: 9,
        url: "/for-the-ride/experiences/factory-visitor-experience",
        text: "Доживувања",
      },
      {
        id: 10,
        url: "/carrers",
        text: "Кариери",
      },
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
        url: "/owners",
        text: 'Tvojot "Triumph"',
      },
    ],
  },
];

const Footer = () => {

    const breakpoint = useBreakpoint()
    
  return (
    <footer className="md:px-8 px-4 border-t-2 border-thin-gray md:pt-8 pt-4 mt-4 md:mt-0">
        {breakpoint > 1024 ? <DesktopFooter/> : <MobileFooter/>}
    </footer>
  )
}

export default Footer
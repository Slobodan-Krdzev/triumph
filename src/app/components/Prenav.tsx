"use client"
import Link from 'next/link';
import { usePathname, useRouter } from 'next/navigation';
import React from 'react'

function Prenav () {
  const router = useRouter()
  const pathname = usePathname()
  const handleSectionClose = () => router.push(pathname);


  return (
    <div className='flex py-2 px-10 justify-end text-white text-xs' onMouseEnter={handleSectionClose}>
      <ul className='flex gap-4 items-center'>
        <li><Link href={"/dealers/dealer-search"} className='text-white'>Контакт</Link></li>
        <li><Link href={"/configuration"} className='text-white'></Link>Конфигурација</li>
        <li><Link href={"/latest-offers"} className='text-white uppercase'></Link>ПОНУДИ</li>

      </ul>
    </div>
  )
}

export default Prenav;
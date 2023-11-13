"use client"
import { usePathname, useRouter } from 'next/navigation';
import React from 'react'

function Prenav () {
  const router = useRouter()
  const pathname = usePathname()
  const handleSectionClose = () => router.push(pathname);


  return (
    <div className='flex gray-cl py-1 px-10 justify-end text-white' onMouseEnter={handleSectionClose}>Contact</div>
  )
}

export default Prenav;
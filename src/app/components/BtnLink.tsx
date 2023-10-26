import Link from 'next/link'
import React from 'react'

type BtnProps = {
    link: string,
    text: string
}

const BtnLink = ({link, text}: BtnProps) => {
  return (
    <Link href={link} className='bg-red-400 uppercase font-bold px-5 py-3 text-slate-100'> {text}</Link>
  )
}

export default BtnLink
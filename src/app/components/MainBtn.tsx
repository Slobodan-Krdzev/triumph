import Link from 'next/link'
import React from 'react'

type BtnProps = {
    link?: string,
    text: string,
    isLink?: boolean
}

const MainBtn = ({link, text, isLink}: BtnProps) => {

  if(isLink && link){
    return (
      <Link href={link} className='red-bg-color uppercase font-bold px-5 py-3 text-slate-100 text-base leading-7 main-btn-hover'> {text}</Link>
    )
  }

  return (
    <button className='red-bg-color uppercase font-bold px-5 py-3 text-slate-100 text-base main-btn-hover'>{text}</button>
  )
  
}

export default MainBtn
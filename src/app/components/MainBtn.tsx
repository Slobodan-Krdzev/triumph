import Link from 'next/link'
import React from 'react'

type BtnProps = {
    link?: string,
    text: string,
    isLink?: boolean,
    bgBlack: boolean
}

const MainBtn = ({link, text, isLink, bgBlack}: BtnProps) => {

  if(isLink && link){
    return (
      <Link href={link} className={`${bgBlack ? 'bg main-btn-black-hover' : 'red-bg-color main-btn-hover'}  uppercase font-bold px-5 py-3 text-slate-100 text-base leading-7 `}> {text}</Link>
    )
  }

  return (
    <button className={`${bgBlack ? 'bg main-btn-black-hover' : 'red-bg-color main-btn-hover'} uppercase font-bold px-5 py-3 text-slate-100 text-base `}>{text}</button>
  )
  
}

export default MainBtn
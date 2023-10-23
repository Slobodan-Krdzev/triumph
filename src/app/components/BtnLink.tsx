import Link from 'next/link'
import React from 'react'

type BtnProps = {
    link: string,
    text: string
}

const BtnLink = ({link, text}: BtnProps) => {
  return (
    <Link href={link}> {text}</Link>
  )
}

export default BtnLink
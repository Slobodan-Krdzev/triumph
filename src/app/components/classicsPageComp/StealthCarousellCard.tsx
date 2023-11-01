import { faChevronRight } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import Image from 'next/image'
import Link from 'next/link'
import React from 'react'

type StealthCarousellCardProps = {
    title: string,
    price: string,
    url: string,
    image: string
}

const StealthCarousellCard = ({title, price, url, image}: StealthCarousellCardProps) => {
  return (
    <div className='px-6 hover:bg-neutral-100 transition-colors delay-100 ease-in-out'>
        <Link href={url}>
        <Image src={image} alt={title} width={358} height={201}/>
        <p>Детали <FontAwesomeIcon icon={faChevronRight}/></p>
        <p>{title}</p>
        <p>{price}</p>

        </Link>

    </div>
  )
}

export default StealthCarousellCard
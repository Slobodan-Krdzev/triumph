import Image from 'next/image'
import React from 'react'
import PageParagraph from '../familiySharedComponents/PageParagraph'

type CardProps = {
    img: string,
    title: string,
    desc: string
}

const Card = ({img, title, desc}: CardProps) => {
  return (
    <div className='text-white basis-4/12 gap-4 flex flex-col justify-start items-start'>
        <Image src={img} alt={title} width={371} height={371}/>
        <h3 className='text-3xl font-semibold'>{title}</h3>
        <PageParagraph text={desc} />
    </div>
  )
}

export default Card
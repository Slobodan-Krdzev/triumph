import React from 'react'

type BikeTitleProps = {
    text: string
}

const BikeTitle = ({text}: BikeTitleProps) => {
  return (
    <h1 className='text-4xl md:text-5xl lg:text-7xl text-neutral-200 font-bold uppercase w-full m-auto lg:w-10/12 '>{text}</h1>
  )
}

export default BikeTitle
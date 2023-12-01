import React from 'react'

type BikeTitleProps = {
    text: string
}

const BikeTitle = ({text}: BikeTitleProps) => {
  return (
    <h1 className='text-4xl md:text-6xl lg:text-7xl text-neutral-200 font-bold uppercase lg:pl-24 md:pl-16 pl-0'>{text}</h1>
  )
}

export default BikeTitle
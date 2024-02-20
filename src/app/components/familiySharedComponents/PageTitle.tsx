import React from 'react'

type FamilyPageTitleProps = {
    text: string
}

const FamilyPageTitle = ({text}: FamilyPageTitleProps) => {
  return (
    <h1 className='lg:text-7xl text-4xl uppercase font-semibold mb-4 text-center md:text-left'>{text}</h1>
  )
}

export default FamilyPageTitle
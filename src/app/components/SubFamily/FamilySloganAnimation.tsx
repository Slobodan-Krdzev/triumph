"use client"
import React, { useEffect, useState } from 'react'

type FamilySloganAnimationType = {
    slogans: any[]
}

const FamilySloganAnimation = ({slogans}: FamilySloganAnimationType) => {
    
    const [count, setCount] = useState(0)

    useEffect(() => {

        const timer = setTimeout(() => {

            if(count === (slogans.length - 1)) {
                setCount(-1)
            }
            setCount(prevCount => prevCount + 1)
        }, 2000)

        return () => clearTimeout(timer)

    }, [count])

  return (
    <p className='lg:text-9xl md:text-6xl text-2xl uppercase font-bold mt-4 w-full text-center'>{slogans[count]}</p>
  )
}

export default FamilySloganAnimation
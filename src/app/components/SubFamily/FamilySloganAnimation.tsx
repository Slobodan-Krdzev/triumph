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
    <h1 className='text-9xl uppercase font-bold mt-6'>{slogans[count]}</h1>
  )
}

export default FamilySloganAnimation
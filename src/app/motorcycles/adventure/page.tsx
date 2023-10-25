import { BIKES, FAMILIES } from '@/app/constants/constants'
import Link from 'next/link'
import React from 'react'

const AdventurePage = async () => {

  const familyRes = await fetch(`${FAMILIES}?type=adventure`)
  const familyData = await familyRes.json()

  const bikesRes = await fetch(`${BIKES}?type=adventure`)
  const bikes = await bikesRes.json()

  return (
    <><div className='flex justify-between px-5'>
      <div className='flex'>
        <h1>Adventure</h1>

        {bikes.map((bike: any) => <Link key={bike.bikeId} className='ml-10' href={`/motorcycles/adventure/${bike.model}`}>{bike.model}</Link>)}

      </div>

      <div className='flex '>
        <p className='mr-10'>FIND A DEALER</p>
        <Link href={'/configure'}>CONFIGURATION</Link>

      </div>
    </div><div>
        <h2>{familyData[0].type.toUpperCase()}</h2>
        <p>{familyData[0].shortDesc}</p>
      </div></>
  )
}

export default AdventurePage
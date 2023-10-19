
import { FAMILIES } from '@/app/constants/constants'
import React from 'react'

type Props = {}

const BikesPage = async (props: Props) => {

    const allBikes: any[] = []

    const allBikesRes = await fetch(`${FAMILIES}`, {cache: 'no-store'})
    const allBikesData = await allBikesRes.json()


    allBikesData.forEach((family: any) => {
      family.bikes.forEach((bike:any) => allBikes.push(bike))
    })
    

    console.log('all bikes ama posle logika', allBikes);

  return (
    <>
    <div>BikesPage</div>
    <ul>
        {allBikes.map((bike: any) => <li key={bike.id}>{bike.name}</li>)}
    </ul>
    </>
  )
}

export default BikesPage;
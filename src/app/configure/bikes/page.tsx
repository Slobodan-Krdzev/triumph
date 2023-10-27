
import BtnLink from '@/app/components/MainBtn'
import { BIKES } from '@/app/constants/constants'
import React from 'react'

type Props = {}

const BikesPage = async (props: Props) => {

    // ovde zaradi sortingot treba da odlucime dali ke bide client side 
    const allBikesRes = await fetch(`${BIKES}`, {cache: 'no-store'})
    const allBikesData = await allBikesRes.json()


  return (
    <>
    <div>BikesPage</div>
    <ul>
        {allBikesData.map((bike: any) => <li key={bike.bikeId}>{bike.model} {bike.bikeId} ---- <BtnLink link={`/configure/bike/${bike.bikeId}`} text={'Configuration'} />  --- <BtnLink link={`/motorcycles/${bike.type}/${bike.model}`} text={'Details'} /></li>)}
        
    </ul>
    </>
  )
}

export default BikesPage;
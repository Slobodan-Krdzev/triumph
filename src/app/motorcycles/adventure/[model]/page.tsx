import { BIKES } from '@/app/constants/constants'
import React from 'react'

const BikeModelPage = async ({params}: any) => {

  const bikeRes = await fetch(`${BIKES}?model=${params.model}`)
  const bike = await bikeRes.json()
    
  console.log("bike", bike);
  
  return (
    <div>BikeModelPage
      <h1>{bike[0].model}</h1>
    </div>
  )
}

export default BikeModelPage
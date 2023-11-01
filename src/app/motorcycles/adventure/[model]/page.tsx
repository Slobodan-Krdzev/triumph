import { BIKES } from '@/app/constants/constants'
import React from 'react'

const BikeModelPage = async ({params}: any) => {

  // sredi cache
  console.log("bike", params);

  const bikeRes = await fetch(`${BIKES}?model=${params.model}`, {cache: 'no-store'})
  const bike = await bikeRes.json()
    
  
  return (
    <div>BikeModelPage
      <h1> From Params....{params.model}</h1>
    </div>
  )
}

export default BikeModelPage
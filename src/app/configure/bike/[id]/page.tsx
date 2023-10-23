
import { BIKES } from '@/app/constants/constants'
import React from 'react'

const BikeConfigPage = async ({params}: any) => {

    // ovde treba fallback da se sredi ako nema toj bike da mani 404
    // try / catch 
    
    const bikeRes = await fetch(`${BIKES}?bikeId=${params.id}`, {cache: 'no-store'})
    const bike = await bikeRes.json()

    console.log("motor", bike);
    
    if(bike) {
      return (
        <div>
          <h1>Bike Model: {bike[0].model}</h1>
          <h2>Bike Price: {bike[0].price}</h2>
          <h3>Type of bike: {bike[0].type}</h3>
        </div>
      )
    }
  
}

export default BikeConfigPage
import Breadcrumbs from '@/app/components/Breadcrumbs/Breadcrumbs'
import BikeListingNoSlider from '@/app/components/familiySharedComponents/BikeListingNoSlider'
import { BIKES } from '@/app/constants/constants'
import { redirect } from 'next/navigation'
import React from 'react'

const Rocket3ModelsPage = async () => {

    try{
  
      const bikesRes = await fetch(`${BIKES}?subFamilyCategory=rocket-3`, {
        next: { revalidate: 3000 },
      })
      const bikesData = await bikesRes.json()
  
      return (
        <main className='bg-white md:py-16 py-4 relative'>
          <Breadcrumbs dark />
          
          <h1 className='uppercase text-4xl font-semibold text-center md:mb-16 mb-4'>Rocket 3</h1>
          <BikeListingNoSlider
              bikes={bikesData}
              configureLink={true}/>
        </main>
      )
    }catch(err) {
      return redirect(`/motorcycles/rocket-3`)
      
    }
}

export default Rocket3ModelsPage
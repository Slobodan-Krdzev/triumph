import BikeListingNoSlider from '@/app/components/familiySharedComponents/BikeListingNoSlider'
import { BIKES } from '@/app/constants/constants'

const SubFamilyModelsPage = async ({params}: any) => {

  const model = params.subFamily

  try{

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${model}`)
    const bikesData = await bikesRes.json()

    return (
      <main className='bg-white md:py-16 py-4'>
        <h1 className='uppercase text-4xl font-semibold text-center md:mb-16 mb-4'>{model}</h1>
        <BikeListingNoSlider
            bikes={bikesData}
            configureLink={true}/>
      </main>
    )
  }catch(err) {
    console.log(err);
    return 
    
  }

 
}

export default SubFamilyModelsPage
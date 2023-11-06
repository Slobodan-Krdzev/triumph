import { BIKES, FAMILIES } from '@/app/constants/constants'
import React from 'react'

const SubFamilyPage = async ({params}: any) => {

  const familyRes = await fetch(`${FAMILIES}?type=adventure`, {cache: 'no-store'})
  const family = await familyRes.json()

  const query = params.subFamily
  
  return (
    <div>
      SubFamilyPage
      <h1> From Params....{family[0].subFamilies[query].title}....{family[0].subFamilies[query].startingPrice}</h1>
    </div>
  )
}

export default SubFamilyPage
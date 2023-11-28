import React from 'react'

const ClassicsBikePage = async ({params}: any) => {

    const bikeModel = params.bike
    
    try {
        return (
            <>{bikeModel}</>
          )
    }catch (err) {

        console.log(err);
        return
        
    }
  
}

export default ClassicsBikePage
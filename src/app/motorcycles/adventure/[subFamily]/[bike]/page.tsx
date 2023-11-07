import React from 'react'

const BikePage = ({params}: any) => {
  return (
    <div>BikePage
      {params.bike}
    </div>
  )
}

export default BikePage
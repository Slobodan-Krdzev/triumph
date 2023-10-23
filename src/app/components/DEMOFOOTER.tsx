import Link from 'next/link'
import React from 'react'

const DEMOFOOTER = () => {
  return (
    <div>
        
        <h1> DEMOFOOTER </h1>
        <ul>
            <li><Link href={'/motorcycles/adventure'}>Adventure</Link></li>
            <li><Link href={'/motorcycles/classics'}>Classics</Link></li>
            <li><Link href={'/motorcycles/roadsters'}>Roadsters</Link></li>
            <li><Link href={'/motorcycles/rocket-3'}>Rocket-3</Link></li>
            <li><Link href={'/'}>Reviews</Link></li>
            <li><Link href={'/'}>Offers</Link></li>
            <li><Link href={'/'}>Second Hand</Link></li>


        </ul>
    </div>
  )
}

export default DEMOFOOTER
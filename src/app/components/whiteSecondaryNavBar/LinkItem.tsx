import Link from 'next/link'
import React from 'react'

type LinkItemProps = {
    model: string,
}

const LinkItem = ({model}: LinkItemProps) => {
  return (
    <Link
    className="mr-7 uppercase font-semibold text-neutral-600 text-sm tracking-tight underline-hover-effect py-2"
    href={`/motorcycles/adventure/${model}`}
  >
    {model}
  </Link>
  )
}

export default LinkItem
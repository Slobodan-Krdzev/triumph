"use client"
import React, { useState } from 'react'
import MainBtn from './MainBtn'
import { usePathname, useRouter } from 'next/navigation'

const PaginationBtn = () => {
    const [page, setPage] = useState(2)
    const router = useRouter()
    const pathname = usePathname()

    const updateRouter = () => {

        router.push(`${pathname}?_page=${page}`, {scroll: false})

        setPage(page + 1)
        console.log(page);
    }

    

  return (
    <section className='flex justify-center pb-4 md:pb-16 '>
        <MainBtn text={"Прикажи Повеќе"} bgBlack={true} isLink={false} action={updateRouter}/>
    </section>
  )
}

export default PaginationBtn
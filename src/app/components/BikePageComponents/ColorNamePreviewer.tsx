'use client'
import { useSearchParams } from 'next/navigation'
import React from 'react'

type ColorNamePreviewerProps = {
    bike: any
}

const ColorNamePreviewer = ({bike}: ColorNamePreviewerProps) => {

    const colorQuery = useSearchParams().get('color')
    const colorToDisplay = bike.customizationColors.find((color:any) => color.colorCode === colorQuery)

    if(colorToDisplay) {
        return <p className="text-sm mb-6 text-neutral-500">{colorToDisplay.colorName}</p>

    } else {
        return ""
    }

  
}

export default ColorNamePreviewer
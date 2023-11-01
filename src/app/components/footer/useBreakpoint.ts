import { useState, useEffect } from "react"

export const useBreakpoint = () => {
    const [breakpoint, setBreakpoint] = useState(window.innerWidth)

    useEffect(() => {
      
        window.addEventListener('resize' , () => setBreakpoint(window.innerWidth))

        return () => {
            window.removeEventListener('resize', () => setBreakpoint(window.innerWidth));
        }
    }, [window.innerWidth])
    
    console.log("breakpoint", breakpoint);
    
    return breakpoint
}
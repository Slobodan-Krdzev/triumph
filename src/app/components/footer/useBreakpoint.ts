import { useState, useEffect } from "react"

export const useBreakpoint = () => {
    const [breakpoint, setBreakpoint] = useState(1400)
    

    useEffect(() => {
      
        window.addEventListener('resize' , () => setBreakpoint(window.innerWidth))

        return () => {
            window.removeEventListener('resize', () => setBreakpoint(window.innerWidth));
        }
    }, [window.innerWidth])
    
    return breakpoint
}
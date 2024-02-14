import { FAMILIES } from "@/app/constants/constants";
import { useEffect, useState } from "react"

type StatusType = 'loading' | "error" | "success"

export const useFetchFamilies = () => {

    const [fams, setFams] = useState<any[]>([])
    const [statusFams, setStatus] = useState<StatusType>('loading')

    useEffect(() => {
        fetch(`${FAMILIES}`)
          .then((res) => res.json())
          .then((data) => {
            const familiesToRender = data.map((family: any) => family.type);
            const filtersToRender = [
              ...familiesToRender,
              "special",
              "stealth",
              "chrome",
            ];
    
            setFams(filtersToRender);
            setStatus('success')
          })
          .catch(e => {
            setStatus('error')
          });
      }, []);

    return {statusFams, fams}
}
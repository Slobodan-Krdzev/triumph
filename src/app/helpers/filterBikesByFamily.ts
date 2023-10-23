export function filterOutBikesByFamily(family: string, bikes: any){

    return bikes.filter((bike: any) => bike.type === family)
  }
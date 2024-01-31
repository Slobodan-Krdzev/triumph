export const getBikesByEdition = (edition: string, bikes: any[]) => {
    
    return bikes.filter(bike => bike.familyType === edition)
}
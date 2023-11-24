export const getBikesBySubfamilyCategory = (family: string, bikes: any[]) => {
    const allBikes = bikes

    return bikes.filter(bike => bike.subFamilyCategory === family)
}
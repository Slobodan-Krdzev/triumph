export const getBikesByFamily = (family: string, bikes: any[]) => {
    const allBikes = bikes

    return bikes.filter(bike => bike.category === family)
}
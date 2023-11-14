export const getBikesByEdition = (edition: string, bikes: any[]) => {
    const allBikes = bikes

    return bikes.filter(bike => bike.edition === edition)
}
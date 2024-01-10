export const getBikesByCC = (cc: number, bikes: any[]) => {
    const allBikes = bikes

    return bikes.filter(bike => bike.specs.cc === cc)
}
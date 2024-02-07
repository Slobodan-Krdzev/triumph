export const getBikesByCC = (cc:number, bikes: any[]) => {

    const allBikes = bikes

    return allBikes.filter(bike => bike.cc === cc)
}
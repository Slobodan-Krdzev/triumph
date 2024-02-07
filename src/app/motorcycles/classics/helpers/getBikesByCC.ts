export const getBikesByCC = (cc:string, bikes: any[]) => {

    const allBikes = bikes

    return allBikes.filter(bike => bike.title.includes(cc))
}
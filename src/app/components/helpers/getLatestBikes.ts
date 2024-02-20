export const createBikeList = (bikes: any[]) => {

    const newestBikes = bikes.slice().sort((a,b) => b.id - a.id).splice(0,7)


    let finalBikes: any[] = []

    newestBikes.map((bike: any) => {
      finalBikes.push({
        link: `/motorcycles/${bike.familyType}/${bike.subFamilyName}`,
        text: bike.title
      })
    })
    return finalBikes ?? []
  }
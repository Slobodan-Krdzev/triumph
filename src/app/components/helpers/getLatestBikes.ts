export const createBikeList = (bikes: any[]) => {

    const newestBikes = bikes.slice().sort((a,b) => b.id - a.id).splice(0,7)


    let finalBikes: any[] = []

    newestBikes.map((bike: any) => {

      finalBikes.push({
        link: `/motorcycles/${bike.category}/${bike.subFAmilyCategory}/${bike.model}`,
        text: bike.title
      })
    })

    return finalBikes ?? []
  }
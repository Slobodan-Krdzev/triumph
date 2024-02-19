export const createFamilies = (familyItems: string[]) => {

    let finalFamilies: any[] = []

    familyItems.map((family: any, idx:number) => {

      finalFamilies.push({
        id: idx,
        url: `/motorcycles/${family.type}`,
        text: family.type
      })
    })

    return finalFamilies ?? []
  }
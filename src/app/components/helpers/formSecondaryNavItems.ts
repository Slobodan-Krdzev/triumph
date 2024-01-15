export const formSecondaryNavItems = (subFamilies: any, familyType: string) => {


    return Object.values(subFamilies).map((subFam: any) => {
        return { text: subFam.title, link: `/motorcycles/${familyType}/${subFam.subFamilyName}`}
      })
}
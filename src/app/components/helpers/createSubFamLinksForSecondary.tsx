
// TUKA NI TREBA TYPE ZA SUBFAMILIJA

export const createSubFamLinksForSecondary = (subFamilies: any) => {

    return subFamilies.map((subFam: any) => {
        return {text: subFam.subFamilyName, link: `/motorcycles/${subFam.familyType}/${subFam.subFamilyName}`}
    })
}
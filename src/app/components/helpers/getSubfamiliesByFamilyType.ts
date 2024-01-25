export const getSufamiliesByFamilyType = (
  familyType: string,
  subFamilies: any[]
) => {
  const filteredSubFams = subFamilies.filter(
    (subFam: any) => subFam.familyType === familyType
  );

  return filteredSubFams.map((subFam: any) => subFam);
};

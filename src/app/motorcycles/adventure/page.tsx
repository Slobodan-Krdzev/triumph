import FamilyPageHeroSection from "@/app/components/familiySharedComponents/FamilyPageHeroSection";
import SecondaryNavBar from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import Link from "next/link";
import React from "react";

const AdventurePage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=adventure`, {cache: 'no-store'});
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?type=adventure`);
  const bikes = await bikesRes.json();

  return (
    <>
      <SecondaryNavBar items={bikes} />
      <FamilyPageHeroSection title={familyData[0].type} mainBikeLogo={familyData[0].mainBikeLogoImage} desc={familyData[0].familyPageBannerDesc} video={familyData[0].familyPageBannerVideo}/>
      
    </>
  );
};

export default AdventurePage;

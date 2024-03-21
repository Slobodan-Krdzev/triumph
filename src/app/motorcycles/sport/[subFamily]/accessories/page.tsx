import AccessoriesListing from '@/app/components/SubFamily/ClassicAccesoryPage/AccessoriesListing';
import SecondaryPagesHeroSection from '@/app/components/SubFamily/SecondaryPagesHeroSection';
import BikeInfoTextImageBtn from '@/app/components/familiySharedComponents/BikeInfoTextImageBtn';
import { formulateSubFamilyTitleOnBanner } from '@/app/components/helpers/formulateSubFamilyTilteOnBanner';
import { BIKES, FAMILIES, SUB_FAMILIES } from '@/app/constants/constants';
import { redirect } from 'next/navigation';
import React from 'react'

const SubFamReasonsToRide = async ({params}: any) => {
  const subFam = params.subFamily;

    try {
      const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFam}`, {
        next: { revalidate: 3000 },
      });
      const subFamilyData = await subFamilyRes.json();
      const subFamily = subFamilyData[0];
  
      const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${subFam}`, {
        next: { revalidate: 3000 },
      });
      const bikesData = await bikesRes.json();
  
      return (
        <>
          <SecondaryPagesHeroSection
            bannerImage={subFamily.accessory.banner.image}
            subFamilyTitle={formulateSubFamilyTitleOnBanner(subFam)}
            text={`Аксесоари`}
          />
  
          <main className="px-4 md:px-16 lg:px-40">
            <AccessoriesListing items={subFamily.accessory.accessoryTypes} />
  
            {bikesData.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.title}
                desc={bike.subFamilyPromo.desc ?? ""}
                ctaBtn={{
                  text: "Кoнфигурација",
                  link: `/configure/bike/${bike.model}`,
                }}
                image={{
                  src: bike.gallery.modelImage?.src ?? "",
                  alt: bike.gallery.modelImage?.alt ?? "Bike Image",
                }}
                blackBtn={true}
              />
            ))}
          </main>
        </>
      );
    } catch (err) {
  
      return redirect(`/motocycles/sport/${subFam}`)
    }
}

export default SubFamReasonsToRide
import AccessoriesListing from '@/app/components/SubFamily/ClassicAccesoryPage/AccessoriesListing';
import SecondaryPagesHeroSection from '@/app/components/SubFamily/SecondaryPagesHeroSection';
import BikeInfoTextImageBtn from '@/app/components/familiySharedComponents/BikeInfoTextImageBtn';
import { BIKES, FAMILIES } from '@/app/constants/constants';
import React from 'react'

const SubFamReasonsToRide = async ({params}: any) => {
  const subFam = params.subFamily;

    try {
      const familyRes = await fetch(`${FAMILIES}?type=adventure`, {
        cache: "no-store",
      });
      const familyData = await familyRes.json();
      const subFamily = familyData[0].subFamilies[subFam];
  
      const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${subFam}`);
      const bikesData = await bikesRes.json();
  
      return (
        <>
          <SecondaryPagesHeroSection
            bannerImage={subFamily.accessory.banner.image}
            subFamilyTitle={subFam.toUpperCase()}
            text={`Аксесоари`}
          />
  
          <main className="px-4 md:px-16 lg:px-40">
            <AccessoriesListing items={subFamily.accessory.accessoryTypes} />
  
            {bikesData.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.title}
                desc={bike.subFamilyPromo.desc}
                ctaBtn={{
                  text: "КОнфигурација",
                  link: `/configure/bike/${bike.model}`,
                }}
                image={{
                  src: bike.gallery.modelImage.src,
                  alt: bike.gallery.modelImage.alt,
                }}
                blackBtn={true}
              />
            ))}
          </main>
        </>
      );
    } catch (err) {
      console.log(err);
  
      return "err";
    }
}

export default SubFamReasonsToRide
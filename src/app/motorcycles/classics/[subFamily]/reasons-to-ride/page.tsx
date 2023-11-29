import ReasonsListin from '@/app/components/SubFamily/Reasons/ReasonsListin';
import SecondaryPagesHeroSection from '@/app/components/SubFamily/SecondaryPagesHeroSection';
import BikeInfoTextImageBtn from '@/app/components/familiySharedComponents/BikeInfoTextImageBtn';
import SectionTitleH2 from '@/app/components/familiySharedComponents/SectionTitleH2';
import { BIKES, FAMILIES } from '@/app/constants/constants';
import React from 'react'

const ClassicsReasonsToRide = async ({params}: any) => {
  const subFam = params.subFamily;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=classics`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const subFamily = familyData[0].subFamilies[subFam];

    const bikesRes = await fetch(`${BIKES}?model=${subFam}`);
    const bikesData = await bikesRes.json();

    return (
      <>
        <SecondaryPagesHeroSection bannerImage={subFamily.reasonsToDrive.banner.image} subFamilyTitle={subFam} text={`Причини зошто да ја одберете серијата`} />

        <main className="px-4">
          <div className="md:w-10/12 lg:w-6/12 m-auto pt-8">
            <SectionTitleH2
              text={subFamily.reasonsToDrive.infoText.title}
              color={"dark"}
            />
            <p className="font-normal md:text-lg text-md">
              {subFamily.reasonsToDrive.infoText.desc}
            </p>
          </div>

          <ReasonsListin reasons={subFamily.reasonsToDrive.reasons} />
          
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

    return "err"
  }
}

export default ClassicsReasonsToRide
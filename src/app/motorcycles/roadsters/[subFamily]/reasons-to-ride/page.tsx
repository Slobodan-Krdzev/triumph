import ReasonsListin from '@/app/components/SubFamily/Reasons/ReasonsListin';
import BikeInfoTextImageBtn from '@/app/components/familiySharedComponents/BikeInfoTextImageBtn';
import SectionTitleH2 from '@/app/components/familiySharedComponents/SectionTitleH2';
import { BIKES, FAMILIES } from '@/app/constants/constants';
import React from 'react'

const ReasonsRoadstersPage = async ({params}: any) => {
    const subFam = params.subFamily;

    try {
      const familyRes = await fetch(`${FAMILIES}?type=roadsters`, {
        cache: "no-store",
      });
      const familyData = await familyRes.json();
      const subFamily = familyData[0].subFamilies[subFam];
  
      const bikesRes = await fetch(`${BIKES}?model=${subFam}`);
      const bikesData = await bikesRes.json();
  
      return (
        <>
          <section
            style={{
              backgroundImage: `url("${subFamily.reasonsToDrive.banner.image}")`,
              backgroundSize: "cover",
              backgroundPosition: "center",
              backgroundRepeat: "no-repeat",
              height: "60vh",
              overflow: "hidden",
            }}
          >
            <div className="flex justify-center items-center w-full h-full overlay">
              <div className="w-6/12 m-auto flex flex-col justify-center items-center text-white gap-6">
                <h1 className="md:text-xl text-sm border-b-4 border-white capitalize pb-2">
                  {subFam}
                </h1>
                <p className="md:text-5xl text-xl uppercase font-semibold tracking-tighter text-center">
                  Причини зошто да ја одберете серијата
                </p>
              </div>
            </div>
          </section>
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
  
      return;
    }
}

export default ReasonsRoadstersPage
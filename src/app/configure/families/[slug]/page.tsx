import BikesByFamilyWithSlider from "@/app/components/BikesByFamilyWithSlider";
import HeroSectionCTA from "@/app/components/HeroSectionCTA";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import React from "react";

type Props = {};

const TypeOfFamilyPage = async (data: any, props: Props) => {
  // OVDE TREBA DA PREVZEMIMI SUB FAMILIES

  let pathname = data.params.slug;

  

  const familyRes = await fetch(`${FAMILIES}?type=${pathname}`, {
    cache: "no-store",
  });
  const family = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?category=${pathname === 'rocket' ? 'rocket-3' : pathname}`, {cache: 'no-store'});
  const bikes = await bikesRes.json();

  const getSubFamilies = (subFamilyObj: any) => {
    const subFamiliesArray = Object.keys(subFamilyObj).map(
      (key) => subFamilyObj[key]
    );

    return subFamiliesArray;
  };

  console.log(family[0].subFamilies);


  const filterBikesBySumFamilyCategory = (category: string) => {

    const filteredBikes = bikes.filter((bike:any) => bike.subFamilyCategory === category)

    return filteredBikes
  }

  return (
    <main className="slight-white-bg">
      <HeroSectionCTA
        image={family[0].configFamilyPageInfo.image.src}
        title={"Додајте аксесоари на вашиот мотор"}
        link={{
          text: "Види ги Сите",
          url: "/configure/bikes",
        }}
      />
      <section className="lg:pl-28 px-4 md:mt-16 mt-8">
        {getSubFamilies(family[0].subFamilies).map((subFam: any) => (
          <BikesByFamilyWithSlider
            key={subFam.subFamilyName}
            items={filterBikesBySumFamilyCategory(subFam.subFamilyName)}
            familyData={{
              title: subFam.title,
              desc: subFam.shortDesc ?? "",
              url: '',
            }}
          />
        ))}
      </section>
    </main>
  );
};

export default TypeOfFamilyPage;

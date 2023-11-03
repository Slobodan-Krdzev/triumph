import React from "react";
import { BIKES, FAMILIES } from "../constants/constants";
import { filterOutBikesByFamily } from "../helpers/filterBikesByFamily";
import MainBtn from "../components/MainBtn";
import HeroSectionCTA from "../components/HeroSectionCTA";
import BikesByFamilyWithSlider from "../components/BikesByFamilyWithSlider";
import { getBikesByFamily } from "../components/helpers/getBikesByFamily";

const ConfigurePage = async () => {
  // PROMISE.ALL sredi
  const familiesRes = await fetch(`${FAMILIES}`, { cache: "no-store" });
  const families = await familiesRes.json();

  // ovde revalidate ili no-cache treba da odlucime
  // mada eden motor bi se dodaval mnogu retko
  // revalidate e podobro
  const bikesRes = await fetch(`${BIKES}`, { cache: "no-cache" });
  const bikes = await bikesRes.json();

  console.log("familiesData", families);

  return (
    <main className="slight-white-bg ">
      <HeroSectionCTA
        image={"/images/heroConfigBanner.avif"}
        title={"Изберете додатоци за вашиот мотор"}
        link={{
          text: "Види ги сите",
          url: "/configure/bikes",
        }}
      />
      <section className="lg:pl-28 px-4 md:mt-16 mt-8">
        {families.map((family: any) => (
          <BikesByFamilyWithSlider
          key={family.id}
            bikes={getBikesByFamily(family.type,bikes)}
            familyData={{
              title: family.type,
              desc: family.configPageInfo.desc,
              url: family.configPageInfo.link,
            }}
          />
        ))}
      </section>
    </main>
  );
};

export default ConfigurePage;

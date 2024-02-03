import BikesByFamilyWithSlider from "@/app/components/BikesByFamilyWithSlider";
import HeroSectionCTA from "@/app/components/HeroSectionCTA";
import { getBikesBySubfamilyCategory } from "@/app/components/helpers/getBikesBySubfamilyCategory";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";
import React from "react";

type Props = {};

const TypeOfFamilyPage = async (data: any, props: Props) => {
  // OVDE TREBA DA PREVZEMIMI SUB FAMILIES

  let familyType = data.params.slug;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=${familyType}`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const family = familyData[0];

    const subFamiliesRes = await fetch(
      `${SUB_FAMILIES}?familyType=${familyType}`,
      {
        cache: "no-store",
      }
    );
    const subFamilies = await subFamiliesRes.json();

    const bikesRes = await fetch(
      `${BIKES}?category=${familyType === "rocket" ? "rocket-3" : familyType}`,
      { cache: "no-store" }
    );
    const bikes = await bikesRes.json();

    return (
      <main className="slight-white-bg">
        <HeroSectionCTA
          image={family.configFamilyPageInfo.image.src}
          title={"Додајте аксесоари на вашиот мотор"}
          link={{
            text: "Види ги Сите",
            url: "/configure/bikes",
          }}
        />
        <section className="lg:pl-28 px-4 md:mt-16 mt-8">
          {subFamilies.map((subFam: any) => (
            <BikesByFamilyWithSlider
              key={subFam.subFamilyName}
              items={getBikesBySubfamilyCategory(subFam.subFamilyName, bikes)}
              familyData={{
                title: subFam.title,
                desc: subFam.shortDesc ?? "",
                url: "",
              }}
            />
          ))}
        </section>
      </main>
    );
  } catch (err) {
    return redirect("/configure");
  }
};

export default TypeOfFamilyPage;

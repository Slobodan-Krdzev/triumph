import Card from "@/app/components/Card";
import HeroSectionCTA from "@/app/components/HeroSectionCTA";
import { BIKES } from "@/app/constants/constants";
import React from "react";

const ConfigTypeOfFamPage = async ({ params }: any) => {
  const bikesRes = await fetch(
    `${BIKES}?subFamilyCategory=${params.typeOfSubFamily}`,
    { next: { revalidate: 2000 } }
  );
  const bikes = await bikesRes.json();

  console.log("bikes od subfamily page", params.typeOfSubFamily);

  if (bikes) {
    return (
      <>
        <HeroSectionCTA
          image={`/images/${bikes[0].category === 'off-road' ? "offRoad" : bikes[0].category}/configSubFamilyBanner.avif`}
          title={"Додајте Аксесоари на вашиот мотор"}
          link={{
            text: "Види ги Сите",
            url: "/configure/bikes",
          }}
        />
        <section className="flex flex-wrap justify-center sm:justify-between md:justify-start gap-8 px-4 md:px-28 py-4 md:py-8 lg:py-16">
          {bikes.map((bike: any) => (
            <Card key={bike.id} item={bike} />
          ))}
        </section>
      </>
    );
  }
};

export default ConfigTypeOfFamPage;

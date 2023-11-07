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

  console.log("bikes od subfamily page", bikes[0].category);

  if (bikes) {
    return (
      <>
        <HeroSectionCTA
          image={`/images/${bikes[0].category}/configSubFamilyBanner.avif`}
          title={"Додајте Аксесоари на вашиот мотор"}
          link={{
            text: "Види ги Сите",
            url: "/configure/bikes",
          }}
        />
        <section className="flex flex-wrap md:justify-start gap-8 px-4 md:pt-16 md:pb-10 w-11/12 m-auto">
          {bikes.map((bike: any) => (
            <Card key={bike.id} item={bike} />
          ))}
        </section>
      </>
    );
  }
};

export default ConfigTypeOfFamPage;

import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import MainBtn from "@/app/components/MainBtn";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import { FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";
import React from "react";

const SpecsSportPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${query}`, {
      cache: "no-store",
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    return (
      <>
        <main className="py-4 md:py-8 lg:py-16 bg-white relative">
          <Breadcrumbs dark />

          <h1 className="uppercase text-4xl lg:text-6xl text-black text-center font-semibold">
            Спецификации
          </h1>
          <div className="flex justify-center py-4 md:py-8">
            <MainBtn
              text={"Види ги Моделите"}
              bgBlack={false}
              isLink={true}
              link={`/motorcycles/sport/${query}/models`}
            />
          </div>

          <SpecsTable specs={subFamily ?? []} />
        </main>
      </>
    );
  } catch (err) {
    return redirect(`/motorcycles/sport/${query}`)
  }
};

export default SpecsSportPage;

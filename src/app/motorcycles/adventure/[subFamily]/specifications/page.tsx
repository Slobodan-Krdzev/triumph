import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import MainBtn from "@/app/components/MainBtn";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import { SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";
import React from "react";

const SubFamilyStandardsPage = async ({ params }: any) => {

  const subFam = params.subFamily

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFam}`, {
      next: { revalidate: 3000 },
    })
    const subFamilyData = await subFamilyRes.json()
    const subFamily = subFamilyData[0]

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
              link={`/motorcycles/adventure/${subFam}/models`}
            />
          </div>

          <SpecsTable specs={subFamily}/>
        </main>
      </>
    );
  } catch (err) {
    return redirect(`/motorcycles/adventure/${subFam}`)
  }
};

export default SubFamilyStandardsPage;

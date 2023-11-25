import MainBtn from "@/app/components/MainBtn";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import React from "react";

const SubFamilyStandardsPage = async ({ params }: any) => {
  return (
    <>
      
      <main className="py-4 md:py-8 lg:py-16">
        <h1 className="uppercase text-4xl lg:text-6xl text-black text-center font-semibold">
          Спецификации
        </h1>
        <div className="flex justify-center py-4 md:py-8">
          <MainBtn
            text={"Види ги Моделите"}
            bgBlack={false}
            isLink={true}
            link={`/motorcycles/adventure/${params.subFamily}/models`}
          />
        </div>
        <SpecsTable />
      </main>
    </>
  );
};

export default SubFamilyStandardsPage;

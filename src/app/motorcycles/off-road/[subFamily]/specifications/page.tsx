import MainBtn from "@/app/components/MainBtn";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import { FAMILIES } from "@/app/constants/constants";

const SpecsSportPage = async ({ params }: any) => {
  try {
    const subFamilyRes = await fetch(`${FAMILIES}?type=off-road`, {
      cache: "no-store",
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    return (
      <>
        <main className="py-4 md:py-8 lg:py-16 bg-white">
          <h1 className="uppercase text-4xl lg:text-6xl text-black text-center font-semibold">
            Спецификации
          </h1>
          <div className="flex justify-center py-4 md:py-8">
            <MainBtn
              text={"Види ги Моделите"}
              bgBlack={false}
              isLink={true}
              link={`/motorcycles/off-road/${params.subFamily}/models`}
            />
          </div>

          <SpecsTable
            specs={
              subFamily.subFamilies[params.subFamily].subFamilyPageInfo
                .fullSpecs
            }
          />
        </main>
      </>
    );
  } catch (err) {
    console.log(err);
    return;
  }
};

export default SpecsSportPage;

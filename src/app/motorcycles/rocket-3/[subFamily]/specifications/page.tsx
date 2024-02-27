import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import MainBtn from "@/app/components/MainBtn";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const Rocket3SpecsPage = async () => {
  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=rocket-3`, {
      cache: "no-store",
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=rocket-3`, {
      cache: "no-store",
    });
    const bikesData = await bikesRes.json();

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
              link={`/motorcycles/classics/rocket-3/models`}
            />
          </div>

          <SpecsTable specs={subFamily ?? []} />

          <section className="py-4 md:py-16 my-4 md:my-16 text-center border-thin-gray">
            <SectionTitleH2 text={"Rocket-3 Модели"} color={"dark"} />
            <BikeListingNoSlider bikes={bikesData} configureLink={true} />
          </section>
        </main>
      </>
    );
  } catch (err) {
    return redirect(`/motorcycles/rocket-3`)

  }
};

export default Rocket3SpecsPage;

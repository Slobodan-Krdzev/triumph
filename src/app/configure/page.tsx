import { redirect } from "next/navigation";
import BikesByFamilyWithSlider from "../components/BikesByFamilyWithSlider";
import HeroSectionCTA from "../components/HeroSectionCTA";
import { getSufamiliesByFamilyType } from "../components/helpers/getSubfamiliesByFamilyType";
import { FAMILIES, SUB_FAMILIES } from "../constants/constants";

const ConfigurePage = async () => {
  // PROMISE.ALL sredi

  try {
    const familiesRes = await fetch(`${FAMILIES}`, {
      next: { revalidate: 3000 },
    });
    const families = await familiesRes.json();

    const subFamiliesRes = await fetch(`${SUB_FAMILIES}`, {
      next: { revalidate: 3000 },
    });
    const subFamilies = await subFamiliesRes.json();

    getSufamiliesByFamilyType("adventure", subFamilies);

    return (
      <>
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
              items={getSufamiliesByFamilyType(family.type, subFamilies)}
              familyData={{
                title: family.type,
                desc: family.configPageInfo?.desc ?? "",
                url: `/configure/families/${family.type}`,
              }}
            />
          ))}
        </section>
      </>
    );
  } catch (e) {
    return redirect("/");
  }
};

export default ConfigurePage;

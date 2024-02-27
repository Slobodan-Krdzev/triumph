import BikesListingSection from "@/app/components/BikesListingSection";
import BikesSorter from "@/app/components/BikesSorter";
import HeroSectionCTA from "@/app/components/HeroSectionCTA";
import { BIKES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const BikesPage = async () => {

  try {

    const bikesRes = await fetch(`${BIKES}`, { cache: 'no-store' });
    const bikes = await bikesRes.json();

    return (
      <>
        <HeroSectionCTA
          image={`/images/roadsters/configSubFamilyBanner.avif`}
          title={"Додајте Аксесоари на вашиот мотор"}
          link={{
            text: "Види ги Сите",
            url: "/configure/bikes",
          }}
          noBtn={true}
        />

        <section className="flex flex-col md:w-10/12 m-auto px-4 md:px-10 md:py-16 md:pb-10 py-4">
          <BikesSorter />
          <BikesListingSection bikes={bikes} />
        </section>
      </>
    );
  } catch {
    return redirect('/configure');
  }
};

export default BikesPage;

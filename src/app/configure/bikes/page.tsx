import BikesListingSection from "@/app/components/BikesListingSection";
import BikesSorter from "@/app/components/BikesSorter";
import Card from "@/app/components/Card";
import HeroSectionCTA from "@/app/components/HeroSectionCTA";
import PaginationBtn from "@/app/components/PaginationBtn";
import { BIKES } from "@/app/constants/constants";

const BikesPage = async ({ params, searchParams }: any) => {

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

        {/* <PaginationBtn /> */}
      </>
    );
  } catch {
    return "Error ";
  }
};

export default BikesPage;

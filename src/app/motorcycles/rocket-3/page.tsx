import MainBtn from "@/app/components/MainBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import PageTitle from "@/app/components/familiySharedComponents/PageTitle";

import React from "react";

const Rocket3Page = () => {
  return (
    <>
      <section
        style={{
          backgroundImage: `url('/images/rocket-3/heroBanner.avif')`,
          backgroundPosition: "center",
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          height: "80vh",
        }}
      >
        <div
          className="min-w-full lg:py-32 py-12 lg:px-20 px-4 flex items-center h-full"
          style={{
            backgroundColor: "rgba(0, 0, 0, 0.25)",
          }}
        >
          <div className="lg:w-2/5 text-white">
            <PageTitle text={"Rocket-3"} />

            <PageParagraph
              text={
                "Со најголемиот светски сериски мотор за мотоцикли, неспоредлив вртежен момент и уникатно прекрасно доминантно присуство, новиот Rocket 3 природно си бараше своја самостојна категорија. Претставувајќи ги врвните мускулни роудстери со високи перформанси, овие феноменални мотори се специјално создадени за возачи кои бараат апсолутна и врвна спецификација и 'best-in-class' мотор. "
              }
            />
            <div className="pt-4 md:mt-8">
              <MainBtn
                text={"Погледни ја серијата"}
                bgBlack={false}
                isLink={true}
                link="/motorcycles/rocket-3/rocket-3"
              />
            </div>
          </div>
        </div>
      </section>
    </>
  );
};

export default Rocket3Page;

import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import React from "react";

const Rocket3Page = () => {
  return (
    <>
      <section
        style={{
          backgroundImage: `url('/images/rocket/heroBanner.avif')`,
          backgroundPosition: "center",
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
        }}
      >
        <div className="min-w-full lg:py-32 py-12 lg:px-20 px-4" style={{
          backgroundColor: 'rgba(0, 0, 0, 0.25)'
        }}>
          <div className="lg:w-2/5 text-white">
            <h1 className="md:text-4xl text-2xl font-bold">ROCKET 3</h1>
            <PageParagraph
              text={
                "Со најголемиот светски сериски мотор за мотоцикли, неспоредлив вртежен момент и уникатно прекрасно доминантно присуство, новиот Rocket 3 природно си бараше своја самостојна категорија. Претставувајќи ги врвните мускулни роудстери со високи перформанси, овие феноменални мотори се специјално создадени за возачи кои бараат апсолутна и врвна спецификација и 'best-in-class' мотор. "
              }
            />
          </div>
        </div>
      </section>
    </>
  );
};

export default Rocket3Page;

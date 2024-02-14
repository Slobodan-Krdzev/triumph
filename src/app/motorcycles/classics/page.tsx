import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import StelthCarousell from "@/app/components/classicsPageComp/StelthCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { getBikesByEdition } from "@/app/components/helpers/getBikesByEdition";
import CardLinkItem from "@/app/components/homePageComponents/CardLinkItem";
import DiscoverThriumphCard from "@/app/components/homePageComponents/DiscoverThriumphCard";
import { FAMILIES, PROMOS, SUB_FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";
import { redirect } from "next/navigation";
import { getBikesByCC } from "./helpers/getBikesByCC";

const ClassicPage = async () => {
  try {
    const familyRes = await fetch(`${FAMILIES}?type=classics`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();

    const bikesRes = await fetch(`${SUB_FAMILIES}?familyType=classics`, {
      cache: "no-store",
    });
    const bikes = await bikesRes.json();

    const promosRes = await fetch(`${PROMOS}?category=classics`)
    const promos = await promosRes.json()

    return (
      <>
        <PageHeroSection
          title={`modern  ${familyData[0].type}`}
          video={familyData[0].familyPageBannerVideo}
        />

        <main className="bg-white">
          <section className="pt-16 lg:pt-32">
            <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
              <SectionTitleH2 text="400cc engine" color="dark" />
              <PageParagraph
                marginBot={true}
                text='"Speed ​​400" и "Scrambler 400 X", два сосема нови моторцикли доаѓаат во иконската палета на модерни класици на Triumph. Со карактерот и одзивот на новиот мотор од 400 кубици, прифатлива ергономија и високи спецификации, овие нови машини нудат врвни перформанси и самоуверено, агилно ракување.'
              />
            </div>
          </section>

          <section className="m-auto w-11/12 md:w-9/12">
            {/* type treba da e subFamily */}
            {getBikesByCC(400, bikes).map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.title ?? ""}
                desc={bike.shortDesc ?? ""}
                ctaBtn={{
                  text: "Детали",
                  link: `/motorcycles/classics/${bike.subFamilyName}`,
                }}
                image={{
                  src: bike.gallery.modelImage.src ?? "",
                  alt: bike.gallery.modelImage.alt ?? "",
                }}
                blackBtn={true}
              />
            ))}
          </section>

          <section className="pt-16 lg:pt-32">
            <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
              <SectionTitleH2 text="900cc engine" color="dark" />
              <PageParagraph
                marginBot={true}
                text='"Modern Classic 900 cc" серијата на Triumph обезбедува возбудливи перформанси и управување што инспирира самодоверба.'
              />
            </div>
          </section>

          <section className="flex flex-col md:flex-row md:px-8 px-4 md:gap-4">
            {getBikesByCC(900, bikes).map((bike: any) => (
              <CardLinkItem
                key={bike.id}
                title={bike.title ?? ""}
                image={bike.gallery.modelImage.src ?? ""}
                text={"Детали"}
                url={`/motorcycles/classics/${bike.subFamilyName}`}
                desc={bike.shortDesc ?? ""}
              />
            ))}
          </section>

          <section className="pt-16 lg:pt-32">
            <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
              <SectionTitleH2 text="1200cc engine" color="dark" />
              <PageParagraph
                marginBot={true}
                text="Уникатни двоцилиндрични, линиски мотоцикли со мотор од 1200 кубика од Triumph имаат свој уникатен, автентичен карактер и стил."
              />
            </div>
          </section>

          <section className="flex flex-wrap px-8">
            {getBikesByCC(1200, bikes).map((bike: any) => (
              <DiscoverThriumphCard
                key={bike.bikeId}
                desc={bike.shortDesc ?? ""}
                image={bike.gallery.modelImage.src ?? ""}
                title={bike.title ?? ''}
                url={`/motorcycles/${bike.familyType}/${bike.subFamilyName}`}
                btnText={"Детали"}
              />
            ))}
          </section>

          <section className="m-auto w-11/12 md:w-10/12">
            {promos.map((promo: PromoDataType, idx: number) => (
              <BikeInfoTextImageBtn
                key={promo.title}
                title={promo.title}
                desc={promo.desc}
                ctaBtn={{
                  text: "Детали",
                  link: `/motorcycles/classics/${promo.subFamilyType}`,
                }}
                image={{
                  src: promo.image,
                  alt: promo.title,
                }}
                blackBtn={promo.btnBlack}
                imageOnTheLeft={idx % 2 === 0 ? true : false}
              />
            ))}
          </section>

          <section className="lg:py-16 lg:px-8 flex flex-col ">
            <div className="text-center">
              <SectionTitleH2 text="Новата Stealth Серија" color="dark" />
            </div>
            
            <StelthCarousell bikes={getBikesByEdition("stealth", bikes)} />
          </section>

          <section className="my-8">
            <div className="text-center lg:w-2/4 w-full px-4 lg:px-0 m-auto">
              <SectionTitleH2 text="Chrome Колекција" color="dark" />
              <PageParagraph
                marginBot={true}
                text="Десет иконски мотори, секој од нив со прекрасен и уникатен нов хромиран дизајн, инспириран од класичниот изглед, прекрасно изведен од тимовите за дизајн и производство на Triumph. Оваа едноставно неверојатна палета од десет иконски мотоцикли Triumph во хром е прослава на рачно изработениот стил и традиција."
              />
              <SectionTitleH2
                text="Специјални - Рачно изработени - Прекрасни"
                color="dark"
              />
            </div>

            <BikeListingNoSlider bikes={getBikesByEdition("chrome", bikes)} />
          </section>

          {familyData[0].grayCaro && (
            <BottomCarousell items={familyData[0].grayCaro} />
          )}
        </main>

        
      </>
    );
  } catch (err) {
    return redirect("/");
  }
};

export default ClassicPage;

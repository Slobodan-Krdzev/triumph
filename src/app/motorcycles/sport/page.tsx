import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { createSubFamLinksForSecondary } from "@/app/components/helpers/createSubFamLinksForSecondary";
import { BIKES, FAMILIES, PROMOS, SUB_FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";
import { redirect } from "next/navigation";

const SportBikePage = async ({ params }: any) => {
  try {
    const familyRes = await fetch(`${FAMILIES}?type=sport`, {
      next: { revalidate: 30 },
    });
    const familyData = await familyRes.json();
    const family = familyData[0];

    const subFamiliesRes = await fetch(`${SUB_FAMILIES}?familyType=sport`, {
      next: { revalidate: 30 },
    });
    const subFamilies = await subFamiliesRes.json();

    const bikesRes = await fetch(`${BIKES}?category=sport`, {
      next: { revalidate: 30 },
    });
    const bikes = await bikesRes.json();

    const promosRes = await fetch(`${PROMOS}?category=sport`, {
      next: { revalidate: 30 },
    });
    const promos = await promosRes.json();

    return (
      <main className="bg-black">
        <SecondaryNavFamily
          items={createSubFamLinksForSecondary(subFamilies)}
          title={"sport"}
          configLink={"/configure"}
        />

        <HeroSection video={family?.familyPageBannerVideo ?? ""} bigTitle="Sport" mobileImage="/images/sport/famPageVideoPoster.avif"/>

        <section className="text-white text-center px-6 py-4 md:py-8 lg:py-16">
          <div className="lg:w-5/12 w-10/12 m-auto">
            <SectionTitleH2 text={"Играта Започнува"} color={"white"} />
            <p className="md:text-xl text-md mb-2">
              Динамична ДНК со нов карактер.
            </p>
            <p className="md:text-xl text-md mb-6">
              Агресивни линии, агилност и фокусирано спортско управување,
              подкрепено со возбудлива моќност од трицилиндричниот мотор
              доставува чувство на апсолутно уживање - новата Daytona 660 серија
              е спремна за секаков предизвик.
            </p>

            <h3 className="uppercase font-semibold tracking-tighter text-4xl">
              Вооспоставени Нови Правила!
            </h3>
          </div>
        </section>

        <section className="text-white px-4">
          {promos?.map((promo: PromoDataType, idx: number) => (
            <BikeInfoTextImageBtn
              key={`${promo.title},${idx}`}
              title={promo?.title ?? "Triumph Sport"}
              desc={promo?.desc ?? ""}
              ctaBtn={{
                text: "Детали",
                link: `/motorcycles/sport/${promo.subFamilyType}`,
              }}
              image={{
                src: `${promo?.image ?? "/images/triumphLogo.png"}`,
                alt: `${promo?.title ?? "Triumph Sport "}`,
              }}
              blackBtn={promo?.btnBlack ?? false}
              textWhite={true}
              imageOnTheLeft={idx % 2 !== 0 ? true : false}
              mobileTextRight={idx % 2 !== 0 ? true : false}
            />
          ))}
        </section>

        <section className="bg-white py-8 text-center px-4">
          <SectionTitleH2 text={"Новата Sport Серија"} color={"dark"} />
          <BikeListingNoSlider bikes={bikes ?? []} configureLink={true} />
        </section>

        <GrayBand
          itemOne={{
            text: "Контакт",
            url: "/dealer",
            icon: "/point.svg",
          }}
          itemTwo={{
            text: "КОНФИГУРАЦИЈА",
            url: `/configure`,
            icon: "/icon-configurator.svg",
          }}
        />
      </main>
    );
  } catch (err) {
    console.log(err);

    return redirect('/configure')
  }
};

export default SportBikePage;

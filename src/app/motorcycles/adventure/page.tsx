import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { createSubFamLinksForSecondary } from "@/app/components/helpers/createSubFamLinksForSecondary";
import { getBikesBySubfamilyCategory } from "@/app/components/helpers/getBikesBySubfamilyCategory";
import {
  BIKES,
  FAMILIES,
  PROMOS,
  SUB_FAMILIES,
} from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";
import { redirect } from "next/navigation";

const AdventurePage = async () => {
  try {
    const familyRes = await fetch(`${FAMILIES}?type=adventure`, {
      next: { revalidate: 30 },
    });

    if (!familyRes.ok) {
      throw new Error(`Failed to fetch: ${familyRes.statusText}`);
    }

    const familyData = await familyRes.json();

    const subFamiliesRes = await fetch(`${SUB_FAMILIES}?familyType=adventure`, {
      next: { revalidate: 30 },
    });

    if (!subFamiliesRes.ok) {
      throw new Error(`Failed to fetch: ${subFamiliesRes.statusText}`);
    }

    const subFamilies = await subFamiliesRes.json();

    const bikesRes = await fetch(`${BIKES}?category=adventure`, {
      cache: "no-store",
    });

    if (!bikesRes.ok) {
      throw new Error(`Failed to fetch: ${bikesRes.statusText}`);
    }
    const bikes = await bikesRes.json();

    const promosRes = await fetch(`${PROMOS}?category=adventure`, {
      cache: "no-store",
    });

    if (!promosRes.ok) {
      throw new Error(`Failed to fetch: ${promosRes.statusText}`);
    }
    const promos = await promosRes.json();

    return (
      <section className="relative white-bg">
        <SecondaryNavFamily
          items={createSubFamLinksForSecondary(subFamilies)}
          title={"Adventure"}
          configLink={"/configure"}
        />
        <PageHeroSection
          title={familyData[0].type}
          mainBikeLogo={familyData[0].mainBikeLogoImage}
          desc={familyData[0].familyPageBannerDesc}
          video={familyData[0].familyPageBannerVideo}
        />

        <section className="p-4 lg:p-28 ">
          <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center my-8 md:mb-16">
            <SectionTitleH2
              text="Најсериозните авантуристички моторцикли"
              color="dark"
            />
            <PageParagraph
              marginBot={true}
              text="Искусете го светот на авантурите, со мотори кои се спремни за долги патувања"
            />
            <PageParagraph text="Без разлика на дистанцата, без разлика на големината на предизвикот, Tiger серијата е спремна за било какви препреки кои стојат до вашата цел." />
          </div>

          <TextAndImageFlexSection
            title={"Направен за Авантури"}
            textMain={
              "Секој моторцикл во 'Tigеr' фамилијата е роден со вистински дух за авантура. 'Triumph Tiger' моторциклот живее во нашата крв од моментот кога првиот 'Triumph Tiger' моторцикл освои три златни медали на '1936 International Six Days Trial' во 1936 година, и со тоа започна првото поглавје од најдолготрајниот авантуристички моторцикл."
            }
            textSecondary={
              "Познато по нивното агилно управување, командна позиција на возење, карактеристична силуета и опрема со високи спецификации, секој 'Tiger' моторцикл нуди највисоко ниво на стил, удобност и контрола."
            }
            image={{
              src: "/images/adventure/firstSectionImage.avif",
              alt: "Adventure Bikes",
            }}
          />

          <section className="py-4 lg:py-10">
            <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
              <SectionTitleH2 text="Tiger 900 Серија" color="dark" />
              <p className="uppercase ">Што би одбрале вие ?</p>
            </div>

            <BikeListingNoSlider
              bikes={getBikesBySubfamilyCategory("tiger-900", bikes)}
              configureLink={true}
            />
          </section>

          {promos.map((promo: PromoDataType, idx: number) => (
            <BikeInfoTextImageBtn
              key={promo?.id ?? idx}
              title={promo?.title ?? "Triumph"}
              desc={promo?.desc ?? "Triumph"}
              ctaBtn={{
                text: "Детали",
                link: `/motorcycles/adventure/${promo?.subFamilyType}`,
              }}
              image={{
                src: `${promo.image}`,
                alt: `${promo.title}`,
              }}
              blackBtn={promo?.btnBlack ?? false}
              imageOnTheLeft={idx % 2 === 0 ? true : false}
              mobileTextRight={idx % 2 === 0 ? true : false}
            />
          ))}
        </section>
        <GrayBand
          itemOne={{
            text: "Контакт",
            url: "/dealer",
            icon: "/point.svg",
          }}
          itemTwo={{
            text: "Конфигурација",
            url: "/configure",
            icon: "/bike.svg",
          }}
        />
      </section>
    );
  } catch (e) {
    // redirect("/configure");
    console.log(e);
    
    return <>Some Error Ocured During Fetch</>
  }
};

export default AdventurePage;

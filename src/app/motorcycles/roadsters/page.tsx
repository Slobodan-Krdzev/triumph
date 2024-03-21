import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { createSubFamLinksForSecondary } from "@/app/components/helpers/createSubFamLinksForSecondary";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
import { FAMILIES, PROMOS, SUB_FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";
import { redirect } from "next/navigation";

const RoadstersPage = async () => {

  try {
    const familyRes = await fetch(`${FAMILIES}?type=roadsters`, {
      next: { revalidate: 3000 },
    });
    const familyData = await familyRes.json();

    const subFamiliesRes = await fetch(`${SUB_FAMILIES}?familyType=roadsters`, {
      next: { revalidate: 3000 },
    })
    const subFamilies = await subFamiliesRes.json()

    const promosRes = await fetch(`${PROMOS}?category=roadsters`, {
      next: { revalidate: 3000 },
    });
    const promos = await promosRes.json();

    return (
      <>
      <SecondaryNavFamily items={createSubFamLinksForSecondary(subFamilies)} title={"Roadsters"} configLink={"/configure"} />

        <PageHeroSection
          title={"roadsters"}
          desc={familyData[0].familyPageBannerDesc ?? ""}
          video={familyData[0].familyPageBannerVideo ?? ""}
        />

        <main className="py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-9/12">
          <TextAndImageFlexSection
            imageLeft={false}
            title={"Генерацискиот Трицилиндричен Мотор"}
            textMain={
              "Моторите на Speed ​​​​Triple и Street Triple се водечки во класата, со карактер и перформанси кои во 1994 година го одбележаа раѓањето на фабричките „streetfighters“ и го создадоа првиот „naked-spotsbike“. Досега најдобро изработени 3-цилиндрични мотори на Triumph се повеќе еволуираат, со експлозивен вртежен момент од почеток до црвено, што обезбедува моментален моментум и врвно забрзување."
            }
            image={{
              src: "/images/roadsters/promoРoadsters.avif",
              alt: "Генерацискиот Трицилиндричен Мотор",
            }}
          />

          {promos.map((promo: PromoDataType, idx: number) => (
            <BikeInfoTextImageBtn
              key={`${promo.title},${idx}`}
              title={promo.title}
              desc={promo.desc}
              ctaBtn={{
                text: "Детали",
                link: `/motorcycles/roadsters/${promo.subFamilyType}`,
              }}
              image={{
                src: `${promo.image}`,
                alt: `${promo.title}`,
              }}
              blackBtn={promo.btnBlack}
              imageOnTheLeft={idx % 2 === 0 ? true : false}
              mobileTextRight={idx % 2 === 0 ? true : false}
            />
          ))}

          <TextAndImageFlexSection
            imageLeft={true}
            title={"Вистински Хулиган"}
            textMain={
              "Во 1994 година, Triumph претстави мотоцикл кој лансираше нова категорија, ги дефинираше неговите спецификации и му даде живот на терминот „фабрички streetfighter“. Агресивен, агилен и моќен, тоа беше оригиналниот Triumph Speed ​​​​Triple што ја промени играта засекогаш."
            }
            textSecondary="Speed ​​Triple беше сакан од безброј мотоциклисти од целиот свет, кои му го дадоа прекарот „оригиналниот хулиган“ кој се разви во модерна легенда. Speed ​​Triple постојано се развива, но веднаш упаѓа во очи со своите препознатливи двојни фарови и импозантна рамка која го опфаќа трицилиндричниот Triumph мотор со голема зафатнина. Speed Triple понудува совршен баланс на моќ, управување, функција и карактер. Тоа беше најкомплетниот naked-bike со високи перформанси."
            image={{
              src: "/images/roadsters/hooligan.avif",
              alt: "Вистински Хулиган",
            }}
          />
        </main>

        <AudioSection
          model="Speed ​​Triple 765"
          logo={familyData[0].audioSection.audio.logo}
          audio={familyData[0].audioSection.audio}
          title={familyData[0].audioSection.title}
          desc={familyData[0].audioSection.desc}
        />
      </>
    );
  } catch {}
  return redirect(`/configure`)
};

export default RoadstersPage;


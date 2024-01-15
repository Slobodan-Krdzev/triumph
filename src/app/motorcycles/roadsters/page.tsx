import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { formSecondaryNavItems } from "@/app/components/helpers/formSecondaryNavItems";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
import SecondaryNavBar, { SecondaryNavItemsType } from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";
import React from "react";

const RoadstersPage = async () => {
  const handleLink = (link: string, query: string) => {
    if (link.includes(query)) {
      return true;
    }

    return false;
  };

  try {
    const familyRes = await fetch(`${FAMILIES}?type=roadsters`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();


    return (
      <>
      <SecondaryNavFamily items={formSecondaryNavItems(familyData[0].subFamilies, 'roadsters')} title={"Roadsters"} configLink={"/configure"} />

        <PageHeroSection
          title={"Roadsters"}
          desc={familyData[0].familyPageBannerDesc ?? ""}
          video={familyData[0].familyPageBannerVideo ?? ""}
        />

        <main className="p-4 lg:p-28 bg-white">
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

          {familyData[0].promo.map((item: PromoDataType, idx: number) => (
            <BikeInfoTextImageBtn
              key={`${item.title},${idx}`}
              title={item.title}
              desc={item.desc}
              ctaBtn={{
                text: "Детали",
                link: handleLink(item.subFamilyType, "for-the-ride")
                  ? item.subFamilyType
                  : `/motorcycles/roadsters/${item.subFamilyType}`,
              }}
              image={{
                src: `${item.image}`,
                alt: `${item.title}`,
              }}
              blackBtn={item.btnBlack}
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
  return "err";
};

export default RoadstersPage;

// {
//   "title": "ТРЕТА ГЕНЕРАЦИЈА 3-ЦИЛИНДРИЧНИ МОТОРИ",
//   "subFamilyType": "tiger-1200-rally",
//   "desc": "Погонските единици на Speed Triple ја менуваат играта и се лидери во класата, благодарејки на својот специфичен карактер и перформанси кои во 1994 година ги поставија темелите на 'streetfighter' моторите како и 'naked sportsbike' моторите. Сето ова резултира во тоа да во денешно време Triumph ги изработува најдобрите 3-цилиндрични мотори, со експлозивен обртен момент од старт па се до црвено со притоа инстантна респонзивност и одлично забрзување",
//   "image": "/images/roadsters/roadstersPromoTiger1200Rally.avif",
//   "btnBlack": false
// },

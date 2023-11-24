import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
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

    console.log(familyData[0].promo);

    return (
      <>
        <PageHeroSection
          title={"Roadsters"}
          desc={familyData[0].shortDesc}
          video={familyData[0].familyPageBannerVideo}
        />

        <main className="p-4 lg:p-28 bg-white">
          <TextAndImageFlexSection
            imageLeft={true}
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

        {/* <section className="lg:px-8 px-4">
          <BikeInfoTextImageBtn
            key={bikes[0].bikeId}
            price={bikes[0].price}
            title={bikes[0].familyPageInfo.title}
            desc={bikes[0].familyPageInfo.desc}
            ctaBtn={{
              text: bikes[0].familyPageInfo.link.text,
              link: bikes[0].familyPageInfo.link.url,
            }}
            image={{
              src: bikes[0].familyPageInfo.image.src,
              alt: bikes[0].familyPageInfo.image.alt,
            }}
            blackBtn={bikes[0].familyPageInfo.blackBtn}
            imageOnTheLeft={bikes[0].familyPageInfo.imageOnTheLeft}
            mobileTextRight={bikes[0].familyPageInfo.mobileTextRight}
          />
        </section>
  
        <section className="lg:px-8 px-4">
          <TextAndImageFlexSection
            imageLeft={true}
            title={"Генерацискиот Трицилиндричен Мотор"}
            textMain={
              "Моторите на Speed ​​​​Triple и Street Triple се водечки во класата, со карактер и перформанси кои во 1994 година го одбележаа раѓањето на фабричките „streetfighters“ и го создадоа првиот „naked-spotsbike“. Досега најдобро изработени 3-цилиндрични мотори на Triumph се повеќе еволуираат, со експлозивен вртежен момент од почеток до црвено, што обезбедува моментален моментум и врвно забрзување."
            }
            image={{
              src: "/images/roadsters/promoРoadsters.avif",
              alt: "Генерацискиот Трицилиндричен Мотор",
            }}
          />
        </section>
  
        <section className="lg:px-8 px-4">
          <BikeInfoTextImageBtn
            key={bikes[1].bikeId}
            price={bikes[1].price}
            title={bikes[1].familyPageInfo.title}
            desc={bikes[1].familyPageInfo.desc}
            ctaBtn={{
              text: bikes[1].familyPageInfo.link.text,
              link: bikes[1].familyPageInfo.link.url,
            }}
            image={{
              src: bikes[1].familyPageInfo.image.src,
              alt: bikes[1].familyPageInfo.image.alt,
            }}
            blackBtn={bikes[1].familyPageInfo.blackBtn}
            imageOnTheLeft={bikes[1].familyPageInfo.imageOnTheLeft}
            mobileTextRight={true}
  
          />
        </section>
  
        <section className="lg:px-8 px-4">
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
        </section>
  
        <section>
          {bikes.slice(2).map((bike:any) =>  <BikeInfoTextImageBtn
            key={bike.bikeId}
            price={bike.price}
            title={bike.familyPageInfo.title}
            desc={bike.familyPageInfo.desc}
            ctaBtn={{
              text: bike.familyPageInfo.link.text,
              link: bike.familyPageInfo.link.url,
            }}
            image={{
              src: bike.familyPageInfo.image.src,
              alt: bike.familyPageInfo.image.alt,
            }}
            blackBtn={bike.familyPageInfo.blackBtn}
            imageOnTheLeft={bike.familyPageInfo.imageOnTheLeft}
          />)}
        </section>
  
        <section>
        <BikeInfoTextImageBtn
            title={"3-цилиндричен MOTO2™ мотор"}
            desc={"Постојаната потрага по квалитет не доведе до оваа неспоредлива палета на нови 'Street Bikes' кои изобилуваат со моќ, врвни перформанси и функционалност. Резултатот е најнапредната палета на 'naked bikes' што некогаш сме ја направиле, дизајнирани да бидат забавни за возење на пат и патека. Возбудувања и забава на патот и на патеката."}
            ctaBtn={{
              text: 'Истражи повеќе',
              link: '/for-ther-ride/racing/moto2/engine',
            }}
            image={{
              src: '/images/roadsters/moto2.avif',
              alt: "Moto 2 Motor",
            }}
            blackBtn={false}
            imageOnTheLeft={true}
          />
        </section> */}

        <AudioSection />
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

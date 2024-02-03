import MainBtn from "../components/MainBtn";
import SecondaryPagesHeroSection from "../components/SubFamily/SecondaryPagesHeroSection";
import TitleWithLineThrough from "../components/TitleWithLineThrough";
import BikeInfoTextImageBtn from "../components/familiySharedComponents/BikeInfoTextImageBtn";
import ListAndImageFlexSection from "../components/familiySharedComponents/ListAndImageFlexSection";
import CardLinkItem from "../components/homePageComponents/CardLinkItem";

export const listItem: string[] = [
  "Транспарентни Цени за Сервис",
  "Проверка на состојбата на вашиот мотор",
  "Надоградување на Софтвер",
  "Повлекување на мотор поради безбедносни причини",
  "Специјализирани Triumph Техничари",
  "Редовни Надградби",
  "Алетрнативни решенија додека вашиот мотор е на сервис",
  "Оригинални Triumph делови и аксесоари",
];

const OwnersPage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/owners/ownersHeroBanner.avif"}
        text={`Triumph сопственици`}
        subText="Ние правиме апсолутно се што е можно за нашите Triumph пријатели да уживаат во возачкото искуство, затоа секогаш сме на располагање кога е време за сервис или подршка во било кое поле."
      />

      <main className="bg-white pt-4 md:pt-8 lg:pt-16">
        <TitleWithLineThrough text="Сервис" />

        <section className="py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-9/12">
          <BikeInfoTextImageBtn
            title={"Овластен Сервис"}
            desc={
              "Одбирајки да го сервисирате вашиот мотор во овластен Triumph сервис значи дека сте одбрале вашиот мотор да биде сервисиран од страна на профисионални техничари кои ќе направат се за вашиот мотор да работи беспрекорно и вие како возач да се чувствувате безбедни и полни со самодоверба."
            }
            ctaBtn={{
              text: "Овластен Сервис",
              link: "/dealer",
            }}
            image={{
              src: "/images/owners/servicePromo.avif",
              alt: "Service",
            }}
            blackBtn={false}
          />
        </section>

        <TitleWithLineThrough text="Ваш Triumph" />

        <section className="pb-4 md:pb-8 lg:pb-16 m-auto w-11/12 md:w-9/12">
          <BikeInfoTextImageBtn
            desc={
              "Во процесот на дизајнирање и изработување на еден мотор, ние се грижиме да го испорачаме најдоброто не само кај моторот туку и за сервисни алат, аксесоари и пакети кои ќе ви асистираат кога и да ви затребат како и дополнителни аксесоари кои ќе се грижат вашиот мотор да изгледа безпрекорно во секој момент."
            }
            ctaBtn={{
              text: "Вашиот Triumph",
              link: "/owners/your-triumph",
            }}
            image={{
              src: "/images/owners/bottomPromo1.avif",
              alt: "Service",
            }}
            blackBtn={false}
            imageOnTheLeft
          />

          <div></div>
        </section>

        <section className="pb-4 md:pb-8 lg:pb-16 m-auto w-11/12 md:w-9/12 flex flex-col md:flex-row justify-center gap-4 md:gap-16 lg:gap-24">
          <CardLinkItem
            title={"24-Месеци Гаранција"}
            image={"/images/owners/ownersWarranty.avif"}
            text={"Бидете спокојни и возете повеќе"}
            url={
              "https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto/sitecoremedialibrary/media-library/files/central-marketing-team/triumph%20warranty%20tcs/warranty_tandc_en_2021.pdf?_gl=1*gnb13*_ga*Mjk5MzMyMjE0LjE2OTYzNTc2MTE.*_ga_2YJFH6KBX6*MTcwNjU1NDM0Mi4xOTMuMS4xNzA2NTU2MDQ1LjYwLjAuMA.."
            }
          />
          <CardLinkItem
            title={"Овластен Сервис"}
            image={"/images/owners/service.avif"}
            text={"Triumph овластените сервиси се тука за вас"}
            url={"/dealer"}
          />
        </section>

        <section className="m-auto w-11/12 md:w-9/12 pb-4 md:pb-8 lg:pb-16">
          <ListAndImageFlexSection
            listItems={listItem}
            imageLeft
            title="Нашето Ветување до Вас"
            video="https://www.youtube.com/embed/qInvA551o2A"
          />
        </section>

        <section className="text-center m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16">
          <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-8/12 m-auto pb-4 mb-4">
            Контакт
          </h2>
          <p className="text-xl md:text-1xl font-semibold uppercase mb-8 m-auto w-11/12 md:w-6/12 text-center">
            Контактирајте не и дознајте повеќе.
          </p>
          <MainBtn
            text={"Контакт"}
            bgBlack={false}
            isLink={true}
            link={`/dealer`}
          />
        </section>
      </main>
    </>
  );
};

export default OwnersPage;

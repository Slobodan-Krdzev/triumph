"use client";
import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { useParams, usePathname } from "next/navigation";

export default function SubFamilyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
  const pathname = usePathname();
  const params = useParams();

  const path = pathname.split("/").slice(1, 3).join("/");

  const secondaryNavItems = [
    {
      text: "Преглед",
      link: `/${path}/${params.subFamily}`,
    },
    {
      text: "Модели",
      link: `/${path}/${params.subFamily}/models`,
    },
    {
      text: "Спецификации",
      link: `/${path}/${params.subFamily}/specifications`,
    },
    {
      text: "Аксесоари",
      link: `/${path}/${params.subFamily}/accessories`,
    },
    {
      text: "World Class Support",
      link: `/motorcycles/off-road/world-class-support`,
    },
    {
      text: "Облека",
      link: `/motorcycles/off-road/competition-clothing`,
    },
  ];

  return (
    <section>
      <SecondaryNavFamily
        items={secondaryNavItems}
        title={formulateSubFamilyTitleOnBanner(params.subFamily.toString())}
        configLink={`/configure/bikes/${params.subFamily}`}
      />

      {children}

      <div className="m-auto w-11/12 md:w-8/12 lg:w-6/12 py-8 md:py-16 flex flex-col gap-4">
        <p className="text-sm">
          Внимание! Видеата и фотографиите се направени од професионалци во
          контолирана средина. Ве Моливе не побувајте самите. Секогаш возете на
          затоврена патека. Секогаш носете кацига, очила, и заштитна опрема
          додека возите.
        </p>
        <p className="text-sm">
          Видеата и фотографиите се креирани само за забава не треба да се
          користат како инструкции.
        </p>
        <p className="text-sm">
          Ние во Triumph сакаме секој возач да биде сигурен и да ужива. Секојаш
          возете безбедно и во склоп на вашите можност. Посетете некој курс за
          возење и никогаш не влегувајте во ризик. Не возете под дејство на
          алкохол. Секогаш проверете го вашиот Triumph мотор пред да возите.
        </p>
      </div>
      <GrayBand
        itemOne={{
          text: "Конфигурација",
          url: `/configure`,
          icon: "/icon-configurator.svg",
        }}
        itemTwo={{
          text: "Тест Возење",
          url: "/",
          icon: "/bike.svg",
        }}
      />
    </section>
  );
}

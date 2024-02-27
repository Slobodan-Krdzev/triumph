"use client";
import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { useParams, usePathname } from "next/navigation";

export default function SubFamilyLayout({
  children, 
}: {
  children: React.ReactNode;
}) {

  const pathname = usePathname();
  const params = useParams();

  const path = pathname.split("/").slice(1, 3).join("/");
  const tiger1200Path = Boolean(pathname.split("/")[3] === 'tiger-1200-gt' || pathname.split("/")[3] === 'tiger-1200-rally')

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
      text: "Детали",
      link: `/${path}/${params.subFamily}/reasons-to-ride`,
    },
    {
      text: "Аксесоари",
      link: `/${path}/${params.subFamily}/accessories`,
    },
  ];


  return (
    <section>

      {
      /* {breakpoint >= 1024 && (
        <SecondaryNavBar
          items={secondaryNavItems}
          title={formulateSubFamilyTitleOnBanner(tiger1200Path ? 'Tiger 1200' : params.subFamily.toString())}
          configurationLink={`/configure/bikes/${params.subFamily}`}
        />
      )}

      {breakpoint < 1024 && (
        <MobileSecondaryNav
          items={secondaryNavItems}
          title={formulateSubFamilyTitleOnBanner(formulateSubFamilyTitleOnBanner(tiger1200Path ? 'Tiger 1200' : params.subFamily.toString()))}
          configurationLink={`/configure/bikes/${params.subFamily}`}
        />
      )} */}
      <SecondaryNavFamily items={secondaryNavItems} title={formulateSubFamilyTitleOnBanner(formulateSubFamilyTitleOnBanner(tiger1200Path ? 'Tiger 1200' : params.subFamily.toString()))} configLink={`/configure/bikes/${params.subFamily}`} />

      {children}
      <GrayBand
        itemOne={{
          text: "Контакт",
          url: "/dealers/dealer-search",
          icon: "/pin.svg",
        }}
        itemTwo={{
          text: "КОНФИГУРАЦИЈА",
          url: `/configure`,
          icon: "/icon-configurator.svg",
        }}
      />
    </section>
  );
}

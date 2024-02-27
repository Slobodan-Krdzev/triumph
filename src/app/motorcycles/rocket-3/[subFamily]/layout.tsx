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
      <SecondaryNavFamily
        items={secondaryNavItems}
        title={formulateSubFamilyTitleOnBanner(params.subFamily.toString())}
        configLink={`/configure/bikes/${params.subFamily}`}
      />
      {children}
      <GrayBand
        itemOne={{
          text: "Конфигурации",
          url: "/configure",
          icon: "/icon-configurator.svg",
        }}
        itemTwo={{
          text: "Контакт",
          url: "/dealers/dealer-search",
          icon: "/pin.svg",
        }}
      />
    </section>
  );
}

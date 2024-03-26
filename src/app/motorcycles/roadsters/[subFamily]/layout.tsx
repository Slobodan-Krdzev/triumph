"use client";
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
    }
  ];

  console.log(pathname);
  

  return (
    <section>
      <SecondaryNavFamily
        items={params.subFamily === "trident-660" ? [...secondaryNavItems, {text: "Trident Tribute Edition", link: `/${path}/${params.subFamily}/trident-tribute-edition`}] : secondaryNavItems}
        title={formulateSubFamilyTitleOnBanner(params.subFamily.toString())}
        configLink={`/configure/bikes/${params.subFamily}`}
      />

      {children}
    </section>
  );
}

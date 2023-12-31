"use client";
import { useBreakpoint } from "@/app/components/helpers/useBreakpoint";
import MobileSecondaryNav from "@/app/components/whiteSecondaryNavBar/MobileSecondary/MobileSecondaryNav";
import SecondaryNavBar from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";
import { useParams, usePathname, useRouter } from "next/navigation";

export default function SubFamilyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
  const breakpoint = useBreakpoint();

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
      text: "Зошто треба да ја одберете!",
      link: `/${path}/${params.subFamily}/reasons-to-ride`,
    },
    {
      text: "Аксесоари",
      link: `/${path}/${params.subFamily}/accessories`,
    }
  ];

  return (
    <section>
      {breakpoint >= 1024 && (
        <SecondaryNavBar
          items={secondaryNavItems}
          title={params.subFamily}
          configurationLink={`/configure/bike/${params.subFamily}`}
        />
      )}

      {breakpoint < 1024 && (
        <MobileSecondaryNav
          items={secondaryNavItems}
          title={params.subFamily}
          configurationLink={`/configure/bike/${params.subFamily}`}
        />
      )}

      {children}
    </section>
  );
}

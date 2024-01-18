"use client";
import GrayBand from "@/app/components/GrayBand";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
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

  const secondaryNavItems = [{
    text: "Преглед",
    link: `/motorcycles/off-road`,
  },
  {
    text: "Аксесоари",
    link: `/motorcycles/off-road/tf-250-x/accessories`,
  },
  {
    text: "World Class SSupport",
    link: `/motorcycles/off-road/world-class-support`,
  }]

  return (
    <section>
      {breakpoint >= 1024 && (
        <SecondaryNavBar
          items={secondaryNavItems}
          title={'Тркачка Опрема'}
          configurationLink={`/configure`}
        />
      )}

      {breakpoint < 1024 && (
        <MobileSecondaryNav
          items={secondaryNavItems}
          title={'Тркачка Опрема'}
          configurationLink={`/configure`}
        />
      )}

      {children}
    
    </section>
  );
}

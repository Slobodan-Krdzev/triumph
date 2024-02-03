
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

  const secondaryNavItems = [
    {
      text: "Преглед",
      link: `/owners`,
    },
    {
      text: "Вашиот Triumph",
      link: `/owners/your-triumph`,
    }]

  return (
    <section>
      {breakpoint >= 1024 && (
        <SecondaryNavBar
          items={secondaryNavItems}
          title={'Сопственици'}
          configurationLink={`/configure`}
        />
      )}

      {breakpoint < 1024 && (
        <MobileSecondaryNav
          items={secondaryNavItems}
          title={'Сопственици'}
          configurationLink={`/configure`}
        />
      )}

      {children}
      <GrayBand
        itemOne={{
          text: "Контакт",
          url: "/dealer",
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

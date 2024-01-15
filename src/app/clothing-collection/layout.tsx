"use client";
import { useBreakpoint } from "@/app/components/helpers/useBreakpoint";
import MobileSecondaryNav from "@/app/components/whiteSecondaryNavBar/MobileSecondary/MobileSecondaryNav";
import SecondaryNavBar from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";

export default function SubFamilyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
  const breakpoint = useBreakpoint();

  const navItems = [
    {
      text: "Откриј Повеќе",
      link: `/clothing-collection`,
    },
    {
      text: "„Casual“ Колекција",
      link: `/clothing-collection/casual`,
    },
    {
      text: "„Motorcycle“ Колекција",
      link: `/clothing-collection/motorcycle`,
    },
    {
      text: "Есенцијална Облека за Возење",
      link: `/clothing-collection/riding-essentials`,
    }
  ];

  return (
    <section>
      {breakpoint >= 1024 && (
        <SecondaryNavBar
          items={navItems}
          title={'Облека'}
        />
      )}

      {breakpoint < 1024 && (
        <MobileSecondaryNav
          items={navItems}
          title={'Облека'}
        />
      )}

      {children}
    </section>
  );
}

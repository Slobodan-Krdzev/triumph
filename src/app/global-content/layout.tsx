'use client'
import { useBreakpoint } from "../components/helpers/useBreakpoint";
import MobileSecondaryNav from "../components/whiteSecondaryNavBar/MobileSecondary/MobileSecondaryNav";
import SecondaryNavBar, { SecondaryNavItemsType } from "../components/whiteSecondaryNavBar/SecondaryNavBar";


const secondaryNavItems: SecondaryNavItemsType[] = [{
    text: "SITE TERMS AND CONDITIONS ",
    link: "/global-content/terms-and-conditions"
},
{
    text: "Privacy Policy",
    link: "/global-content/privacy-policies"
}]

export default function PrivacyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
    const breakpoint = useBreakpoint();
  
    return (
      <section>
        {breakpoint >= 1024 && (
          <SecondaryNavBar
            items={secondaryNavItems}
            title={"Privacy"}
          />
        )}
  
        {breakpoint < 1024 && (
          <MobileSecondaryNav
            items={secondaryNavItems}
            title={"Privacy"}
          />
        )}
  
        {children}
      </section>
    );
}

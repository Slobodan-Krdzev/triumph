"use client";
import SecondaryNavFamily from "../components/SecondaryNavFamily";
import { SecondaryNavItemsType } from "../components/whiteSecondaryNavBar/SecondaryNavBar";

const secondaryNavItems: SecondaryNavItemsType[] = [
  {
    text: "SITE TERMS AND CONDITIONS ",
    link: "/global-content/terms-and-conditions",
  },
  {
    text: "Privacy Policy",
    link: "/global-content/privacy-policies",
  },
];

export default function PrivacyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
  return (
    <section>
      <SecondaryNavFamily items={secondaryNavItems} title={"Privacy"} />

      {children}
    </section>
  );
}

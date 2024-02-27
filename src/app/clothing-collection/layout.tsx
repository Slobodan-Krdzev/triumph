import SecondaryNavFamily from "../components/SecondaryNavFamily";

export default function SubFamilyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
  const navItems = [
    {
      text: "Откриј Повеќе",
      link: `/clothing-collection`,
    },
    {
      text: "Casual Колекција",
      link: `/clothing-collection/casual`,
    },
    {
      text: "Motorcycle Колекција",
      link: `/clothing-collection/motorcycle`,
    },
    {
      text: "Есенцијална Облека за Возење",
      link: `/clothing-collection/riding-essentials`,
    },
  ];

  return (
    <section>
      <SecondaryNavFamily items={navItems} title={"Облека"} />
      {children}
    </section>
  );
}

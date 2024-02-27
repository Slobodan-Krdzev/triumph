import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "../components/SecondaryNavFamily";

export default function SubFamilyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
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
      <SecondaryNavFamily
        items={secondaryNavItems}
        title={'Сопственици'}
        configLink={`/configure`}
      />

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

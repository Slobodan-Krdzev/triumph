import GrayBand from "@/app/components/GrayBand";

export default function SubFamilyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
  return (
    <section>
      {children}
      <GrayBand
        itemOne={{
          text: "Контакт",
          url: "/dealers/dealer-search",
          icon: "/pin.svg",
        }}
        itemTwo={{
          text: "КОНФИГУРАЦИЈА",
          url: `/configure/families/roadsters`,
          icon: "/icon-configurator.svg",
        }}
      />
    </section>
  );
}

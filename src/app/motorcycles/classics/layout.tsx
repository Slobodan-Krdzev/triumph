import GrayBand from "@/app/components/GrayBand";

export default function SubFamilyLayout({
  children, // will be a page or nested layout
}: {
  children: React.ReactNode;
}) {
  return (
    <>
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
    </>
  );
}

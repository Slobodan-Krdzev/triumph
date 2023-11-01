import BottomFoot from "./BottomFoot";
import FooterList from "./DescktopFooterList";

const footerLists = [
  {
    title: "Моторцикли",
    items: [
      {
        id: 1,
        url: "/motorcycles/adventure",
        text: "Adventure",
      },
      {
        id: 2,
        url: "/motorcycles/adventure",
        text: "Classic",
      },
      {
        id: 3,
        url: "/motorcycles/adventure",
        text: "Roadster",
      },
      {
        id: 4,
        url: "/motorcycles/adventure",
        text: "Rocket-3",
      },
      {
        id: 5,
        url: "/latest-offers",
        text: "Понуди",
      },
      {
        id: 6,
        url: "/approved-triumph-pre-owned-motorcycles",
        text: "Користени",
      },
    ],
  },
  {
    title: "Стартувај",
    items: [
      {
        id: 6,
        url: "/configuration",
        text: "Конфигурирај",
      },
      {
        id: 7,
        url: "/dealer/dealer-search",
        text: "Најди Дилер / Контакт",
      },
    ],
  },
  {
    title: '"For the ride"',
    items: [
      {
        id: 8,
        url: "/for-the-ride",
        text: "Новости",
      },
      {
        id: 9,
        url: "/for-the-ride/experiences/factory-visitor-experience",
        text: "Доживувања",
      },
      {
        id: 10,
        url: "/carrers",
        text: "Кариери",
      },
    ],
  },
  {
    title: "За Сопственици",
    items: [
      {
        id: 11,
        url: "/owners/my-triumph-app",
        text: 'Мојата "Triumph" апликација',
      },
      {
        id: 12,
        url: "/owners/what3words",
        text: '"what3words"',
      },
      {
        id: 13,
        url: "/owners",
        text: 'Tvojot "Triumph"',
      },
    ],
  },
];

const DesktopFooter = () => {
  return (
    <div className="px-8 border-t-2 border-t-zinc-600 pt-16">
      <div className="flex ">
        {footerLists.map((list) => (
          <FooterList key={list.title} title={list.title} items={list.items} />
        ))}
      </div>
      <BottomFoot/>
    </div>
  );
};

export default DesktopFooter;

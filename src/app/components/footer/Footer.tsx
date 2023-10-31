import Link from "next/link";
import FooterList from "./FooterList";
import Image from "next/image";

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

const Footer = () => {
  return (
    <footer className="px-8 border-t-2 border-t-zinc-600 pt-16">
      <div className="flex ">
        {footerLists.map((list) => (
          <FooterList key={list.title} title={list.title} items={list.items} />
        ))}
      </div>
      <div className="py-4 border-b-4 border-b-zinc-900 flex items-center gap-4">
        {/* NEMAT FB */}
        
        <Link
          href={"https://www.instagram.com/triumphmotorcycles_skopje/"}
          target="_blank"
        >
          <Image
            src={"instagram.svg"}
            alt={"Instagram Icon"}
            width={20}
            height={20}
          />
        </Link>
        <Link href={"https://twitter.com/OfficialTriumph"} target="_blank">
          <Image
            src={"twitter.svg"}
            alt={"Instagram Icon"}
            width={20}
            height={20}
          />
        </Link>
        <Link
          href={"https://www.youtube.com/user/OfficialTriumph"}
          target="_blank"
        >
          <Image
            src={"youtube.svg"}
            alt={"Instagram Icon"}
            width={20}
            height={20}
          />
        </Link>
      </div>

      <div className="pt-4 pb-8 flex justify-between text-neutral-500">
        <div className="flex gap-4">
          <Link href={'/global-content/contact-us'} className="text-sm">Контакт</Link>
          <Link href={'/global-content/terms-and-conditions'} className="text-sm">Легалност</Link>
        </div>
        <p className="text-sm">Ⓒ 2023 Thriumph Motorcycles</p>
      </div>
    </footer>
  );
};

export default Footer;

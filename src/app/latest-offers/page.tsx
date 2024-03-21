import React from "react";
import MainBtn from "../components/MainBtn";
import Image from "next/image";

const LatestOffersPage = () => {
  return (
    <>
      <section
        className="flex flex-col justify-center items-center py-4 md:py-8 lg:py-16 gap-4"
      >
        <Image
          src={"/images/triumphLogo.png"}
          alt="Logo"
          width={422}
          height={241}
        />
        <h1 className="font-semibold text-2xl md:text-3xl text-center">
          Извинете, моментално немаме никакви специјални понуди!
        </h1>
        <MainBtn
          text={"Разгледајте ги сите модели!"}
          bgBlack={false}
          isLink
          link="/configure/bikes"
        />
        <MainBtn
          text={"Контакт"}
          bgBlack={true}
          isLink
          link="/dealer"
        />
      </section>
    </>
  );
};

export default LatestOffersPage;

"use client";
import { motion, useAnimation } from "framer-motion";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import { useEffect } from "react";
import AccessoriesNavSection from "./AccessoriesNavSection";
import MotorcyclesNavSection from "./MotorcyclesNavSection";
import ClothingNavSection from "./ClothingNavSection";
import OwnersNavSection from "./OwnersNavSection";
import DiscoverNavSection from "./DiscoverNavSection";
import { handleBodyScrollWhenMenuIsOpen } from "../helpers/handleBodyScrollWhenMenuOpens";

type Props = {
  families: any[];
  bikes: any[];
  bikeToRender: any;
};

const SectionContent = ({ families, bikes, bikeToRender }: Props) => {
  const router = useRouter();
  const pathname = usePathname();
  const query = useSearchParams().get("navItem");
  const colorQuery = useSearchParams().get('color')
  const reversQuery = useSearchParams().get('reversed') 


  const controls = useAnimation();

  const handleSectionClose = () => {

    if(Boolean(colorQuery) || Boolean(reversQuery)){
      router.push(`${pathname}?color=${colorQuery}&reversed=${reversQuery}`, {scroll: false})
    }else{
      router.push(pathname, {scroll: false});
    }
  }

  useEffect(() => {
    if (query) {
      controls.start({ y: 0 });
    } else {
      controls.start({ y: -1000 });
    }
  }, [controls]);

  useEffect(() => {
    router.push(`${pathname}?navItem=${query}&bikeID=1`, {scroll: false});
  }, []);

  return (
    <motion.section
      initial={{ y: -1000 }}
      animate={controls}
      exit={{ y: -1000 }}
      transition={{ type: "spring", duration: 0.5 }}
      className=" slight-white-bg shadow-2xl"
      onMouseLeave={handleSectionClose}
      style={{
        position: "fixed",
        top: 64,
        left: 0,
        width: "100%",
        zIndex: 9999,
      }}
    >
      {query === "Motorcycles" && (
        <MotorcyclesNavSection
          families={families}
          bikes={bikes}
          bikeToRender={bikeToRender}
        />
      )}
      {query === "Accessories" && <AccessoriesNavSection bikes={bikes}/>}
      {query === "Clothing" && <ClothingNavSection />}
      {query === "Owners" && <OwnersNavSection />}
      {query === "Discover" && <DiscoverNavSection />}
    </motion.section>
  );
};

export default SectionContent;

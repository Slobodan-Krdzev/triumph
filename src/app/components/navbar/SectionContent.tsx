"use client";
import { motion, useAnimation } from "framer-motion";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React, { useEffect, useState } from "react";
import MotorcyclesNavSection from "./MotorcyclesNavSection";
import AccessoriesNavSection from "./AccessoriesNavSection";



const SectionContent = () => {
  const router = useRouter();
  const pathname = usePathname();
  const query = useSearchParams();

  const [sectionType, setSectionType] = useState(query.get("navItem"));

  const controls = useAnimation();

  const handleSectionClose = () => router.push(pathname);

  useEffect(() => {
    if (query.get("navItem")) {
      controls.start({ y: 0 }); // Start animation when the section is visible
    } else {
      controls.start({ y: -1000 }); // Start exit animation when the section is hidden
    }
  }, [controls]);

  useEffect(() => {
    setSectionType(query.get('navItem'))
  }, [query.get('navItem')])

  return (
    <motion.section
      initial={{ y: -1000 }} // Initial position above the viewport
      animate={controls}
      exit={{ y: -1000 }}
      transition={{ type: "spring", duration: 0.5 }}
      className="text-slate-500 slight-white-bg border z-50"
      onMouseLeave={handleSectionClose}
      style={{
        position: "fixed",
        top: 93,
        left: 0,
        width: "100%"
      }}
    >
        {sectionType === 'Motorcycles' && <MotorcyclesNavSection/>}
        {sectionType === 'Accessories' && <AccessoriesNavSection/>}
        {sectionType === 'Clothing' && 'Clothing'}
        {sectionType === 'Owners' && 'Owners'}
        {sectionType === 'Discover' && 'Discover'}
    </motion.section>
  );
};

export default SectionContent;

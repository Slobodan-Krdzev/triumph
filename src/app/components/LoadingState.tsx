'use client'
import { motion } from "framer-motion";
import Image from "next/image";
import React from "react";

const LoadingState = () => {
  return (
    <motion.main
      initial={{ opacity: 0 }}
      animate={{ opacity: 1 }}
      transition={{ duration: 1 }}
      className="text-center h-screen flex justify-center items-center"
    >
      <Image
        src={"/images/triumphLogo.png"}
        alt="Logo"
        width={500}
        height={500}
      />
    </motion.main>
  );
};

export default LoadingState;
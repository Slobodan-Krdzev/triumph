"use client";
import { useRouter } from "next/navigation";
import { useEffect } from "react";

const ErrorPage = () => {
  const router = useRouter();

  useEffect(() => {
    const timer = setTimeout(() => {

      router.push("/");
    }, 2000);

    return () => {
      clearTimeout(timer);
    };
  }, []);

  return (
    <main
      style={{
        backgroundImage: 'url("/images/errorPage.avif")',
        backgroundSize: "cover",
        backgroundRepeat: "repeat",
        backgroundPosition: "center",
        height: "100vh",
      }}
    >
      <h1 className="text-2xl md:text-6xl font-bold uppercase text-white m-auto w-11/12 md:w-8/12 pt-4 md:pt-8 lg:pt-28 text-center">
        Се Враќаме на почетна...
      </h1>
    </main>
  );
};

export default ErrorPage;

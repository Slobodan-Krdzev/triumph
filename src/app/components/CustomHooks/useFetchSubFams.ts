import { FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { useEffect, useState } from "react";

type StatusType = "loading" | "error" | "success";

export const useFetchSubFams = () => {
  const [subFams, setSubFams] = useState<any[]>([]);
  const [statusSubFams, setStatus] = useState<StatusType>("loading");

  useEffect(() => {
    fetch(`${SUB_FAMILIES}`)
      .then((res) => res.json())
      .then((data) => {
        setSubFams(data);
        setStatus("success");
      })
      .catch((e) => {
        setStatus("error");
      });
  }, []);

  return { statusSubFams, subFams };
};

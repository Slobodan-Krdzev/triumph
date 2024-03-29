"use client";

import { faChevronRight, faHome } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Link from "next/link";
import { usePathname } from "next/navigation";

type BreadcrumbsProps = {
    dark?: boolean 
}

const Breadcrumbs = ({dark}: BreadcrumbsProps) => {
  const paths = usePathname();

  const pathsToArr = paths.split("/");

  const getLink = (index: number) => pathsToArr.slice(0, index + 1).join("/");

  return (
    <div
      className={`hidden lg:block absolute top-7 left-7 font-medium uppercase text-sm ${dark ? "text-neutral-600" : "text-white"}`}
      style={{
        zIndex: "7000",
      }}
    >
      <div className="flex items-center gap-2">
        <Link href={"/"}>
          <FontAwesomeIcon icon={faHome} size="sm" />
        </Link>

        {pathsToArr.slice(1, pathsToArr.length).map((path: string, idx: number) => {
          if (idx + 2 === pathsToArr.length) {
            return <span key={idx}>{path}</span>;
          }

          return (
            <div key={idx} className="flex gap-x-2 items-center">
              <Link href={`${getLink(idx + 1)}`}>
                {path}
              </Link>
              <FontAwesomeIcon icon={faChevronRight} size="xs" />
            </div>
          );
        })}
      </div>
    </div>
  );
};

export default Breadcrumbs;

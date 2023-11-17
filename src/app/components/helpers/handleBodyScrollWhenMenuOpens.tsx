export const handleBodyScrollWhenMenuIsOpen = (state: boolean) => {
    if (state) {
        document.body.classList.remove("menu-visible");
      } else {
        document.body.classList.add("menu-visible");
      }
}
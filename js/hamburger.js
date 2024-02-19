const menu_btn = document.querySelector("#menu-btn");
const menu = document.querySelector(".topbar-section");
const nav = document.querySelectorAll(".topbar__navigation li");

//Adds an event that makes the hamburger release the top bar menu
menu_btn.addEventListener("click", () => {
  menu_btn.classList.toggle("menu-active");
  menu.classList.toggle("menu-active");
});

//Adds an event that closes the menu on each navigation link
for (let btn of nav) {
  btn.addEventListener("click", () => {
    menu_btn.classList.toggle("menu-active");
    menu.classList.toggle("menu-active");
  });
}

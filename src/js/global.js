//=include resources\Menu.js

document.addEventListener("DOMContentLoaded", () => {
  const menu = new Menu({
    className: "navigation--active",
    btnSelector: "#hamburger",
    menuSelector: "#nav"
  });

  menu.init();
});

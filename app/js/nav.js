const mobileNavShowBtn = document.querySelector(".nav__mobile-show-btn");
const mobileNav = document.querySelector(".nav__mobile-nav");
const mobileNavCloseBtn = document.querySelector(".nav__mobile-close-btn");

mobileNavShowBtn.addEventListener("click", () => {
  mobileNav.classList.add("active");
});

mobileNavCloseBtn.addEventListener("click", () => {
  mobileNav.classList.remove("active");
});

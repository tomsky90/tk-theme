const mobileNavShowBtn = document.querySelector(".nav__mobile-show-btn");
const mobileNav = document.querySelector(".nav__mobile-nav");
const mobileNavCloseBtn = document.querySelector(".nav__mobile-close-btn");
const navLinks = document.querySelectorAll(".nav__mobile-nav .nav__link");

navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    mobileNav.classList.remove("active");
  });
});

mobileNavShowBtn.addEventListener("click", () => {
  mobileNav.classList.add("active");
});

mobileNavCloseBtn.addEventListener("click", () => {
  mobileNav.classList.remove("active");
});

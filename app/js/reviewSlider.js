document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".reviews__slider");

  if (!slider) return;

  const navButtons = document.querySelectorAll(".reviews__nav-btn");

  if (navButtons.length === 0) return;

  let currentSlide = 0;

  const updateSlider = () => {
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;

    navButtons.forEach((btn, index) => {
      btn.classList.toggle("active", index === currentSlide);
    });
  };

  navButtons.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      currentSlide = index;
      updateSlider();
    });
  });

  updateSlider();
});

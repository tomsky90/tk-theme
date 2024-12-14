const images = document.querySelectorAll(".gallery__image");
const fullScreenImage = document.querySelector(".gallery__fullscreen-image");
const fullScreenDisplay = document.querySelector(
  ".gallery__fullscreen-background"
);
const closeFullscreenDisplay = document.querySelector(
  ".gallery__fullscreen-close-btn"
);
const prevImageBtn = document.querySelector(".gallery__fullscreen-btn--prev");
const nextImageBtn = document.querySelector(".gallery__fullscreen-btn--next");

if (
  images.length > 0 &&
  fullScreenImage &&
  fullScreenDisplay &&
  closeFullscreenDisplay &&
  prevImageBtn &&
  nextImageBtn
) {
  let currentIndex = 0;

  closeFullscreenDisplay.addEventListener("click", () => {
    fullScreenDisplay.classList.remove("active");
  });

  const showNextImage = () => {
    currentIndex = (currentIndex + 1) % images.length;
    fullScreenImage.setAttribute("src", images[currentIndex].src);
  };

  const showPrevImage = () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    fullScreenImage.setAttribute("src", images[currentIndex].src);
  };

  const showImage = (src, i) => {
    currentIndex = i;
    fullScreenImage.setAttribute("src", src);
    fullScreenDisplay.classList.add("active");
  };

  images.forEach((image, i) => {
    image.addEventListener("click", () => {
      showImage(image.src, i);
    });
  });

  nextImageBtn.addEventListener("click", showNextImage);
  prevImageBtn.addEventListener("click", showPrevImage);
}

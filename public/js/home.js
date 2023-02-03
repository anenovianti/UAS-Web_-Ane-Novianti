const hamburgerButton = document.querySelector(".hamburger");
const popup = document.querySelector(".popup");

hamburgerButton.addEventListener("click", () => {
  popup.classList.toggle("active");
})


const swiper = new Swiper(".swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});
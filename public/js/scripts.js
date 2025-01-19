const menuToggle = document.querySelector(".menu-toggle");
const mobileMenu = document.querySelector(".mobile");

menuToggle.addEventListener("click", () => {
  mobileMenu.classList.toggle("active");
});

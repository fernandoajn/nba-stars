let mainNav = document.querySelector('#toggle-menu');
let navbarToggle = document.querySelector("#toggle-navbar");

navbarToggle.addEventListener('click', () => {
  mainNav.classList.toggle('active');
})
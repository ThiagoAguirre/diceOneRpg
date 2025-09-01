const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');
const authButtons = document.querySelector('.auth-buttons');

menuToggle.addEventListener('click', () => {
  navLinks.classList.toggle('show');
  authButtons.classList.toggle('show');
});

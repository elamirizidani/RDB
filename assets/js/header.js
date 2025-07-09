const toggle = document.getElementById('menuToggle');
const menu = document.getElementById('main-nav');

toggle.addEventListener('click', () => {
  menu.classList.toggle('show'); // toggles the `.show` class
  toggle.classList.toggle('open');
  console.log("Toggle clicked!");
});

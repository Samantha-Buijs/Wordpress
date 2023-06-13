const checkbox = document.getElementById('hamburger-bar');
const menuNavbarContainer = document.querySelector('.menu-navbar-container');

checkbox.addEventListener('change', function () {
  if (this.checked) {
    menuNavbarContainer.style.display = 'inline';
  } else {
    menuNavbarContainer.style.display = 'none';
  }
});

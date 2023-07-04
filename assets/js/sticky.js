window.addEventListener('DOMContentLoaded', () => {
    let navbar = document.getElementById('main-nav');
    let logo = document.getElementById('arclanLogo');
    let navPos = navbar.getBoundingClientRect().top;

    window.addEventListener('scroll', () => {
      let scrollPos = window.scrollY;
      if (scrollPos > navPos) {
        navbar.classList.add('sticky');
        logo.style.width = '55px';
      } else {
        navbar.classList.remove('sticky');
        logo.style.width = '60px';
      }
    });
  });

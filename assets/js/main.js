// // sticky navbar
// $(window).scroll(function () {
//   if ($(this).scrollTop() > 100) {
//     $('.arclanNavbar').addClass('stickyNavbar');
//   } else {
//     $('.arclanNavbar').removeClass('stickyNavbar');
//   }
// });

// scroll to top 
var btn = $('#scrollTopButton');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});


// loader

$(document).ready(function () {
  setTimeout(() => {
    $('.loader-bg').remove();
  }, 1000); // after 8 sec it will remove.
});



// career input box
const careerInputContainer = document.querySelector('.row');

careerInputContainer.addEventListener('focusin', (event) => {
  const target = event.target;
  if (target.matches('.career-input')) {
    const label = target.parentNode.querySelector('.career-label');
    label.classList.add('active');
  }
});

careerInputContainer.addEventListener('focusout', (event) => {
  const target = event.target;
  if (target.matches('.career-input')) {
    const label = target.parentNode.querySelector('.career-label');
    if (target.value === '') {
      label.classList.remove('active');
    }
  }
});
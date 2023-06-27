// // sticky navbar
// $(window).scroll(function () {
//   if ($(this).scrollTop() > 100) {
//     $('.arclanNavbar').addClass('stickyNavbar');
//   } else {
//     $('.arclanNavbar').removeClass('stickyNavbar');
//   }
// });


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









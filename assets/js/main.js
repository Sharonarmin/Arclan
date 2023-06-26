// sticky navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.arclanNavbar').addClass('stickyNavbar');
  } else {
    $('.arclanNavbar').removeClass('stickyNavbar');
  }
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



// gsap
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".panel").forEach((panel, i) => {
  ScrollTrigger.create({
    trigger: panel,
    start: "top top",
    scrub: true,
    pin: true,
    pinSpacing: false,
    onEnter: () => {
      gsap.to(panel, { marginTop: "60px", duration: 1000000 });
    },
    onLeaveBack: () => {
      gsap.to(panel, { marginTop: "0px", duration: 1000000 });
    },
  });
});




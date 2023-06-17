// sticky navbar

$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.arclanNavbar').addClass('stickyNavbar');
  } else {
    $('.arclanNavbar').removeClass('stickyNavbar');
  }
});




// gsap.registerPlugin(ScrollTrigger);

// gsap.utils.toArray(".panel").forEach((panel, i) => {
//   ScrollTrigger.create({
//     trigger: panel,
//     start: "top top", 
//     scrub: true,
//     pin: true, 
//     pinSpacing: false
//   });
// });

// ScrollTrigger.create({
//   // snap: {
//   //   snapTo: 1 / 4,
//   //   duration: 0.5
//   // }
// });



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




//gsap
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


// gsap.registerPlugin(ScrollTrigger);

// gsap.utils.toArray('.panel').forEach((panel, i) => {
//   ScrollTrigger.create({
//     trigger: panel,
//     start: 'top top',
//     scrub: true,
//     pin: true,
//     pinSpacing: false,
//     onEnter: () => {
//       gsap.to(panel, { marginTop: '60px', duration: 1000000 });
//     },
//     onLeaveBack: () => {
//       const maxOffset = 60; // Adjust this value as needed
//       const marginTop = parseFloat(panel.style.marginTop);
//       gsap.to(panel, {
//         marginTop: Math.max(0, marginTop - maxOffset),
//         duration: 1000000,
//       });
//     },
//   });
// });
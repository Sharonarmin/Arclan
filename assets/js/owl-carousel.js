// team carousel

$(document).ready(function(){
    $('.team-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:true,
        autoplay:false,
        items:2.5,
        navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2,
                dots:true
            },
            1300:{
                items:2.5
            },
            1500:{
                items:2.5
            }
        }
      })
  });
  
  
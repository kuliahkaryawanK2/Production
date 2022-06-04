$('.owl-portfolio').owlCarousel({
    items:4,
    loop:true,
    dots: true,
    nav: true,
    autoplay: true,
    margin:30,
      responsive:{
          0:{
              items:1
          },
          700:{
              items:2
          },
          1000:{
              items:3
          },
          1600:{
              items:4
          }
      }
})
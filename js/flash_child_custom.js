jQuery(document).ready(function ($) {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    autoplay: 5000,
  });

  $('.swiper-button-next').click(function(){
    mySwiper.slideNext(900);
  });

  $('.swiper-button-prev').click(function(){
    mySwiper.slidePrev(900);
  });

});

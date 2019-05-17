jQuery(document).ready(function ($) {

  $('#si').click(function(){
    $("#aviso").animate({
      height: 0
    }, 500, function(){
      $('#aviso').css('display', 'none');
    });
  });

  $(window).enllax();

});

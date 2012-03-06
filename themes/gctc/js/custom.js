$(document).ready(function(){
   var btns = $('.btnl');
   var larges = $('.cn-slideshow');
   btns.each(function(){
      $(this).click(function(){
          $('.joinFormBox').show();
          $('.joinFormBox').css('top', 100);
          $('.joinFormBox').css('background', 'black');
          var id = $(this).attr('id');
          larges.each(function(){
             if($(this).attr('id')=='large_'+id){
                 $(this).show('slow');
             } else {
                 $(this).hide('slow');
             }
          });
      });
   });
   $('.btn07').click(function(){
      $('.joinFormBox').slideToggle();
   });
});



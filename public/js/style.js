$(function(){
    $('.tab01').addClass('highlight');
  $('.tab01').on('click', function() {
    $('.tab-content02').removeClass('show').addClass('hide');
    $('.tab-content01').removeClass('hide').addClass('show');
      $('.tab01').addClass('highlight');
      $('.tab02').removeClass('highlight');
  });
  $('.tab02').on('click', function() {
    $('.tab-content01').removeClass('show highlight').addClass('hide');
    $('.tab-content02').removeClass('hide').addClass('show');
      $('.tab01').removeClass('highlight');
      $('.tab02').addClass('highlight');
  });
});


$(document).ready(function(){
   setTimeout(function(){
       $('.students').addClass('motion');
   }, 100); 
   
});


$(function(){
    
   $('.form-group01 > input').focus(function(){
                  $(this).siblings().addClass('focused');
                  });
    
    $('.form-group01 > input').blur(function(){
        
        if($(this).val() == ''){
        
        $(this).siblings().removeClass('focused');
        }
        
        
    });
 
});


$(function(){
  $('.tab01').on('click', function() {
    $('.tab-content02').removeClass('show').addClass('hide');
    $('.tab-content01').removeClass('hide').addClass('show');
  });
  $('.tab02').on('click', function() {
    $('.tab-content01').removeClass('show').addClass('hide');
    $('.tab-content02').removeClass('hide').addClass('show');
  });
});

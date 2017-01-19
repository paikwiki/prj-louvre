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
  $('.form-group02 > input').focus(function(){
    $(this).siblings().addClass('focused');
  });
  $('.form-group02 > input').blur(function(){
    if($(this).val() == ''){
      $(this).siblings().removeClass('focused');
    }
  });
});

$(function(){
  $("#image_preview").addClass('hide');
  function readURL(input) {
    $(".addpicture").addClass('hide');
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#image_preview').attr('src', e.target.result);
        $('#image_preview').css({
          display: 'block'
        })
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imgInp").change(function(){
    readURL(this);
    $("#image_preview").removeClass('hide');
  });
});

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

// 이미지 업로드 기능
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
  // 이미 이미지가 있을 경우 수정하고자 할 때
  $('.exist-profile-img').on('click', function() {
    $('#imgInp').attr('type', 'file');
    $("label[for='imgInp']").click();
    // readURL(this);
  });
  // 이미 이미지가 있을 경우 수정하고자 할 때
  $('.exist-artwork-img').on('click', function() {
    $('#imgInp').attr('type', 'file');
    $("label[for='imgInp']").click();
    // readURL(this);
  });
});

// 프로파일 동그랗게 만들기
$(function(){
  var containerWidth = $('.centered-image').parent().width();
  $('.centered-image').each(function() {
    var $this = $(this);
    var imgXY = [$this[0].naturalWidth, $this[0].naturalHeight];
    var modifiedXY = imgXY[0] >= imgXY[1] ? [imgXY[0]*(containerWidth/imgXY[1]), containerWidth] : [containerWidth, imgXY[1]*(containerWidth/imgXY[0])];
    modifiedXY = modifiedXY.map(function(v) {
      return parseInt(v);
    });
    var imgPos = [-(modifiedXY[0]/2-(containerWidth/2)), -(modifiedXY[1]/2-(containerWidth/2))]
    $this.parent().css({
      position: 'relative'
    })
    $this.css({
      maxWidth: 'inherit',
      width: modifiedXY[0],
      height: modifiedXY[1],
      left: imgPos[0],
      top: imgPos[1]
    }).animate({
      opacity: 1
    }, 600);
  });
});

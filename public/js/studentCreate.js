// ===================
// 학생 추가
// ===================

// 등록일을 오늘로 설정
$(function(){
  var now = new Date();
  var day = ("0" + now.getDate()).slice(-2);
  var month = ("0" + (now.getMonth() + 1)).slice(-2);
  var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
  $('#enroll-date').val(today);
});

$(function() {

  $('.collapsible').collapsible();

  $('#forever').click(function(){
    $('#forever').css("background-color", "blue");
    $('#forever').css("background-color", "blue");
});

var myFuncCalls = 0;
$('#play01').click(function(){
  $('.artboard').css('background-image', 'url(' + './../public/images/GIF_Character_0_1_seconds.gif' + ')');
  myFuncCalls++;
});

$('#play05').click(function(){
  $('.artboard').css('background-image', 'url(' + './../public/images/GIF_Character_0_5_seconds.gif' + ')');
  myFuncCalls++;
});

$('#play1').click(function(){
  $('.artboard').css('background-image', 'url(' + './../public/images/GIF_Character_1_seconds.gif' + ')');
  myFuncCalls++;
});

if(myFuncCalls === 3) {
$('.step13').css("display", "block");
}

 $('#step22Button').click(function(){
  $("#step22Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step22Button').addClass("bounceOutRight");
  $("#step22Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep22);
  function loadStep22(){
    $(location).attr('href', 'step_22.php');
    $(location).fadeIn(1000);
  }
});
});
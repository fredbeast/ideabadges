$(function(){
  
  // Start Page

  $( "#startButton" ).click(function() {
    $('.badgeTitlePage').addClass("animated zoomOut");
    $('.badgeTitlePage').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadObjectives);
    function loadObjectives() {
      $(location).attr('href', 'badge/step_1.php');
    }
  });

 //  Step 1 to Step 2 Animation
 $('#step2Button').click (function(){
  $("#step2Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step2Button').addClass("animated bounceOutRight");
  $("#step2Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep2);
  function loadStep2(){
    $(location).attr('href', 'step_2.php');
    $(location).fadeIn(1000);
  }
});

 $('#step3Button').click (function(){
  $("#step3Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step3Button').addClass("animated bounceOutRight");
  $("#step3Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep3);
  function loadStep3(){
    $(location).attr('href', 'step_3.php');
    $(location).fadeIn(1000);
  }
});

 $('#step4Button').click (function(){
  $("#step4Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step4Button').addClass("animated bounceOutRight");
  $("#step4Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep4);
  function loadStep4(){
    $(location).attr('href', 'step_4.php');
    $(location).fadeIn(1000);
  }
});

 $('#step5Button').click (function(){
  $("#step5Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step5Button').addClass("animated bounceOutRight");
  $("#step5Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep5);
  function loadStep5(){
    $(location).attr('href', 'step_5.php');
    $(location).fadeIn(1000);
  }
});

 $('#step6Button').click (function(){
  $("#step6Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step6Button').addClass("animated bounceOutRight");
  $("#step6Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep6);
  function loadStep6(){
    $(location).attr('href', 'step_6.php');
    $(location).fadeIn(1000);
  }
});

 $('#step7Button').click (function(){
  $("#step7Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step7Button').addClass("animated bounceOutRight");
  $("#step7Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimaionend animationend', loadStep7);
  function loadStep7(){
    $(location).attr('href', 'step_7.php');
    $(location).fadeIn(1000);
  }
});

 $('#step8Button').click (function(){
  $("#step8Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step8Button').addClass("animated bounceOutRight");
  $("#step8Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep8);
  function loadStep8(){
    $(location).attr('href', 'step_8.php');
    $(location).fadeIn(1000);
  }
});

 $('#step9Button').click (function(){
  $("#step9Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step9Button').addClass("animated bounceOutRight");
  $("#step9Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep9);
  function loadStep9(){
    $(location).attr('href', 'step_9.php');
    $(location).fadeIn(1000);
  }
});

 $('#step10Button').click (function(){
  $("#step10Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step10Button').addClass("animated bounceOutRight");
  $("#step10Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep10);
  function loadStep10(){
    $(location).attr('href', 'step_10.php');
    $(location).fadeIn(1000);
  }
});

 $('#step11Button').click (function(){
  $("#step11Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step11Button').addClass("animated bounceOutRight");
  $("#step11Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep11);
  function loadStep11(){
    $(location).attr('href', 'step_11.php');
    $(location).fadeIn(1000);
  }
});

 $('#step16Button').click(function(){
  $("#step16Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step16Button').addClass("bounceOutRight");
  $("#step16Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep16);
  function loadStep16(){
    $(location).attr('href', 'step_16.php');
    $(location).fadeIn(1000);
  }
});

  $('#step17Button').click(function(){
   $("#step17Button").removeClass("infinite");
   $("main + footer").fadeOut(1000);
   $('#step17Button').addClass("bounceOutRight");
   $("#step17Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep17);
   function loadStep17(){
     $(location).attr('href', 'step_17.php');
     $(location).fadeIn(1000);
   }
 });

   $('#step23Button').click(function(){
    $("#step23Button").removeClass("infinite");
    $("main + footer").fadeOut(1000);
    $('#step23Button').addClass("bounceOutRight");
    $("#step23Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep23);
    function loadStep23(){
      $(location).attr('href', 'step_23.php');
      $(location).fadeIn(1000);
    }
  });

    $('#step24Button').click(function(){
     $("#step24Button").removeClass("infinite");
     $("main + footer").fadeOut(1000);
     $('#step24Button').addClass("bounceOutRight");
     $("#step24Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep24);
     function loadStep24(){
       $(location).attr('href', 'step_24.php');
       $(location).fadeIn(1000);
     }
   });

     $('#summaryButton').click(function(){
      $("#summaryButton").removeClass("infinite");
      $("main + footer").fadeOut(1000);
      $('#summaryButton').addClass("bounceOutRight");
      $("#summaryButton").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadSummaryButton);
      function loadSummaryButton(){
        $(location).attr('href', 'summary.php');
        $(location).fadeIn(1000);
      }
    });

    //  var count = 1;
    //  $('.buttonCentre').click(function(){
    //   count = count++;
    //   alert(count);
    //   if(count >= 10) {
    //     $('#endButton').css("display", "block");
    //   }
    // });


// Carousel

$('.slider').slider();

$('#resetCarousel').click(function(){
  $('li').removeClass("active");
  $('#firstSlide').addClass("active");
  $('#firstSlideDiv').addClass("active");
});

  // Timeline (Credits!)

  var timelineBlocks = $('.cd-timeline-block'),
  offset = 0.8;

  //hide timeline blocks which are outside the viewport
  hideBlocks(timelineBlocks, offset);

  //on scolling, show/animate timeline blocks when enter the viewport
  $(window).on('scroll', function(){
    (!window.requestAnimationFrame) 
    ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
    : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
  });

  function hideBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
    });
  }

  function showBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
    });
  }

// submit Button 

$('.submitButton').click(function(){
  $(this).removeClass("infinite");
  $(this).addClass("lightSpeedOut");
});

// Quiz Success Message

// Apps for Gifs Activity

$('#Draggable1').draggable({
  containment: '#apps_gifs_activity',
  cursor: 'move',
  revert: 'invalid'
});

$('#Draggable2').draggable({
  containment: '#apps_gifs_activity',
  cursor: 'move',
  revert: 'invalid'
});

$('#Draggable3').draggable({
  containment: '#apps_gifs_activity',
  cursor: 'move',
  revert: 'invalid'
});
$('#Draggable4').draggable({
  containment: '#apps_gifs_activity',
  cursor: 'move',
  revert: 'invalid'
});

$('#Draggable5').draggable({
  containment: '#apps_gifs_activity',
  cursor: 'move',
  revert: 'invalid'
});

$('#Draggable6').draggable({
  containment: '#apps_gifs_activity',
  cursor: 'move',
  revert: 'invalid'
});

$('#Draggable7').draggable({
  containment: '#apps_gifs_activity',
  cursor: 'move',
  revert: 'invalid'
});

$('#droppableGifStep1').droppable({
  accept: '#Draggable1',
  drop: dropEventHandler1
});

$('#droppableGifStep2').droppable({
  accept: '#Draggable2',
  drop: dropEventHandler1
});

$('#droppableGifStep3').droppable({
  accept: '#Draggable3',
  drop: dropEventHandler1
});

$('#droppableGifStep4').droppable({
  accept: '#Draggable4',
  drop: dropEventHandler
});

$('#droppableGifStep5').droppable({
  accept: '#Draggable5',
  drop: dropEventHandler
});

$('#droppableGifStep6').droppable({
  accept: '#Draggable6',
  drop: dropEventHandler
});

$('#droppableGifStep7').droppable({
  accept: '#Draggable7',
  drop: dropEventHandler
});

var myFuncCalls1 = 0;
function dropEventHandler1(event, ui) {
 $(ui.draggable).css("background", "yellowgreen");
 TweenMax.fromTo($(ui.draggable), 1, { scale: 1.5, timeScale: 0 }, { scale: 1, opacity: 1, timeScale:0.1, ease: Back.easeInOut }, 1);
 $(ui.draggable).detach().css({top: 0,left: 0}).appendTo(this);
 myFuncCalls1++;
 if(myFuncCalls1 === 3) {
  $('.imgSuccess').css("display", "block");
  TweenLite.to($('.imgSuccess'), 2.5, { ease: Bounce.easeIn, y: 65 });
  $('#step16Button').css("display", "block");
          // alert( "I have been called " + myFuncCalls + " times" );
        }
      }

      var myFuncCalls2 = 0;
      function dropEventHandler(event, ui) {
        $(ui.draggable).css("background", "yellowgreen");
        TweenMax.fromTo($(ui.draggable), 1, { scale: 1.5, timeScale: 0 }, { scale: 1, opacity: 1, timeScale:0.1, ease: Back.easeInOut }, 1);
        $(ui.draggable).detach().css({top: 0,left: 0}).appendTo(this);
        myFuncCalls2++;
        if(myFuncCalls2 === 4) {
          $('.imgSuccess').css("display", "block");
          TweenLite.to($('.imgSuccess'), 2.5, { ease: Bounce.easeIn, y: 65 });
          $('#step17Button').css("display", "block");
          // alert( "I have been called " + myFuncCalls + " times" );
        }
      }
      

    });


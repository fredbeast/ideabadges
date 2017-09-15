$(function() {

// if($("#slideDiv1").hasClass("active") && $("#firstSlide").hasClass("active")){
// }

$('.carousel').on('slid.bs.carousel', function () {
  var carouselData = $(this).data('bs.carousel');
  var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));

  var total = carouselData.$items.length;


  ////////// Reset //////////

  $('#resetCarousel12').click(function(){
      console.log("test");
     $('li').removeClass("active");
  if (currentIndex != 0) {
    $('div').removeClass("active");
  }
     $('#slideDiv1').addClass("active");
     $('.dynamicStep').html("Step 1");
     $('.dynamicCaption').html("In this view, you will see a close and a save button in the top left and top right corners. In the panel below your GIF, you will find a sparkles icon, a jumping rabbit icon and a pencil icon.<br>The sparkles icon enables you to add filters to your GIF. Filters are fun ways to add effects to your GIF. The jumping rabbit icon enables you to adjust the speed of the GIF. The pencil icon lets you add text, captions and emojis to your GIF.");
    });

  ////////// Reset //////////


  $( ".carousel" ).ready(function(){
    if (currentIndex === 0) {
      $('.dynamicStep').html("Step 1");
      $('.dynamicCaption').html("In this view, you will see a close and a save button in the top left and top right corners. In the panel below your GIF, you will find a sparkles icon, a jumping rabbit icon and a pencil icon.<br>The sparkles icon enables you to add filters to your GIF. Filters are fun ways to add effects to your GIF. The jumping rabbit icon enables you to adjust the speed of the GIF. The pencil icon lets you add text, captions and emojis to your GIF.");
    }
    if (currentIndex === 1) {
      $('.dynamicStep').html("Step 2");
      $('.dynamicCaption').html("In the filter panel under the icons, you will find 7 filters to apply to your GIF. The current view has a Horizontal Filter applied. If you choose not to apply a filter, the ship in this view for example would sail ahead in one direction.");
      $('#resetCarousel12').css("display", "block");
    }
    if (currentIndex === 2) {
      $('.dynamicStep').html("Stop Motion Filter");
      $('.dynamicCaption').html("The second filter is the Stop Motion filter. This increases the speed of the frame rates in the GIF.");
      $('#resetCarousel12').css("display", "block");
    }
    if (currentIndex === 3) {
      $('.dynamicStep').html("Rewind Filter");
      $('.dynamicCaption').html("The third filter is the Rewind filter. This plays the GIF in reverse.");
      $('#resetCarousel12').css("display", "block");
    }
    if (currentIndex === 4) {
      $('.dynamicStep').html("4 Square Filter");
      $('.dynamicCaption').html("The fourth filter is the 4 Square filter. It plays four GIFs at once.");
      $('#resetCarousel12').css("display", "block");
    }

    if (currentIndex === 5) {
      $('.dynamicStep').html("Horizontal Filter");
      $('.dynamicCaption').html("The fifth filter is the Horizontal filter. This creates a mirrored effect.");
      $('#resetCarousel12').css("display", "block");
    }

    if (currentIndex === 6) {
      $('.dynamicStep').html("Vertical Filter");
      $('.dynamicCaption').html("The sixth filter is the Vertical filter. This creates two GIFs that play in opposite directions.");
      $('#resetCarousel12').css("display", "block");
    }
    if (currentIndex === 7) {
      $('.dynamicStep').html("Black and White Filter");
      $('.dynamicCaption').html("The seventh filter is the Black and White filter. Click the green circle below to progress or the orange circle to replay.");
      $('#resetCarousel12').css("display", "block");
      $('#step13Button').css("display", "block");
    }
  });

  $('#step13Button').click (function(){
  $("#step13Button").removeClass("infinite");
  $("main + footer").fadeOut(1000);
  $('#step13Button').addClass("animated bounceOutRight");
  $("#step13Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep13);
  function loadStep13(){
  $(location).attr('href', 'step_13.php');
  $(location).fadeIn(1000);
  }
  });

});
});
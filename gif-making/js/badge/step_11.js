$(function() {

$('.carousel').on('slid.bs.carousel', function () {
  var carouselData = $(this).data('bs.carousel');
  var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));

  var total = carouselData.$items.length;


////////// Reset //////////

$('#resetCarousel11').click(function(){
    console.log("test");
   $('li').removeClass("active");
if (currentIndex != 0) {
  $('div').removeClass("active");
}
   $('#slideDiv1').addClass("active");
   $('.dynamicStep').html("Step 1");
   $('.dynamicCaption').html("Install the application: \"GIF Forge\" from the Apple App Store. Open the application after the installation is complete. You will now see a short tutorial.");
  });

////////// Reset //////////


  $( ".carousel" ).ready(function(){
  if (currentIndex === 0) {
    $('.dynamicStep').html("Step 1");
    $('.dynamicCaption').html("Install the application: \"GIF Forge\" from the Apple App Store. Open the application after the installation is complete. You will now see a short tutorial.");
  }
  if (currentIndex === 1) {
    $('.dynamicStep').html("Step 2");
    $('.dynamicCaption').html("The tutorial will also ask you whether you would like to import any existing GIFs from your photo library. It is completely up to you whether you would like to give permission to the GIF Forge application by clicking \"Yes\" or \"No\".");
    $('#resetCarousel11').css("display", "block");
  }
  if (currentIndex === 2) {
    $('.dynamicStep').html("Step 3");
    $('.dynamicCaption').html("Press the button [the GIF Forge Logo at the top of the screen] or swipe to start creating GIFs. As this is a free application, you will sometimes find adverts at the bottom of the screen.");
    $('#resetCarousel11').css("display", "block");
  }
  if (currentIndex === 3) {
    $('.dynamicStep').html("Step 4");
    $('.dynamicCaption').html("This is the home screen of the GIF Forge app. Touch Camera from the menu.");
    $('#resetCarousel11').css("display", "block");
  }
  if (currentIndex === 4) {
    $('.dynamicStep').html("Step 5");
    $('.dynamicCaption').html("Grant GIF Forge permission to access your camera.");
    $('#resetCarousel11').css("display", "block");
  }

  if (currentIndex === 5) {
    $('.dynamicStep').html("Step 6");
    $('.dynamicCaption').html("To capture a sequence of images, click the camera button continously.");
    $('#resetCarousel11').css("display", "block");
  }

  if (currentIndex === 6) {
    $('.dynamicStep').html("Step 7");
    $('.dynamicCaption').html("To move to the next stage in the app, click the button in the top right corner. The button displays the number of images captured. Click the green circle below to progress or the orange circle to replay.");
    $('#step12Button').css("display", "block");
    $('#resetCarousel11').css("display", "block");
  }
});
});

$('#step12Button').click (function(){
$("#step12Button").removeClass("infinite");
$("main + footer").fadeOut(1000);
$('#step12Button').addClass("animated bounceOutRight");
$("#step12Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep12);
function loadStep12(){
$(location).attr('href', 'step_12.php');
$(location).fadeIn(1000);
}
});


});
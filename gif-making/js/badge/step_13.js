$(function() {


$('.carousel').on('slid.bs.carousel', function () {
  var carouselData = $(this).data('bs.carousel');
  var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));

  var total = carouselData.$items.length;


  ////////// Reset //////////

  $('#resetCarousel13').click(function(){
      console.log("test");
     $('li').removeClass("active");
  if (currentIndex != 0) {
    $('div').removeClass("active");
  }
     $('#slideDiv1').addClass("active");
     $('.dynamicStep').html("Step 1");
     $('.dynamicCaption').html("Select the jumping rabbit icon to adjust the frame rate of the GIF. This gives you the ability to increase or decrease the speed of the animation in the GIF. Adjust the slider using your finger to determine the speed at which each frame should play at. The two icons below the slider enable you to change the direction and adjust the speed, too.");
    });

  ////////// Reset //////////


  $( ".carousel" ).ready(function(){
    if (currentIndex === 0) {
      $('.dynamicStep').html("Step 1");
      $('.dynamicCaption').html("Select the jumping rabbit icon to adjust the frame rate of the GIF. This gives you the ability to increase or decrease the speed of the animation in the GIF. Adjust the slider using your finger to determine the speed at which each frame should play at. The two icons below the slider enable you to change the direction and adjust the speed, too.");
    }
    if (currentIndex === 1) {
      $('.dynamicStep').html("Adjusting speed");
      $('.dynamicCaption').html("Slide your finger using the slider to set the speed at which each frame should play at. The two icons below the slider enable you to change the direction and adjust the speed, too.");
      $('#resetCarousel13').css("display", "block");
    }
    if (currentIndex === 2) {
      $('.dynamicStep').html("Adjusting speed");
      $('.dynamicCaption').html("In this view, the GIF plays at the fastest possible times with the shortest delays.");
      $('#resetCarousel13').css("display", "block");
    }
    if (currentIndex === 3) {
      $('.dynamicStep').html("Adjusting speed");
      $('.dynamicCaption').html("In this view, the speed of the GIF is adjusted to a moderate speed.");
      $('#resetCarousel13').css("display", "block");
    }
    if (currentIndex === 4) {
      $('.dynamicStep').html("The Pencil Icon");
      $('.dynamicCaption').html("Click the pencil icon to bring up the options to add text, captions and stickers. Click the speech bubble icon to add text. Or click the cat icon to add captions. You can use the smiley icon, but it will cost you money to install this in-app purchase.");
      $('#resetCarousel13').css("display", "block");
    }
    if (currentIndex === 5) {
      $('.dynamicStep').html("Add text");
      $('.dynamicCaption').html("Click the speech bubble icon to load a text input box in the GIF and bring the keyboard into the view. Simply tap the input text box to start typing. We have named our ship \"HMS GIFtory\".");
      $('#resetCarousel13').css("display", "block");
    }
    if (currentIndex === 6) {
      $('.dynamicStep').html("Editing text");
      $('.dynamicCaption').html("Click the \"AA\" icon to bring up the editing text panel. Select the colour of the font, font-size, font-style and font-family of your choice.");
      $('#resetCarousel13').css("display", "block");
    }
    if (currentIndex === 7) {
      $('.dynamicStep').html("Editing text");
      $('.dynamicCaption').html("This for example is an edited version of the text on our GIF.");
      $('#resetCarousel13').css("display", "block");
    }

    if (currentIndex === 8) {
      $('.dynamicStep').html("Changing text visibility");
      $('.dynamicCaption').html("Click the icon next to the \"AA\" icon to bring up the text visibility panel. This allows you to deselect all of the frames in the GIF in which you do not want the text to appear.");
      $('#resetCarousel13').css("display", "block");
    }

    if (currentIndex === 9) {
      $('.dynamicStep').html("Changing text visibility");
      $('.dynamicCaption').html("In this view, we have deselected two frames out of our 40 frames. The text will now appear on 38 frames.");
      $('#resetCarousel13').css("display", "block");
    }

    if (currentIndex === 10) {
      $('.dynamicStep').html("Add a caption");
      $('.dynamicCaption').html("Select the cat icon labelled as meme to display a top and bottom caption in the GIF.");
      $('#resetCarousel13').css("display", "block");
    }

    if (currentIndex === 11) {
      $('.dynamicStep').html("Add a caption");
      $('.dynamicCaption').html("Simply tap the top and bottom caption to edit the text.");
      $('#resetCarousel13').css("display", "block");
    }

    if (currentIndex === 12) {
      $('.dynamicStep').html("Editing the caption");
      $('.dynamicCaption').html("Click the \"AA\" icon to bring up the editing text panel. Select the colour of the font, font-size, font-style and font-family of your choice. Click the icon next to the \"AA\" icon to display the caption visibility panel. This allows you to deselect all of the frames in the GIF in which you do not want the caption to appear.");
      $('#resetCarousel13').css("display", "block");
    }

    if (currentIndex === 13) {
      $('.dynamicStep').html("Add a sticker");
      $('.dynamicCaption').html("This is an example of an in-app purchase. It will cost you money. If you are not the account holder, please seek permission before you install the in-app purchase. Click the green circle below to progress or the orange circle to replay.");
      $('#resetCarousel13').css("display", "block");
      $('#step14Button').css("display", "block");
    }
  });

$('#step14Button').click (function(){
$("#step14Button").removeClass("infinite");
$("main + footer").fadeOut(1000);
$('#step14Button').addClass("animated bounceOutRight");
$("#step14Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep14);
function loadStep14(){
$(location).attr('href', 'step_14.php');
$(location).fadeIn(1000);
}
});

});
});
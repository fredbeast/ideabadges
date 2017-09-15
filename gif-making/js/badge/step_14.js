$(function() {

  $('.carousel').on('slid.bs.carousel', function () {
    var carouselData = $(this).data('bs.carousel');
    var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));

    var total = carouselData.$items.length;


    ////////// Reset //////////

    $('#resetCarousel14').click(function(){
        console.log("test");
       $('li').removeClass("active");
    if (currentIndex != 0) {
      $('div').removeClass("active");
    }
       $('#slideDiv1').addClass("active");
       $('.dynamicStep').html("Save and share your GIF.");
       $('.dynamicCaption').html("Select the tick button in the top right corner when you are finished customising your GIF.");
      });

    ////////// Reset //////////


    $( ".carousel" ).ready(function(){
      if (currentIndex === 0) {
        $('.dynamicStep').html("Save and share your GIF");
        $('.dynamicCaption').html("Select the tick button in the top right corner when you are finished customising your GIF.");
      }
      if (currentIndex === 1) {
        $('.dynamicStep').html("Options to save and share");
        $('.dynamicCaption').html("<div class='row'><div class='col s4'><img class='imgCaption' src='./../public/images/icons/share.png'/></div>" + "<div class'col s8'><p class='pIcon'>The first icon is the share icon. This lets you share the GIF to Facebook, Twitter, Facebook Messenger, and Whatsapp.</p></div></div>" + "<div class='row'><div class='col s4'><img class='imgCaption' src='./../public/images/icons/imgur.png'/></div>" + "<div class'col s8'><p class='pIcon'>The second icon lets you share your GIF to Imgur, which is an online image sharing service.</p></div></div>" + "<div class='row'><div class='col s4'><img class='imgCaption' src='./../public/images/icons/transmit.png'/></div>" + "<div class'col s8'><p class='pIcon'>The third icon lets you share via AirDrop [ability to share content with other nearby Apple devices] using WiFi and Bluetooth [wireless technology for sharing data over short distances].</p></div></div>" + "<div class='row'><div class='col s4'><img class='imgCaption' src='./../public/images/icons/video.png'/></div>" + "<div class'col s8'><p class='pIcon'> The fourth icon converts the GIF into a video.</p></div></div>" + "<div class='row'><div class='col s4'><img class='imgCaption' src='./../public/images/icons/save.png'/></div>" + "<div class'col s8'><p class='pIcon'>The tick icon saves the GIF in the GIF Forge application.</p></div></div><br>");
        $('#resetCarousel14').css("display", "block");
      }
      if (currentIndex === 2) {
        $('.dynamicStep').html("The share icon");
        $('.dynamicCaption').html("Click Whatsapp or Twitter for example, or find other platforms to share your GIF on by swiping to the right, for example: Message, Mail, Notes, and DropBox.");
        $('#resetCarousel14').css("display", "block");
      }
      if (currentIndex === 3) {
        $('.dynamicStep').html("The share icon");
        $('.dynamicCaption').html("You can also share the GIF as an email attachment.");
        $('#resetCarousel14').css("display", "block");
      }
      if (currentIndex === 4) {
        $('.dynamicStep').html("The \"t\" icon.");
        $('.dynamicCaption').html("The \"t\" icon enables you to share the GIF via Facebook, and save the GIF to your iCloud account.");
        $('#resetCarousel14').css("display", "block");
      }

      if (currentIndex === 5) {
        $('.dynamicStep').html("Save and view later");
        $('.dynamicCaption').html("If you prefer not to share your GIF just now, click the tick icon. You can find your GIF by simply returning to the homescreen of the app. Then click the GIF Forge logo button at the top in the homescreen of the app.");
        $('#resetCarousel14').css("display", "block");
      }

      if (currentIndex === 6) {
        $('.dynamicStep').html("GIF library");
        $('.dynamicCaption').html("You can still share your GIF after you have saved in the library. GIFs made with GIF Forge can be accessed by clicking the GIF Forge button at the top in the homescreen of the app. Click the green circle below to progress or the orange circle to replay.");
        $('#resetCarousel14').css("display", "block");
        $('#step15Button').css("display", "block");
      }
    });

      $('#step15Button').click (function(){
        $("#step15Button").removeClass("infinite");
        $("main + footer").fadeOut(1000);
        $('#step15Button').addClass("animated bounceOutRight");
        $("#step15Button").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', loadStep15);
        function loadStep15(){
          $(location).attr('href', 'step_15.php');
          $(location).fadeIn(1000);
        }
      });
    });
});
$(function() {

$('.carousel').on('slid.bs.carousel', function () {
  var carouselData = $(this).data('bs.carousel');
  var currentIndex = carouselData.getItemIndex(carouselData.$element.find('.item.active'));

  var total = carouselData.$items.length;


  ////////// Reset //////////

  $('#resetCarousel18').click(function(){
      console.log("test");
     $('li').removeClass("active");
  if (currentIndex != 0) {
    $('div').removeClass("active");
  }
     $('#slideDiv1').addClass("active");
     $('.dynamicStep').html("Step 1");
     $('.dynamicCaption').html("Open the Adobe Photoshop application on your desktop.");
    });

  ////////// Reset //////////

  $( ".carousel" ).ready(function(){
  if (currentIndex === 0) {
    $('.dynamicStep').html("Step 1");
    $('.dynamicCaption').html("Open the Adobe Photoshop application on your desktop.");
  }
  if (currentIndex === 1) {
    $('.dynamicStep').html("Step 2");
    $('.dynamicCaption').html("Select 'New' button and set width and height of the Photoshop artboard.");
  }
  if (currentIndex === 2) {
    $('.dynamicStep').html("Step 3");
    $('.dynamicCaption').html("This is the Adobe Photoshop interface.");
  }
  if (currentIndex === 3) {
    $('.dynamicStep').html("Step 4");
    $('.dynamicCaption').html("Click File/Scripts/Load Files into Stack. This will enable you to import existing images.");
  }
  if (currentIndex === 4) {
    $('.dynamicStep').html("Step 5");
    $('.dynamicCaption').html("In the Load Files into Stack popup window, select browse. This opens your finder folder.");
  }
  if (currentIndex === 5) {
    $('.dynamicStep').html("Step 6");
    $('.dynamicCaption').html("This is the finder folder on an Apple device.");
  }
  if (currentIndex === 6) {
    $('.dynamicStep').html("Step 7");
    $('.dynamicCaption').html("Select the images you would like to import.");
  }
  if (currentIndex === 7) {
    $('.dynamicStep').html("Step 8");
    $('.dynamicCaption').html("The selected images are added to the Load Files into Stack popup window. Select OK in the top right corner.");
  }
  if (currentIndex === 8) {
    $('.dynamicStep').html("Step 9");
    $('.dynamicCaption').html("You will now find your images as layers in the layers panel in the bottom right corner in the Adobe Photoshop interface. On the artboard, you will find your first image stacked above the other three images on the artboard.");
  }
  if (currentIndex === 9) {
    $('.dynamicStep').html("Step 10");
    $('.dynamicCaption').html("Select Timeline from Window. This adds the Timeline panel below the artboard in your Photoshop interface.");
  }
  if (currentIndex === 10) {
    $('.dynamicStep').html("Step 11");
    $('.dynamicCaption').html("Click \"Create Frame Animation\" in the Timeline panel.");
  }
  if (currentIndex === 11) {
    $('.dynamicStep').html("Step 12");
    $('.dynamicCaption').html("Find the menu icon in the top right corner of the Timeline panel and select the option to Make Frames from Layers. This transforms each layer into a frame.");
  }
  if (currentIndex === 12) {
    $('.dynamicStep').html("Step 13");
    $('.dynamicCaption').html("You will now find each layer containing the image as a frame in the Timeline panel.");
  }
  if (currentIndex === 13) {
    $('.dynamicStep').html("Step 14");
    $('.dynamicCaption').html("Click on the downward arrow to adjust the seconds of visibility of each frame.");
  }
  if (currentIndex === 14) {
    $('.dynamicStep').html("Step 15");
    $('.dynamicCaption').html("Select \"Forever\" in the options below the frames.");
  }
  if (currentIndex === 15) {
    $('.dynamicStep').html("Step 16");
    $('.dynamicCaption').html("Choose to reverse frames in the menu that can be found in the top right corner of the Timeline panel.");
  }
  if (currentIndex === 16) {
    $('.dynamicStep').html("Step 17");
    $('.dynamicCaption').html("Once you are happy with the potential GIF, we can now export the artboard in a GIF file format. Select Save for Web (Legacy) under File/Export.");
  }
  if (currentIndex === 17) {
    $('.dynamicStep').html("Step 18");
    $('.dynamicCaption').html("You will now see the Save for Web (Legacy) popup window.");
  }
  if (currentIndex === 18) {
    $('.dynamicStep').html("Step 19");
    $('.dynamicCaption').html("In the popup window, set preset field to GIF 128 Dithered. Set the colours field to 256. Check the image size and ensure the looping option is set to Forever.");
  }
  if (currentIndex === 19) {
    $('.dynamicStep').html("Step 20");
    $('.dynamicCaption').html("Click \"Save\" to name and save your GIF in a memorable file location.");
    $('#step19Button').css("display", "block");
  }
});
});
  // var text = (currentIndex + 1) + " of " + total;
  // $('#carousel-index').text(text);


//   else if(!$("#slideDiv1").hasClass("active") && !$("#firstSlide").hasClass("active")){
//     $('.dynamicCaption').html("");
//     }
//   }

// function captionSlide2(){
//   if($('#slideDiv2').hasClass("active") && $("#secondSlide").hasClass("active")) {
//     console.log("Test");
//     $('.dynamicCaption').html("");
//     $('.dynamicCaption').html("Test 2");
// }
// }

// captionSlide1();
// captionSlide2();

// $('.right .carousel-control').click(function(){
// switch(true) 
// {
//   case $("#slideDiv1").hasClass("active") && $("#firstSlide").hasClass("active"):
//   console.log("Test");
//   $('.dynamicCaption').html("Test 1");
//   case $('#slideDiv2').hasClass("active") && $("#secondSlide").hasClass("active"):
//   $('.dynamicCaption').html("Test 2");
//   break;
// }
// });

// $('#Carousel').on('slide.bs.carousel', function (ev) {
//   var id = ev.relatedTarget.id;
//   switch (id) {
//     case "firstSlide":
//       console.log("test");
//       $('.dynamicCaption').html("Test 1");
//       break;
//     case "secondSlide":
//     console.log("test");
//       // do something the id is 2
//       $('.dynamicCaption').html("Test 2");
//       break;
//     case "3":
//       // do something the id is 3
//       break;
//     default:
//       //the id is none of the above
//   }
// })

// if($('.carousel(0)') {
//    $('.dynamicCaption').html("Test 1");
// }

// if($('.carousel(1)') {
//    $('.dynamicCaption').html("Test 2");
// }

// if($("#slideDiv1").hasClass("active") && $("#firstSlide").hasClass("active")){
//   console.log("Test");
//   $('.dynamicCaption').html("Test 1");
// }

// if($('#slideDiv2').hasClass("active") && $("#secondSlide").hasClass("active")) {
//   console.log("Test");
//   $('.dynamicCaption').html("Test 2");
// };
  // else {
  //   console.log("error");
  // }


// Photoshop Drag and Drop

  $('#DraggablePs1').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs2').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs3').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs4').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs5').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs6').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs7').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs8').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs9').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs10').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  $('#DraggablePs11').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });


  $('#DraggablePs12').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });


  $('#DraggablePs13').draggable({
    containment: '#ps_gifs_activity',
    cursor: 'move',
    revert: 'invalid'
  });

  // 

  $('#droppablePsStep1').droppable({
    accept: '#DraggablePs1',
    drop: dropEventHandler1
  });

  $('#droppablePsStep2').droppable({
    accept: '#DraggablePs2',
    drop: dropEventHandler1
  });

  $('#droppablePsStep3').droppable({
    accept: '#DraggablePs3',
    drop: dropEventHandler1
  });
  
  $('#droppablePsStep4').droppable({
    accept: '#DraggablePs4',
    drop: dropEventHandler2
  });

  $('#droppablePsStep5').droppable({
    accept: '#DraggablePs5',
    drop: dropEventHandler2
  });

  $('#droppablePsStep6').droppable({
    accept: '#DraggablePs6',
    drop: dropEventHandler2
  });

  $('#droppablePsStep7').droppable({
    accept: '#DraggablePs7',
    drop: dropEventHandler2
  });

  $('#droppablePsStep8').droppable({
    accept: '#DraggablePs8',
    drop: dropEventHandler2
  });

  $('#droppablePsStep9').droppable({
    accept: '#DraggablePs9',
    drop: dropEventHandler3
  });

  $('#droppablePsStep10').droppable({
    accept: '#DraggablePs10',
    drop: dropEventHandler3
  });

  $('#droppablePsStep11').droppable({
    accept: '#DraggablePs11',
    drop: dropEventHandler3
  });

  $('#droppablePsStep12').droppable({
    accept: '#DraggablePs12',
    drop: dropEventHandler3
  });

  $('#droppablePsStep13').droppable({
    accept: '#DraggablePs13',
    drop: dropEventHandler3
  });

  var myFunc3Calls = 0;
  function dropEventHandler1(event, ui) {
    $(ui.draggable).css("background", "yellowgreen");
    TweenMax.fromTo($(ui.draggable), 1, { scale: 1.5, timeScale: 0 }, { scale: 1, opacity: 1, timeScale:0.1, ease: Back.easeInOut }, 1);
         $(ui.draggable).detach().css({top: 0,left: 0}).appendTo(this);
         myFunc3Calls++;
         if(myFunc3Calls === 3) {
          $('.imgSuccess').css("display", "block");
          TweenLite.to($('.imgSuccess'), 2.5, { ease: Bounce.easeIn, y: 65 });
          $('#step20Button').css("display", "block");
          // alert( "I have been called " + myFuncCalls + " times" );
         }
      }

      var myFunc4Calls = 0;
      function dropEventHandler2(event, ui) {
        $(ui.draggable).css("background", "yellowgreen");
        TweenMax.fromTo($(ui.draggable), 1, { scale: 1.5, timeScale: 0 }, { scale: 1, opacity: 1, timeScale:0.1, ease: Back.easeInOut }, 1);
             $(ui.draggable).detach().css({top: 0,left: 0}).appendTo(this);
             myFunc4Calls++;
             if(myFunc4Calls === 5) {
              $('.imgSuccess').css("display", "block");
              TweenLite.to($('.imgSuccess'), 2.5, { ease: Bounce.easeIn, y: 65 });
              $('#step21Button').css("display", "block");
              // alert( "I have been called " + myFuncCalls + " times" );
             }
          }

          var myFunc5Calls = 0;
          function dropEventHandler3(event, ui) {
            $(ui.draggable).css("background", "yellowgreen");
            TweenMax.fromTo($(ui.draggable), 1, { scale: 1.5, timeScale: 0 }, { scale: 1, opacity: 1, timeScale:0.1, ease: Back.easeInOut }, 1);
                 $(ui.draggable).detach().css({top: 0,left: 0}).appendTo(this);
                 myFunc5Calls++;
                 if(myFunc5Calls === 5) {
                  $('.imgSuccess').css("display", "block");
                  TweenLite.to($('.imgSuccess'), 2.5, { ease: Bounce.easeIn, y: 65 });
                  $('#step22Button').css("display", "block");
                  // alert( "I have been called " + myFuncCalls + " times" );
                 }
              }

});


$(document).ready(function() {

    $('#beginning-btn').click(function () {
        $('.part-bar').css({
            'width': '16%'
        });
        $('#background').removeClass('stripes')
    });

    $('#beginning-btn-back').click(function () {
        $('.part-bar').css({
            'width': '0%'
        });
        $('#background').addClass('stripes')
    });


});



$(function() {
    $( ".ans-drag" ).draggable({
        revert: "invalid",
        start: function(){
            $(this).addClass('scale')
        },
        stop: function(){
            $(this).removeClass('scale')
        }
    });
    var i1 = 2;
    $('.drop-mr').droppable({
        accept: "#ans-drag1, #ans-drag5, #ans-drag6",
        drop: function( event, ui ) {
            $(this).addClass('flashy').delay(1000).queue(function() {
                $(this).removeClass('flashy');
                $(this).dequeue();
            });
            $('#drag-prog').css('width', ((i1/10)*100) + '%');
            ui.draggable.remove();
            $('#ans-drag' + i1).css('display', 'block');
            i1 ++;
        }
    });

    $('.drop-vr').droppable({
        accept: "#ans-drag3, #ans-drag8, #ans-drag7",
        drop: function( event, ui ) {
            $(this).addClass('flashy').delay(1000).queue(function(){
                $(this).removeClass('flashy');
                $(this).dequeue();
            });
            $('#drag-prog').css('width', ((i1/9)*100) + '%');
            ui.draggable.remove();
            $('#ans-drag' + i1).css('display', 'block');
            i1 ++;
            if (i1 == 10) {
                setTimeout(function(){
                    return show('Page25','Page24');
                }, 500)
            }
        }
    });
    $('.drop-ar').droppable({
        accept: "#ans-drag4, #ans-drag2",
        drop: function( event, ui ) {
            $(this).addClass('flashy').delay(1000).queue(function(){
                $(this).removeClass('flashy');
                $(this).dequeue();
            });
            $('#drag-prog').css('width', ((i1/10)*100) + '%');
            ui.draggable.remove();
            $('#ans-drag' + i1).css('display', 'block');
            i1 ++;
        }
    });


});



var showText = function (target, message, index, interval) {
    if (index < message.length) {
        $(target).append(message[index++]);
        setTimeout(function () { showText(target, message, index, interval); }, interval);
    }
};

var comp1 = 0;

$( '#slider-1' ).slider({
    min: 0,
    max: 10,
    value: 5,
    range: "min",
    slide: function( event, ui ) {
        comp1 = ui.value;
        $('#emm-1').css('font-size', (20 - (ui.value)) + 'px');
        $('#emm-2').css('font-size', ((ui.value) + 10) + 'px');
    }
});

$("#immersive-check-1").click(function(){
    if (comp1 >= 7) {
        $('#immersive-comp-1').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        $(this).css({
            'visibility': 'hidden',
            'opacity': '0'
        });
        $('#immersive-right-1').css('display', 'block');
        $('#immersive-wrong-1').css('display', 'none')
    }
    else {
        $('#immersive-wrong-1').css('display', 'block')
    }

});
var comp2 = 0;


$( '#slider-2' ).slider({
    min: 0,
    max: 10,
    value: 5,
    range: "min",
    slide: function( event, ui ) {
        comp2 = ui.value;
        $('#emm-3').css('font-size', (20 - (ui.value)) + 'px');
        $('#emm-4').css('font-size', ((ui.value) + 10) + 'px');
    }
});

$("#immersive-check-2").click(function(){
    if (comp2 <= 3) {
        $('#immersive-comp-2').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        $(this).css({
            'visibility': 'hidden',
            'opacity': '0'
        });
        $('#immersive-right-2').css('display', 'block');
        $('#immersive-wrong-2').css('display', 'none')
    }
    else {
        $('#immersive-wrong-2').css('display', 'block')
    }

});

$('.content').click(function(){
   if ($(this).hasClass('content-1')){
       $('#content-1').css('display', 'block');
       $('#content-2').css('display', 'none');
       $('#content-3').css('display', 'none');
       $('.content').css('opacity', '0.4');
       $(this).css('opacity', '1');
   }
   else if ($(this).hasClass('content-2')){
       $('#content-1').css('display', 'none');
       $('#content-2').css('display', 'block');
       $('#content-3').css('display', 'none');
       $('.content').css('opacity', '0.4');
       $(this).css('opacity', '1');
   }
   else if ($(this).hasClass('content-3')){
       $('#content-1').css('display', 'none');
       $('#content-2').css('display', 'none');
       $('#content-3').css('display', 'block');
       $('.content').css('opacity', '0.4');
       $(this).css('opacity', '1');
   }

});

var i = 0;

$('#stereo-next').click(function(){
    var stereotext = ["First, stare at the circle above and close your left eye.", "Then open it and close your right eye.", "Notice how the object moves to the side ever so slightly?", "With both eyes open in a HMD, your brain merges the two inputs to create one image.", "In VR two slightly off-set images are shown to your eyes and the brain does the rest."];
    $('#stereo-text').text(stereotext[i]);
    if (i < 4){
        i += 1;
    }
    else {
        $('#stereo-next').css('display', 'none');
        $('#stereo-comp').css('display', 'inline-block');
    }
});
var sick = 0;
$('.sickbox').click(function() {
    sick = 0;
    $('.sickbox').find('.inner').css('width', '0%');
    $(this).find('.inner').css('width', '100%');
});

$('#sick-right').click(function() {
    sick = 1;
});

$('#sick-check').click(function(){
    if (sick == 1){
        $('#sick-comp').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        $(this).css({
            'visibility': 'hidden',
            'opacity': '0'
        });
        $('#sick-wrong').css('display', 'none');
        $('#sick-right-text').css('display', 'block')
    }
    else {
        $('#sick-wrong').css('display', 'block')
    }
});

var gaming = 0;
$('.gamingbox').click(function() {
    gaming = 0;
    $('.gamingbox').find('.inner').css('width', '0%');
    $(this).find('.inner').css('width', '100%');
});

$('#gaming-right').click(function() {
    gaming = 1;
});

$('#gaming-check').click(function(){
    if (gaming == 1){
        $('#gaming-comp').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        $(this).css({
            'visibility': 'hidden',
            'opacity': '0'
        });
        $('#gaming-wrong').css('display', 'none');
        $('#gaming-right-text').css('display', 'block')

    }
    else {
        $('#gaming-wrong').css('display', 'block')
    }
});


var industry = 0;
$('.indbox').click(function() {
    if ($(this).find('.inner').css('width') == '0px'){
        industry ++;
        if (industry >=6) {
            $('#industry-comp').css({
                'visibility': 'visible',
                'opacity': '1'
            });
            $('#indboxcont').css({
                'display': 'none'
            });
            $('#indcomp').css({
                'display': 'block'
            });
        }
    }
    $(this).find('.inner').css('width', '100%');
});

var emp = 0;
$('.empbox').click(function() {
    emp = 0;
    $('.empbox').find('.inner').css('width', '0%');
    $(this).find('.inner').css('width', '100%');
});

$('#emp-right').click(function() {
    emp = 1;
});

$('#emp-check').click(function(){
    if (emp == 1){
        $('#emp-comp').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        $(this).css({
            'visibility': 'hidden',
            'opacity': '0'
        });
        $('#emp-wrong').css('display', 'none');
        $('#emp-right-text').css('display', 'block')
    }
    else {
        $('#emp-wrong').css('display', 'block')
    }
});



var sew = 0;
$('.sewbox').click(function() {
    sew = 0;
    $('.sewbox').find('.inner').css('width', '0%');
    $(this).find('.inner').css('width', '100%');
});

$('#sew-right').click(function() {
    sew = 1;
});

$('#sew-check').click(function(){
    if (sew == 1){
        $('#sew-comp').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        $(this).css({
            'visibility': 'hidden',
            'opacity': '0'
        });
        $('#sew-wrong').css('display', 'none');
        $('#sew-right-text').css('display', 'block')

    }
    else {
        $('#sew-wrong').css('display', 'block')
    }
});



$('.sensbox').click(function() {
    $(this).find('.inner').toggleClass('full');
});


$('#sens-check').click(function(){
    if ($('#sens-right-1').find('.inner').css('width') !== '0px' && $('#sens-right-2').find('.inner').css('width') !== '0px' && $('#sens-right-3').find('.inner').css('width') !== '0px'  && $('#sens-wrong-1').find('.inner').css('width') == '0px'  && $('#sens-wrong-2').find('.inner').css('width') == '0px'){
        $('#sens-comp').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        $(this).css({
            'visibility': 'hidden',
            'opacity': '0'
        });
        $('#sens-wrong').css('display', 'none');
        $('#sens-right').css('display', 'block')
    }
    else {
        $('#sens-wrong').css('display', 'block')
    }
});

var i2 = 0;
$('.bin').droppable({
    accept: "#ans-drag33",
    drop: function( event, ui ) {
        $(this).addClass('flashy').delay(1000).queue(function() {
            $(this).removeClass('flashy');
            $(this).dequeue();
        });
        ui.draggable.remove();
        i2 ++;
        if (i2 >= 1) {
            setTimeout(function(){
                $('#part-bar').css('width', '100%');
                return show('Page49','Page48');
            }, 500)
        }
    }
});


$('.prog10').click(function(){$('.part-bar').css('width', '32%');});
$('.prog10b').click(function(){$('.part-bar').css('width', '16%');});
$('.prog20').click(function(){$('.part-bar').css('width', '48%');});
$('.prog20b').click(function(){$('.part-bar').css('width', '32%');});
$('.prog30').click(function(){$('.part-bar').css('width', '64%');});
$('.prog30b').click(function(){$('.part-bar').css('width', '48%');});
$('.prog40').click(function(){$('.part-bar').css('width', '80%');});
$('.prog40b').click(function(){$('.part-bar').css('width', '64%');});
$('.prog50').click(function(){$('.part-bar').css('width', '100%');});
$('.prog50b').click(function(){$('.part-bar').css('width', '80%');});



$('#linkreveal').click(function(){
    $('#linknext').css({
        'visibility': 'visible',
        'opacity': '1'
    });
});
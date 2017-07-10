$(document).ready(function () {

});
$('.hue-4-1').click(function () {
    $('#slider-1').slider('value', 0);
    $("#background").css('background-color', 'red');
});
$('.hue-4-2').click(function () {
    $('#slider-1').slider('value', 2);
    $("#background").css('background-color', 'yellow');
});
$('.hue-4-3').click(function () {
    $('#slider-1').slider('value', 6);
    $("#background").css('background-color', 'blue');
});
$('.hue-4-4').click(function () {
    $('#slider-1').slider('value', 3);
    $("#background").css('background-color', 'green');
});
$('.sat-4-1').click(function () {
    $('#slider-2').slider('value', 0);
    $("#background").css('background-color', '#828282');
});
$('.sat-4-2').click(function () {
    $('#slider-2').slider('value', 3);
    $("#background").css('background-color', '#918f6b');
});
$('.sat-4-3').click(function () {
    $('#slider-2').slider('value', 6);
    $("#background").css('background-color', '#b2ab33');
});
$('.sat-4-4').click(function () {
    $('#slider-2').slider('value', 10);
    $("#background").css('background-color', '#e7df03');
});
$('.lig-4-1').click(function () {
    $('#slider-2').slider('value', 0);
    $("#background").css('background-color', '#333333');
});
$('.lig-4-2').click(function () {
    $('#slider-2').slider('value', 3);
    $("#background").css('background-color', '#626262');
});
$('.lig-4-3').click(function () {
    $('#slider-2').slider('value', 6);
    $("#background").css('background-color', '#a4a4a4');
});
$('.lig-4-4').click(function () {
    $('#slider-2').slider('value', 10);
    $("#background").css('background-color', '#e4e4e4');
});

$('.bright').click(function () {
    if ($(this).hasClass('bright-yes')) {
        $('#suntext').text("You're wrong!")
    }
    if ($(this).hasClass('bright-no')) {
        $('#suntext').text("You're right!")
    }
    $('#bright-answer').css('display', 'block');
    $('#background').css('background-color', '#fff5f2');
});

$('#ts-comp-3').click(function () {
    $('.cont-mid').css('background-color', 'rgba(163,224,122,0.7)')
});

$('.whiteout').click(function () {
    $('.cont-mid').css('background-color', 'rgba(255,255,255,1)')
});
$('.unwhiteout').click(function () {
    $('.cont-mid').css('background-color', 'rgba(255,255,255,0.7)')
});
$('#ts-comp-3').click(function () {
    $('.cont-mid').css('background-color', 'rgba(163,224,122,0.7)')
});
$(function () {


    $('#pantone-drop').droppable({
        accept: "#shirt",
        drop: function (event) {
            $(this).addClass('dropped');

            if ($(this).hasClass('dropped') && $('#rgb-drop').hasClass('dropped') && $('#cmyk-drop').hasClass('dropped')) {
                $('#dropped-comp-2').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#dropped-comp-text-2').css({
                    'display': 'block'
                });
                $('#background').css({
                    'background-color': '#6bdc84'
                })
            }
        }
    });
    $('#rgb-drop').droppable({
        accept: "#computer",
        drop: function (event) {
            $(this).addClass('dropped');

            if ($(this).hasClass('dropped') && $('#cmyk-drop').hasClass('dropped') && $('#pantone-drop').hasClass('dropped')) {
                $('#dropped-comp-2').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#dropped-comp-text-2').css({
                    'display': 'block'
                });
                $('#background').css({
                    'background-color': '#6bdc84'
                })
            }
        }
    });
    $('#cmyk-drop').droppable({
        accept: "#paper",
        drop: function () {
            $(this).addClass('dropped');

            if ($(this).hasClass('dropped') && $('#rgb-drop').hasClass('dropped') && $('#pantone-drop').hasClass('dropped')) {
                $('#dropped-comp-2').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#dropped-comp-text-2').css({
                    'display': 'block'
                });
                $('#background').css({
                    'background-color': '#6bdc84'
                })
            }
        }
    });
});
$(function () {
    $("#draggable").draggable({
        revert: "invalid"
    });
    $("#draggable2").draggable({
        revert: "invalid"
    });
    $("#shirt").draggable({
        revert: "invalid"
    });
    $("#paper").draggable({
        revert: "invalid"
    });
    $("#computer").draggable({
        revert: "invalid"
    });


    $('#droppable').droppable({
        accept: "#draggable2",
        drop: function () {
            $(this).addClass('dropped');

            if ($(this).hasClass('dropped') && $('#droppable2').hasClass('dropped')) {
                $('#dropped-comp').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#dropped-comp-text').css({
                    'display': 'block'
                })
            }
        }
    });

    $('#droppable2').droppable({
        accept: "#draggable",
        drop: function (event) {
            $(this).addClass('dropped');
            if ($(this).hasClass('dropped') && $('#droppable').hasClass('dropped')) {
                $('#dropped-comp').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#dropped-comp-text').css({
                    'display': 'block'
                })
            }
        }
    });
});
$('#start-space').click(function () {
    $('#background-light').css({
        'background-color': 'rgba(255, 255, 255, 0)'
    });
    $('#background').css({
        'background-image': 'url(./images/bg-star.jpg)'
    })
});
$('#hidethree').click(function () {
    $('#three').css({
        'display': 'none'
    })
});
$('#dropped-comp-after').click(function () {
    $('#background').css({
        'background-color': 'black'
    });
    $('#background-light').css({
        'background-color': 'rgba(255, 255, 255, 0)'
    });
    $('#background-extra').css({
        'background-color': 'rgba(255, 255, 255, 0)'
    })
});
$('#match-2').click(function () {
    $('#background-light').css({
        'background-color': 'rgba(255, 255, 255, 0)'
    });
    $('#background').removeClass('stripes')
});
$('#beginning-btn').click(function () {
    $('.splat').css({
        'opacity': '0.5'
    });

    $('#background').removeClass('stripes')
});
$('.part1').click(function () {
    $('.part-bar').css({
        'width': '20%'
    })
});


$('#start-2').click(function () {
    $('.part-bar').css({
        'width': '40%'
    });
    $('.cont-mid').css({
        'background-color': 'rgba(255, 255, 255, 1)'
    });
    $('#background-extra').css({
        'background-color': 'rgba(255, 255, 255, 0)'
    })
});
$('#start-3').click(function () {
    $('.part-bar').css({
        'width': '60%'
    });
    $('.cont-mid').css({
        'background-color': 'rgba(255, 255, 255, 0.95)'
    });

    $('#background-light').css({
        'background-color': 'rgba(255, 255, 255, 1)'
    })
});
$('#start-4').click(function () {
    $('.part-bar').css({
        'width': '80%'
    })
});


$('#start-2-back').click(function () {
    $('.part-bar').css({
        'width': '20%'
    })

});
$('#start-3-back').click(function () {
    $('.part-bar').css({
        'width': '40%'

    })
});
$('#start-4-back').click(function () {
    $('.part-bar').css({
        'width': '60%'
    })
});

$('.final-bar').click(function () {
    $('.part-bar').css({
        'width': '100%'
    })
});
$('.final-bar-back').click(function () {
    $('.part-bar').css({
        'width': '80%'
    })
});
$('#bright-close').click(function () {
    $('#background-extra').css({
        'background-color': 'rgba(0,0,0,0)'
    });
    $('#background').css({
        'background-color': 'rgba(0,0,0,0)'
    });
    $('#background-light').css({
        'background-color': 'rgba(0,0,0,0)'
    })
});

$('.hue-sat').click(function () {
    $('#background').css({
        'background-color': '#858585'
    })
});
$('.sat-hue').click(function () {
    $('#background').css({
        'background-color': '#FF534C'
    })
});
$('.sat-lig').click(function () {
    $('#background').css({
        'background-color': '#151515'
    })
});
$('.lig-sat').click(function () {
    $('#background').css({
        'background-color': '#858585'
    })
});
$('.lig-match').click(function () {
    $('#background').css({
        'background-color': 'grey'
    })
});
$('.btn-purple').click(function () {
    $('.cont-mid').toggleClass('purplemore');
});
$('.un-white').click(function () {
    $('.cont-mid').css('background-color', 'rgba(255, 255, 255, 0.85)');
});
$('#match-1').click(function () {
    $('#background-extra').css('background-color', 'rgba(255, 83, 76, 0)');
    $('#background').css('background-color', '#808080');
});

// Paint Circle

var paintcount = 0;
var circle = $('#circle-progress');

$('#paint-btn').click(function () {
    if (paintcount === 0) {
        $('#cp-1').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        circle.removeClass('p0');
        circle.addClass('p20');
        paintcount++
    }
    else if (paintcount === 1) {
        $('#cp-2').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        circle.removeClass('p20');
        circle.addClass('p40');
        paintcount += 1
    }

    else if (paintcount === 2) {
        $('#cp-3').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        circle.removeClass('p40');
        circle.addClass('p60');
        paintcount += 1

    }
    else if (paintcount === 3) {
        $('#cp-4').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        circle.removeClass('p60');
        circle.addClass('p80');
        paintcount += 1

    }
    else {
        $('#cp-5').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        circle.removeClass('p80');
        circle.addClass('p100');
        paintcount += 1;
        $('#cp-5').css({
            'visibility': 'visible',
            'opacity': '1'
        });
        circle.css('opacity', '0')
            .delay(500)
            .queue(function (next) {
                circle.css('display', 'none');
                $('.cpexp').css('display', 'block');
                $('#cp-next').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                next();
            })


    }
});

//Colour Match Sliders

$(document).ready(function () {
    hueArr = ["#FF534C", "#ff9800", "#FFBE55", "#BEFF39", "#57FF6E", "#64FFF3", "#5CBCFF", "#5E58FF", "#B250FF", "#FF6BEA", "#FF65AC"];
    satArr = ["#858585", "#8b887e", "#938c73", "#9d9066", "#a6955a", "#b19a4c", "#bfa13a", "#cba72b", "#d4ac1e", "#ddb012", "#e9b602"];
    ligArr = ["#151515", "#272727", "#3a3a3a", "#525251", "#6b6b6b", "#878787", "#a4a4a4", "#bfbebe", "#d6d6d7", "#ececec", "#ffffff"];
    ligArr2 = ["rgba(0,0,0,1)", "rgba(0,0,0,0.8)", "rgba(0,0,0,0.6)", "rgba(0,0,0,0.4)", "rgba(0,0,0,0.2)", "rgba(255,255,255,0)", "rgba(255,255,255,0.2)", "rgba(255,255,255,0.4)", "rgba(255,255,255,0.6)", "rgba(255,255,255,0.8)", "rgba(255,255,255,1)"];
    rArr = ["255", "255", "255", "190", "87", "100", "92", "94", "178", "255", "255"];
    gArr = ["83", "152", "190", "255", "255", "255", "188", "88", "80", "107", "101"];
    bArr = ["76", "0", "85", "57", "110", "243", "255", "255", "255", "234", "172"];
    aArr = ["0", "0.1", "0.2", "0.3", "0.4", "0.5", "0.6", "0.7", "0.8", "0.9", "1"];


    $('#slider-1').slider({
        min: 0,
        max: 10,
        range: "min",
        slide: function (event, ui) {
            hue = hueArr[ui.value];
            $("#background").css('background-color', hue);
        }
    });

    $('#slider-2').slider({
        min: 0,
        max: 10,
        range: "min",
        slide: function (event, ui) {
            sat = satArr[ui.value];
            $("#background").css('background-color', sat);
        }
    });

    $('#slider-3').slider({
        min: 0,
        max: 10,
        range: "min",
        slide: function (event, ui) {
            lig = ligArr[ui.value];
            $("#background").css('background-color', lig);
        }
    });
    r = 255;
    g = 83;
    b = 76;
    a = 0;

    $('#match-1').click(function () {
        a = 0;
    });

    /* Match - 1 - Sliders */

    $('#slider-4').slider({
        min: 0,
        max: 10,
        range: "min",

        slide: function (event, ui) {
            a = aArr[ui.value];
            $("#background-extra").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
            $("#colour-match-1").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
            if (($('#slider-5').slider('option', 'value') == 7) && (ui.value == 5)) {
                $('#match-1').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#match-1-comp').css({
                    'display': 'block'
                });
            }
        }
    });

    $('#slider-5').slider({
        min: 0,
        max: 10,
        range: "min",
        slide: function (event, ui) {
            r = rArr[ui.value];
            g = gArr[ui.value];
            b = bArr[ui.value];
            if (($('#slider-4').slider('option', 'value') == 5) && (ui.value == 7)) {
                $('#match-1').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#match-1-comp').css({
                    'display': 'block'
                });
            }
            $("#background-extra").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
            $("#colour-match-1").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
        }
    });
    /* Match - 2 - Sliders */

    $('#slider-6').slider({
        min: 0,
        max: 10,
        range: "min",
        slide: function (event, ui) {
            a = aArr[ui.value];
            if (($('#slider-8').slider('option', 'value') == 6) && (ui.value == 7) && ($('#slider-7').slider('option', 'value') == 2) || ($('#slider-8').slider('option', 'value') == 7) && (ui.value == 6) && ($('#slider-7').slider('option', 'value') == 1)) {
                $('#match-2').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#match-2-comp').css({
                    'display': 'block'
                });
            }
            $("#background-extra").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
            $("#colour-match-2").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
        }
    });

    $('#slider-7').slider({
        min: 0,
        max: 10,
        range: "min",
        slide: function (event, ui) {
            r = rArr[ui.value];
            g = gArr[ui.value];
            b = bArr[ui.value];
            if (($('#slider-8').slider('option', 'value') == 6) && (ui.value == 2) && ($('#slider-6').slider('option', 'value') == 7) || ($('#slider-8').slider('option', 'value') == 7) && (ui.value == 1) && ($('#slider-6').slider('option', 'value') == 6)) {
                $('#match-2').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#match-2-comp').css({
                    'display': 'block'
                });
            }

            $("#background-extra").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
            $("#colour-match-2").css('background-color', 'rgba(' + r + ', ' + g + ', ' + b + ', ' + a + ')');
        }
    });
    $('#slider-8').slider({
        min: 0,
        max: 10,
        range: "min",
        slide: function (event, ui) {
            light = ligArr2[ui.value];
            if (($('#slider-7').slider('option', 'value') == 2) && (ui.value == 6) && ($('#slider-6').slider('option', 'value') == 7) || ($('#slider-7').slider('option', 'value') == 1) && (ui.value == 7) && ($('#slider-6').slider('option', 'value') == 6)) {
                $('#match-2').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#match-2-comp').css({
                    'display': 'block',
                });
            }
            $("#background-light").css('background-color', light);
            $("#match-2-light").css('background-color', light);
        }
    });


    $('#disco-time').click(function () {
        start = 1;
        i = 0;
        adds = setInterval(function () {
            i++;
            {
                disco();
            }
        }, 200);
        count = 0;
        function disco() {
            if (count < 3 && start != 0) {
                $('#disco-time').css('visibility', 'hidden');
                if (i > 10) {
                    i = 0;
                    count += 1
                }
                $('#slider-1').slider('value', i);
                hue = hueArr[i];
                $("#background").css('background-color', hue);
                $("#background").css('transition', 'all 0.1s');
            }
            else {
                start = 0;
                i = 0;
                count = 0;
                $('#slider-1').slider('value', i);
                clearInterval(adds);
                $("#background").css('transition', 'all 1s');
                $("#background").css('background-color', hueArr[0]);
                $('#disco-time').css('visibility', 'visible')
            }
        }
    });
    
// Recap Quiz
    
    
    question1score = 0;
    question2score = 0;
    question3score = 0;
    part1test1arr = ['Hue', 'hue', 'Hues', 'hues', 'hues ', 'hue ', 'Hue ', 'Hues '];
    part1test2arr = ['saturation', 'Saturation', 'chroma', 'chroma', 'saturation ', 'Saturation '];
    part1test3arr = ['Lightness', 'Brightness', 'lightness', 'brightness', 'Lightness ', 'lightness '];


    $('#part1-test-1btn').click(function () {
        var value1 = document.getElementById("part1-test-1").value;
        if ($.inArray(value1, part1test1arr) != -1) {
            question1score = 33;
            $("#part1-test-1wrong").css('display', 'none');
            $("#part1-test-1btn").css('display', 'none');
            $("#part1-test-1").css('background-color', 'rgba(154, 216, 149, 0.3)')

        }
        else {
            $("#part1-test-1wrong").css('display', 'block')
        }
        $('#part1-test-progress').css('width', question1score + question2score + question3score + '%');
        if (question1score + question2score + question3score == 100) {
            $('.part1-test-comp').css('display', 'block');
            $('.match-3').css({
                'visibility': 'visible',
                'opacity': '1'
            });
        }
    });
    $('#part1-test-2btn').click(function () {
        var value2 = document.getElementById("part1-test-2").value;
        if ($.inArray(value2, part1test2arr) != -1) {
            question2score = 33;
            $('#part1-test-2wrong').css('display', 'none');
            $("#part1-test-2btn").css('display', 'none');
            $("#part1-test-2").css('background-color', 'rgba(154, 216, 149, 0.3)')
        }
        else {

            $('#part1-test-2wrong').css('display', 'block')
        }
        $('#part1-test-progress').css('width', question1score + question2score + question3score + '%');
        if (question1score + question2score + question3score == 100) {
            $('.part1-test-comp').css('display', 'block');
            $('.match-3').css({
                'visibility': 'visible',
                'opacity': '1'
            });
        }

    });
    $('#part1-test-3btn').click(function () {
        var value3 = document.getElementById("part1-test-3").value;
        if ($.inArray(value3, part1test3arr) != -1) {
            question3score = 34;
            $('#part1-test-3wrong').css('display', 'none');
            $("#part1-test-3btn").css('display', 'none');
            $("#part1-test-3").css('background-color', 'rgba(154, 216, 149, 0.3)')
        }
        else {
            $('#part1-test-3wrong').css('display', 'block')
        }
        $('#part1-test-progress').css('width', question1score + question2score + question3score + '%');
        if (question1score + question2score + question3score == 100) {
            $('.part1-test-comp').css('display', 'block');
            $('.match-3').css({
                'visibility': 'visible',
                'opacity': '1'
            });
        }

    })

});
$("#part1-test-1").keyup(function (event) {
    if (event.keyCode == 13) {
        $("#part1-test-1btn").click();
    }
});
$("#part1-test-2").keyup(function (event) {
    if (event.keyCode == 13) {
        $("#part1-test-2btn").click();
    }
});
$("#part1-test-3").keyup(function (event) {
    if (event.keyCode == 13) {
        $("#part1-test-3btn").click();
    }
});

//Quiz on Space/Spectrum definitions

var progresstotal2 = 0;
question31 = 0;
question32 = 0;
part3test1arr = ['spectrum', 'visible spectrum', 'Spectrum', 'Spectrum ', 'spectrum ', 'Visible Spectrum', 'Visible spectrum', 'Visible spectrum ', 'visible spectrum ', 'Visible Spectrum '];
part3test2arr = ['colour space', 'Colour space', 'space', 'space ', 'Space ', 'Space', 'Colour Space', 'colour space ', 'Colour space ', 'Colour Space ', 'Colour Spaces', 'Colour Spaces ', 'Colour spaces', 'Colour spaces '];

$('#part3-test-1btn').click(function () {
    var value1 = document.getElementById("part3-test-1").value;
    if ($.inArray(value1, part3test1arr) != -1 && question31 < 1) {
        question31 += 1;
        progresstotal2 += 50;
        $("#part3-test-1wrong").css('display', 'none');
        $("#part3-test-1btn").css('display', 'none');
        $("#part3-test-1").css('background-color', 'rgba(154, 216, 149, 0.3)')

    }
    else {
        $("#part3-test-1wrong").css('display', 'block')
    }
    $('#part3-test-progress').css('width', progresstotal2 + '%');
    if (progresstotal2 == 100) {
        $('.part3-test-comp').css('display', 'block');
        $('#part3-test-next').css({
            'visibility': 'visible',
            'opacity': '1'
        });
    }
});
$('#part3-test-2btn').click(function () {
    var value2 = document.getElementById("part3-test-2").value;
    if ($.inArray(value2, part3test2arr) != -1 && question32 < 1) {
        question32 += 1;
        progresstotal2 += 50;
        $('#part3-test-2wrong').css('display', 'none');
        $("#part3-test-2btn").css('display', 'none');
        $("#part3-test-2").css('background-color', 'rgba(154, 216, 149, 0.3)')
    }
    else {

        $('#part3-test-2wrong').css('display', 'block')
    }
    $('#part3-test-progress').css('width', progresstotal2 + '%');
    if (progresstotal2 == 100) {
        $('.part3-test-comp').css('display', 'block');
        $('#part3-test-next').css({
            'visibility': 'visible',
            'opacity': '1'
        });
    }

});


$("#part3-test-1").keyup(function (event) {
    if (event.keyCode == 13) {
        $("#part3-test-1btn").click();
    }
});
$("#part3-test-2").keyup(function (event) {
    if (event.keyCode == 13) {
        $("#part3-test-2btn").click();
    }
});

var angle = 360;

$('.about-rotate').click(function () {
    //$(this).toggleClass('active');
    $(this).css({
        '-webkit-transform': 'rotate(' + angle + 'deg)',
        '-moz-transform': 'rotate(' + angle + 'deg)',
        '-o-transform': 'rotate(' + angle + 'deg)',
        '-ms-transform': 'rotate(' + angle + 'deg)'
    });
    angle += 360;
});


// RGB Slider

function hex(k) {
    var s = k.toString(16);
    if (k < 16) {
        s = '0' + s;
    }
    return s;
}

function colorChange(ui) {
    var r = $("#red").slider("value");
    var g = $("#green").slider("value");
    var b = $("#blue").slider("value");
    $("#color").text("red:" + r + " green:" + g + " blue:" + b);
    $("#background").css('background-color', 'rgb( ' + r + ', ' + g + ', ' + b + ')');
    doDraw(hex(r), hex(g), hex(b));
}

function initSlider(id) {
    $(id).slider({max: 255, slide: colorChange, change: colorChange});
}

function doDraw(r, g, b) {
    var dc = document.getElementById('drawing');
    if (dc && dc.getContext) {
        var cxt = dc.getContext('2d');

        cxt.clearRect(0, 0, dc.width, dc.height);
        cxt.globalCompositeOperation = 'lighter';
        cxt.strokeStyle = "#000000";


        // red
        cxt.fillStyle = "#" + r + "0000";
        cxt.fillRect(0, 0, dc.width * 7 / 8, dc.height * 7 / 8);  // xywh

        // green
        cxt.fillStyle = "#00" + g + "00";
        cxt.fillRect(dc.width / 8, 0, dc.width * 6 / 8, dc.height);  // xywh

        // blue
        cxt.fillStyle = "#0000" + b;
        cxt.fillRect(dc.width / 8, 0, dc.width * 7 / 8, dc.height * 7 / 8);  // xywh
    }
}

$(document).ready(function () {
    initSlider("#red");
    initSlider("#green");
    initSlider("#blue");
});


// Colour Schemes


$(document).ready(function () {

    part4testtype = ['COMPLEMENTARY', 'COMPLEMENTARY', 'TRIADIC', 'MONOCHROMATIC', 'ANALOGOUS'];
    part4testtypehint = ['Hint: Purples and Yellows', 'Hint: Purples and Yellows', 'Hint: Pinks, Oranges and Green-y Blues', 'Hint: All the blue colours!', 'Hint: Yellows, Greens and Green-y Blues.'];
    cst1arr = ['#9858a4', '#3ca6a0', '#d9eafc', '#8dba00'];
    cst2arr = ['#b789c6', '#b0b0b0', '#abcef1', '#badc74'];
    cst3arr = ['#f4f633', '#ae2c2c', '#60a6e0', '#59ada6'];
    cst4arr = ['#f7ef93', '#d53b9d', '#3d96d4', '#487cff'];
    imageArr = ['complementary.png', 'complementary.png', 'triadic.png', 'monochromatic.png', 'analogous.png', 'analogous.png'];
    cmcount = 1;
    cm1 = 1;
    cm2 = 3;
    cm3 = 2;
    cm4 = 0;
    $('.cm-1').click(function () {
        $(this).css({
            'background-color': cst1arr[cm1]
        });

        if (cm1 < 4) {
            cm1++
        }
        else {
            cm1 = 0
        }
        if (cm1 == cmcount && cm2 == cmcount && cm3 == cmcount && cm4 == cmcount && cmcount < 5) {
            cmcount++;
            $('#cs-text').text(part4testtype[cmcount]).fadeIn(500);
            $('#cs-help').text(part4testtypehint[cmcount]).fadeIn(500);
            $('#cs-pic').css('background-image', 'url(./images/' + imageArr[cmcount] + ')');
            $('#cs-pic').css({
                '-webkit-transform': 'rotate(' + angle + 'deg)',
                '-moz-transform': 'rotate(' + angle + 'deg)',
                '-o-transform': 'rotate(' + angle + 'deg)',
                '-ms-transform': 'rotate(' + angle + 'deg)'
            });
            angle += 360;

        }
        if (cmcount > 4) {
            $('#cs-comp').css({
                'visibility': 'visible',
                'opacity': '1'
            });
            $('#cs-pic').css({
                'display': 'none'
            });
            $('#cs-help').css({
                'display': 'none',
            });
            $('#cs-intro').css({
                'display': 'none',
            });
            $('#cs-comp-congrats').css({
                'display': 'block',
            });
            $('#cs-text').text('WELL DONE!')
        }
        if (cmcount == 2) {
            cst2arr[1] = '#fe7c00';
            cst3arr[3] = '#8359ad';
            cst3arr[1] = '#fabae3';
        }
        if (cmcount == 3) {
            cst4arr[3] = '#ffec48'
        }
        if (cmcount == 4) {
            cst1arr[1] = '#b0b0b0';
            cst3arr[0] = '#b0b0b0';
            cst3arr[3] = '#3ca6a0';
            cst4arr[0] = '#d53b9d'

        }
    });
    $('.cm-2').click(function () {
        $(this).css({
            'background-color': cst2arr[cm2]
        });
        if (cm2 < 4) {
            cm2++
        }
        else {
            cm2 = 0
        }
        if (cm1 == cmcount && cm2 == cmcount && cm3 == cmcount && cm4 == cmcount && cmcount < 5) {
            cmcount++;
            $('#cs-text').text(part4testtype[cmcount]).fadeIn(500);
            $('#cs-help').text(part4testtypehint[cmcount]).fadeIn(500);
            $('#cs-pic').css('background-image', 'url(./images/' + imageArr[cmcount] + ')');
            $('#cs-pic').css({
                '-webkit-transform': 'rotate(' + angle + 'deg)',
                '-moz-transform': 'rotate(' + angle + 'deg)',
                '-o-transform': 'rotate(' + angle + 'deg)',
                '-ms-transform': 'rotate(' + angle + 'deg)'
            });
            angle += 360;
        }
        if (cmcount > 4) {
            $('#cs-comp').css({
                'visibility': 'visible',
                'opacity': '1'
            });
            $('#cs-pic').css({
                'display': 'none',
            });
            $('#cs-help').css({
                'display': 'none',
            });
            $('#cs-intro').css({
                'display': 'none',
            });
            $('#cs-comp-congrats').css({
                'display': 'block',
            });
            $('#cs-text').text('WELL DONE!')
        }
        if (cmcount == 2) {
            cst2arr[1] = '#fe7c00';
            cst3arr[3] = '#8359ad';
            cst3arr[1] = '#fabae3';
        }
        if (cmcount == 3) {
            cst4arr[3] = '#ffec48'
        }
        if (cmcount == 4) {
            cst1arr[1] = '#b0b0b0';
            cst3arr[0] = '#b0b0b0';
            cst3arr[3] = '#3ca6a0';
            cst4arr[0] = '#d53b9d'

        }
    });
    $('.cm-3').click(function () {
        $(this).css({
            'background-color': cst3arr[cm3]
        });
        if (cm3 < 4) {
            cm3++
        }
        else {
            cm3 = 0
        }
        if (cm1 == cmcount && cm2 == cmcount && cm3 == cmcount && cm4 == cmcount && cmcount < 5) {
            cmcount++;
            $('#cs-text').text(part4testtype[cmcount]).fadeIn(500);
            $('#cs-help').text(part4testtypehint[cmcount]).fadeIn(500);
            $('#cs-pic').css('background-image', 'url(./images/' + imageArr[cmcount] + ')');
            $('#cs-pic').css({
                '-webkit-transform': 'rotate(' + angle + 'deg)',
                '-moz-transform': 'rotate(' + angle + 'deg)',
                '-o-transform': 'rotate(' + angle + 'deg)',
                '-ms-transform': 'rotate(' + angle + 'deg)'
            });
            angle += 360;
        }
        if (cmcount > 4) {
            $('#cs-comp').css({
                'visibility': 'visible',
                'opacity': '1'
            });
            $('#cs-pic').css({
                'display': 'none'
            });
            $('#cs-help').css({
                'display': 'none',
            });
            $('#cs-intro').css({
                'display': 'none',
            });
            $('#cs-comp-congrats').css({
                'display': 'block',
            });
            $('#cs-text').text('WELL DONE!')
        }
        if (cmcount == 2) {
            cst2arr[1] = '#fe7c00';
            cst3arr[3] = '#8359ad';
            cst3arr[1] = '#fabae3';
        }
        if (cmcount == 3) {
            cst4arr[3] = '#ffec48'
        }
        if (cmcount == 4) {
            cst1arr[1] = '#b0b0b0';
            cst3arr[0] = '#b0b0b0';
            cst3arr[3] = '#3ca6a0';
            cst4arr[0] = '#d53b9d'


        }
    });
    $('.cm-4').click(function () {
        $(this).css({
            'background-color': cst4arr[cm4]
        });
        if (cm4 < 4) {
            cm4++
        }
        else {
            cm4 = 0
        }
        if (cm1 == cmcount && cm2 == cmcount && cm3 == cmcount && cm4 == cmcount && cmcount < 5) {
            cmcount++;
            $('#cs-text').text(part4testtype[cmcount]).fadeIn(500);
            $('#cs-help').text(part4testtypehint[cmcount]).fadeIn(500);
            $('#cs-pic').css('background-image', 'url(./images/' + imageArr[cmcount] + ')');
            $('#cs-pic').css({
                '-webkit-transform': 'rotate(' + angle + 'deg)',
                '-moz-transform': 'rotate(' + angle + 'deg)',
                '-o-transform': 'rotate(' + angle + 'deg)',
                '-ms-transform': 'rotate(' + angle + 'deg)'
            });
            angle += 360;
            if (cmcount > 4) {
                $('#cs-comp').css({
                    'visibility': 'visible',
                    'opacity': '1'
                });
                $('#cs-pic').css({
                    'display': 'none'
                });
                $('#cs-help').css({
                    'display': 'none',
                });
                $('#cs-intro').css({
                    'display': 'none',
                });
                $('#cs-comp-congrats').css({
                    'display': 'block',
                });
                $('#cs-text').text('WELL DONE!')
            }
        }
        if (cmcount == 2) {
            cst2arr[1] = '#fe7c00';
            cst3arr[3] = '#8359ad';
            cst3arr[1] = '#fabae3';
        }
        if (cmcount == 3) {
            cst4arr[3] = '#ffec48'
        }
        if (cmcount == 4) {
            cst1arr[1] = '#b0b0b0';
            cst3arr[0] = '#b0b0b0';
            cst3arr[3] = '#3ca6a0';
            cst4arr[0] = '#d53b9d'
        }

    })
});

$(function () {
    var tscount1 = 0;
    $(".ts").draggable({
        revert: "invalid",

    });

    $('.ds-1').droppable({
        accept: "#ts3, #ts5, #ts15, #ts9, #ts10",
        drop: function (event) {
            $(this).droppable("destroy");
            tscount1++;
            $(this).css({'background-color': 'rgba(98, 239, 75, 0.5)'});
            if (tscount1 > 4) {
                $('#ts-comp').css({
                    'visibility': 'visible',
                    'opacity': '1'

                })
            }
        }

    });
});

$(function () {
    var tscount2 = 0;
    $(".ts2").draggable({
        revert: "invalid",

    });

    $('.ds-2').droppable({
        accept: "#ts23, #ts24, #ts28, #ts211, #ts215",
        drop: function (event) {
            $(this).droppable("destroy");
            tscount2++;
            $(this).css({'background-color': 'rgba(98, 239, 75, 0.5)'});
            if (tscount2 > 4) {
                $('#ts-comp-2').css({
                    'visibility': 'visible',
                    'opacity': '1'

                })
            }
        }

    });
});

$(function () {
    var tscount3 = 0;
    $(".ts3").draggable({
        revert: "invalid"

    });

    $('.ds-3').droppable({
        accept: "#ts31, #ts35, #ts37, #ts311, #ts316",
        drop: function (event) {
            $(this).droppable("destroy");
            tscount3++;
            $(this).css({'background-color': 'rgba(98, 239, 75, 0.5)'});
            if (tscount3 > 4) {
                $('#ts-comp-3').css({
                    'visibility': 'visible',
                    'opacity': '1'

                })
            }
        }

    });
});

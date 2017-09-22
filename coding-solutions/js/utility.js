/*
	_______________________________________________________

	UTILITY
	_______________________________________________________

*/

window.requestAnimFrame = (function () {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function ( /* function */ callback, /* DOMElement */ element) {
            window.setTimeout(callback, 1000 / 60);
        };
})();

window.requestTimeout = function (fn, delay) {
    if (!window.requestAnimationFrame &&
        !window.webkitRequestAnimationFrame &&
        !(window.mozRequestAnimationFrame && window.mozCancelRequestAnimationFrame) && // Firefox 5 ships without cancel support
        !window.oRequestAnimationFrame &&
        !window.msRequestAnimationFrame)
        return window.setTimeout(fn, delay);

    var start = new Date().getTime(),
        handle = new Object();

    function loop() {
        var current = new Date().getTime(),
            delta = current - start;

        delta >= delay ? fn.call() : handle.value = requestAnimFrame(loop);
    };

    handle.value = requestAnimFrame(loop);
    return handle;
};

window.clearRequestTimeout = function (handle) {
    window.cancelAnimationFrame ? window.cancelAnimationFrame(handle.value) :
        window.webkitCancelAnimationFrame ? window.webkitCancelAnimationFrame(handle.value) :
        window.webkitCancelRequestAnimationFrame ? window.webkitCancelRequestAnimationFrame(handle.value) : /* Support for legacy API */
        window.mozCancelRequestAnimationFrame ? window.mozCancelRequestAnimationFrame(handle.value) :
        window.oCancelRequestAnimationFrame ? window.oCancelRequestAnimationFrame(handle.value) :
        window.msCancelRequestAnimationFrame ? window.msCancelRequestAnimationFrame(handle.value) :
        clearTimeout(handle);
};

function debounce(func, wait, immediate) {
    var timeout;
    return function () {
        var context = this,
            args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

// SOUNDS

var wipe = new Howl({
    src: ['sounds/wipe.mp3'],
    volume: 1
});

var click = new Howl({
    src: ['sounds/click.mp3'],
    volume: 1
});

var strike = new Howl({
    src: ['sounds/strike.mp3'],
    volume: 0.5
});

function shake(obj) {
    TweenMax.fromTo(obj, 0.3, {x:-1}, {x:1, ease:RoughEase.ease.config({strength:8, points:20, template:Linear.easeNone, randomize:false}) , clearProps:"x"})
}

function moveUpDown(obj, t, a, x){
    TweenMax.to(obj, t, {
        autoAlpha: a,
        y: x + '%',
        ease: Power2.easeOut
    });
}

// FUNCTION CONTENT - LEFT PANEL AND BOTTOM INFO_HELP

var InfoContentSteps = function(stepData) {
    var $dataText = test.steps[stepData].step;
    var $dataTitle = test.steps[stepData].panel[0].title;
    var $dataTextPanel = test.steps[stepData].panel[0].text;

    var $contentPanel = '<h1 class="move-in">'+$dataTitle+'</h1><p class="move-in">'+$dataTextPanel+'</p><div class="block"></div>';
    $('#infoContent').empty().append($dataText);
    $('#panelContent h1').remove();
    $('#panelContent .block').remove();
    $('#panelContent').append($contentPanel);
};


// FUNCTION PANEL OPEN-CLOSE

var questionPanel = {

    // panel open

    open: function() {

        var side = $('#panel');

        wipe.play();

        TweenMax.to(side, 0.6, {
            x: 0,
            z: 1,
            pointerEvents: "auto",
            zIndex: 1000,
            force3D: true,
            ease: Power2.easeOut,
            onStart: function() {
//                TweenMax.to($('.main'), 1, {
//                    scale: 0.95,
//                    z: 1,
//                    force3D: true,
//                    ease: Power2.easeOut
//                });
                $('.main').addClass('disabled');
            }
        });

    },

    // panel close

    close: function() {

        var side = $('#panel');

        wipe.play();

        TweenMax.to(side, 0.2, {
            x: -100 + "%",
            z: 0,
            pointerEvents: "none",
            zIndex: -1000,
            force3D: true,
            ease: Power2.easeOut,
            clearProps: 'all',
            onStart: function() {
//                TweenMax.to($('.main'), 0.3, {
//                    scale: 1,
//                    z: 0,
//                    force3D: true,
//                    clearProps: 'all',
//                    ease: Power2.easeOut
//                });
                $('.main').removeClass('disabled');
            }
        });

    }

};

// FUNCTION INFO-HELP OPEN-CLOSE

var infoPanel = {


    open: function() {

        var info = $('.info');

        TweenMax.to(info, 0.6, {
            y: 0  + '%',
            force3D: true,
            ease: Power2.easeOut
        });

        TweenMax.to(info.find('ul'), 0.6, {
            y: -50 + '%',
            force3D: true,
            ease: Bounce.easeOut
        });

        info.addClass('active-info');

    },

    close: function() {

        var info = $('.info');

        TweenMax.to(info, 0.3, {
            y: 100 + '%',
            force3D: true,
            ease: Power2.easeOut,
            onComplete: function() {
                clearProps: 'all'
            }
        });

        TweenMax.to(info.find('ul'), 0.6, {
            y: 0 + '%',
            force3D: true,
            ease: Bounce.easeOut
        });

        info.removeClass('active-info');

    }

};

TweenMax.set('.psCenter', {
    autoAlpha: 0
});

TweenMax.set(['#check > #circleCheck', '#check > #tick'], {
    transformOrigin: "50% 50%",
    scale: 0,
    autoAlpha: 0,
    overflow: 'visible'
});

var awesomeCheck = new TimelineMax({
    paused: true,
    onComplete: function () {
        this.timeScale(2);
        this.reverse();
    }
});

awesomeCheck.to($('.psCenter'), 0.1, {
        autoAlpha: 1,
        force3D: true,
        ease: Power2.easeOut
    })
    .to('#check > #circleCheck', 0.8, {
        scale: 1,
        autoAlpha: 1,
        force3D: true,
        ease: Power2.easeOut
    }, '-=0')
    .to('#check > #tick', 0.4, {
        scale: 1,
        autoAlpha: 1,
        force3D: true,
        ease: Power2.easeOut
    }, '-=0.3');
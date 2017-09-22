/*
	_______________________________________________________
		
	Step 4
	_______________________________________________________
		
*/

$(function () {
    
    $('.device').slick({
        accessibility: false,
        draggable: false,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    infinite: false,
                    slidesToShow: 1
                }
            }
          ]
    });
    
    $('.arrow-right').on('click', function (e) {
        e.preventDefault();
        $('.device').slick('slickNext');
    });

    $('.arrow-left').on('click', function (e) {
        e.preventDefault();
        $('.device').slick('slickPrev');
    });
    
    function arrowMove(o, a, x, v) {
        TweenMax.to(o, 0.2, {
            autoAlpha: a,
            x: x,
            visibility: v
        });
    }

    $('.device').on('init reInit afterChange', function (e, slick, currentSlide) {
        e.preventDefault();

        var i = (currentSlide ? currentSlide : 0) + 1;

        if (i === 1) {
            arrowMove($('.arrow-left'), 0, -30, 'hidden');
        } else {
            arrowMove($('.arrow-left'), 1, 0, 'visible');
        }

        if (i === slick.slideCount) {
            arrowMove($('.arrow-right'), 0, 30, 'hidden');
        } else {
            arrowMove($('.arrow-right'), 1, 0, 'visible');
        }

    });
    
/////////////////////////////////////////////////////////////////////// iPhone
    
    var hIphone = '667',
        wIphone = '375',
        iphoneValidate = false;
    
    function sizeCorrectIphone() {
        if($('#widthIphone').hasClass('correct') && $('#heightIphone').hasClass('correct')) {
            TweenMax.to('#iphoneDeviceDisplay', 0.3, {
                fill: '#2ecc71',
                ease: Power2.easeOut
            });
            iphoneValidate = true;
            deviceValidate();
        } else {
            iphoneValidate = false;
        }
    }
        
    var sizeIphoneWidth = debounce(function () {
        
        if ($('#widthIphone').val() === wIphone) {
            $('#widthIphone').addClass('correct');
            TweenMax.to('#widthIphone', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function() {
                    sizeCorrectIphone();
                }
            });
        } else {
            shake('#iphoneDevice');
            TweenMax.set('#widthIphone', {
                backgroundColor: '#ffffff'
            });
            TweenMax.set('#iphoneDeviceDisplay', {
                fill: '#ffffff'
            });
        }
        
    }, 250);
    
    var sizeIphoneHeight = debounce(function () {
        
        if ($('#heightIphone').val() === hIphone) {
            $('#heightIphone').addClass('correct');
            TweenMax.to('#heightIphone', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function() {
                    sizeCorrectIphone();
                }
            });
        } else {
            shake('#iphoneDevice');
            TweenMax.set('#heightIphone', {
                backgroundColor: '#ffffff'
            });
            TweenMax.set('#iphoneDeviceDisplay', {
                fill: '#ffffff'
            });
        }
        
    }, 250);

    $('#widthIphone').on('keyup paste', sizeIphoneWidth);
    $('#heightIphone').on('keyup paste', sizeIphoneHeight);
    
    
/////////////////////////////////////////////////////////////////////// kindle
    
    var hKindle = '1024',
        wKindle = '600',
        kindleValidate = false;
    
    function sizeCorrectKindle() {
        if($('#widthKindle').hasClass('correct') && $('#heightKindle').hasClass('correct')) {
            TweenMax.to('#kindleDeviceDisplay', 0.3, {
                fill: '#2ecc71',
                ease: Power2.easeOut
            });
            kindleValidate = true;
            deviceValidate();
        } else {
            kindleValidate = false;
        }
    }
        
    var sizeKindleWidth = debounce(function () {
        
        if ($('#widthKindle').val() === wKindle) {
            $('#widthKindle').addClass('correct');
            TweenMax.to('#widthKindle', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function() {
                    sizeCorrectKindle();
                }
            });
        } else {
            shake('#kindleDevice');
            TweenMax.set('#widthKindle', {
                backgroundColor: '#ffffff'
            });
            TweenMax.set('#kindleDeviceDisplay', {
                fill: '#ffffff'
            });
        }
        
    }, 250);
    
    var sizeKindleHeight = debounce(function () {
        
        if ($('#heightKindle').val() === hKindle) {
            $('#heightKindle').addClass('correct');
            TweenMax.to('#heightKindle', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function() {
                    sizeCorrectKindle();
                }
            });
        } else {
            shake('#kindleDevice');
            TweenMax.set('#heightKindle', {
                backgroundColor: '#ffffff'
            });
            TweenMax.set('#kindleDeviceDisplay', {
                fill: '#ffffff'
            });
        }
        
    }, 250);

    $('#widthKindle').on('keyup paste', sizeKindleWidth);
    $('#heightKindle').on('keyup paste', sizeKindleHeight);
    
    
/////////////////////////////////////////////////////////////////////// iPad
    
    var hIpad = '1024',
        wKIpad = '768',
        ipadValidate = false;
    
    function sizeCorrectIpad() {
        if($('#widthIpad').hasClass('correct') && $('#heightIpad').hasClass('correct')) {
            TweenMax.to('#ipadDeviceDisplay', 0.3, {
                fill: '#2ecc71',
                ease: Power2.easeOut
            });
            ipadValidate = true;
            deviceValidate();
        } else {
            ipadValidate = false;
        }
    }
        
    var sizeIpadWidth = debounce(function () {
        
        if ($('#widthIpad').val() === wKIpad) {
            $('#widthIpad').addClass('correct');
            TweenMax.to('#widthIpad', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function() {
                    sizeCorrectIpad();
                }
            });
        } else {
            shake('#ipadDevice');
            TweenMax.set('#widthIpad', {
                backgroundColor: '#ffffff'
            });
            TweenMax.set('#ipadDeviceDisplay', {
                fill: '#ffffff'
            });
        }
        
    }, 250);
    
    var sizeIpadHeight = debounce(function () {
        
        if ($('#heightIpad').val() === hIpad) {
            $('#heightIpad').addClass('correct');
            TweenMax.to('#heightIpad', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function() {
                    sizeCorrectIpad();
                }
            });
        } else {
            shake('#ipadDevice');
            TweenMax.set('#heightIpad', {
                backgroundColor: '#ffffff'
            });
            TweenMax.set('#ipadDeviceDisplay', {
                fill: '#ffffff'
            });
        }
        
    }, 250);

    $('#widthIpad').on('keyup paste', sizeIpadWidth);
    $('#heightIpad').on('keyup paste', sizeIpadHeight);
    
    
    function deviceValidate() {
        if(iphoneValidate === true && kindleValidate === true && ipadValidate === true) {
            $('#infoBtnNext').removeClass('hidden');
            infoPanel.close();
            awesomeCheck.play();
        } else {
            $('#infoBtnNext').addClass('hidden');
        }
    }
    
    
});
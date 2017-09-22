/*
	_______________________________________________________
		
	Step 2
	_______________________________________________________
		
*/

var inputHtmlCss = {
    init: function () {
        inputHtmlCss.cssStyleHtml();
    },
    cssStyleHtml: function () {

        var $cssBg = $('#cssBg'),
            $bg = $('.theme-hero'),
            $textFixed = $('.theme-content_middle'),
            $inpColor = $('#inpColor'),
            $inpAlign = $('#inpAlign'),
            $textFixedH1 = $('.theme-content_middle > h1'),
            $inpFamily = $('#inpFamily'),
            $inpFont = $('#inpFont'),
            $contentBtn = $('.theme-content_middle > button'),
            $btnClass = $('#btnClass');
        
        var bgFn = debounce(function () {
            $bg.css('background-image', 'url(img/' + $cssBg.val() + ')');
            if ($(this).val() == "starry-night.jpg"){
                $('#step2go').removeClass('hidden');
            }
        }, 250);
        
        var colorFn = debounce(function () {
            $textFixed.css('color', $inpColor.val());
        }, 250);
        
        var alignFn = debounce(function () {
            $textFixed.css('text-align', $inpAlign.val());
        }, 250);

        var familyFn = debounce(function () {
            $textFixedH1.css('font-family', $inpFamily.val());
        }, 250);
        
        var fontFn = debounce(function () {
            $textFixedH1.css('font-size', $inpFont.val());
        }, 250);
        
        var btnFn = debounce(function () {
            $contentBtn.attr('class', $btnClass.val());
            if ($(this).val() == "btn-rounded"){
                
                $('#inspectorText').empty().text('Well done! Let\'s move on to the next website task. Scroll through the CSS to where it\'s been commented out and add it back into the empty url in the .theme-hero class.');
                
            }
        }, 250);
        
        $cssBg.on('keyup paste', bgFn);

        $inpColor.on('keyup paste', colorFn);
        
        $inpAlign.on('keyup paste', alignFn);

        $inpFamily.on('keyup paste', familyFn);

        $inpFont.on('keyup paste', fontFn);

        $btnClass.on('keyup paste', btnFn);

    }
};

$(function () {

    inputHtmlCss.init();

    var $doc = $("#inspector"),
        $context = $(".rightclick"),
        $btnRightClick = $('#rightClick'),
        $inspector = $('.inspector'),
        $inspText = $('#inspectorText'),
        activeContext = true,
        $btnFormat = $('#format'),
        $codeHtml = $('#html-code .html-inline'),
        $codeCss = $('#css-code .css-inline'),
        $inspectorUpDown = $('#inspectorUpDown');
    
    if (!Modernizr.touchevents) {

        $doc.on('contextmenu', function (e) {
            e.preventDefault();

            var offset = $(this).offset();
            var x = e.clientX - offset.left;
            var y = e.clientY - offset.top;

            if (activeContext == true) {

                TweenMax.set($context, {
                    autoAlpha: 1,
                    left: x + 15,
                    top: y + (offset.top + 10)
                });

                $doc.on('mousedown', function (e) {
                    $doc.off(e);
                    TweenMax.to($context, 0.3, {
                        autoAlpha: 0,
                        force3D: true,
                        ease: Power2.easeOut
                    });
                });

            } else {
                $doc.off(e);
            }

        });
        
            $btnRightClick.on('click', function (e) {
                e.preventDefault();

                $doc.off(e);
                TweenMax.to($context, 0.3, {
                    autoAlpha: 0,
                    force3D: true,
                    ease: Power2.easeOut
                });

                activeContext = false;
                $doc.on('contextmenu', function () {
                    return false;
                });

                moveUpDown($inspector, 0.3, 1, 0);

            });

    };

    $('#inspectorBtn').on('click touchstart', function (e) {
        e.preventDefault();
        moveUpDown($inspector, 0.3, 1, 0);
        $(this).addClass('hidden');
    });

    function orderCodeHtmlCss() {
        $codeHtml.addClass('html-block');
        $codeHtml.eq(1).css({
            'padding-left': 32
        });
        $codeHtml.eq(2).css({
            'padding-left': 64
        });
        $codeHtml.eq(3).css({
            'padding-left': 96
        });
        $codeHtml.eq(4).css({
            'padding-left': 96
        });
        $codeHtml.eq(5).css({
            'padding-left': 96
        });
        $codeHtml.eq(6).css({
            'padding-left': 64
        });
        $codeHtml.eq(7).css({
            'padding-left': 32
        });
    }
    
    // You can change the texts here.

    $btnFormat.click(function () {
        orderCodeHtmlCss();
        $inspText.empty().text('In the HTML, the button class is missing, <button class="…">. Find the missing class name in the CSS code and add it to the HTML (without the full stop that\'s in front of it).');
        $(this).empty().text('Next');
        $(this).addClass('hidden');
    });
    
    if (!Modernizr.touchevents) {

        function scrollCssPanel() {
            TweenMax.to('#wrapperInspector', 0.3, {
                scrollTo: "#cssCode-" + i
            });
        }

        $('#html-code').find('.active-html').each(function (i, elem) {
            var obj = $(elem);
            obj.click(function (e) {
                e.preventDefault();
                TweenMax.to('#wrapperInspector', 0.3, {
                    scrollTo: {
                        y: "#cssCode-" + (i + 1),
                        offsetY: 15
                    },
                    ease: Power2.easeOut
                });
            });
        });
    
    }


    $inspectorUpDown.on('click', function(e) {
        e.preventDefault();
        infoPanel.close();
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
            moveUpDown($inspector, 0.3, 1, 100);
            $(this).find('.ionic').eq(0).addClass('hidden');
            $(this).find('.ionic').eq(1).removeClass('hidden');
        } else {
            $(this).addClass('active');
            moveUpDown($inspector, 0.3, 1, 0);
            $(this).find('.ionic').eq(0).removeClass('hidden');
            $(this).find('.ionic').eq(1).addClass('hidden');
        }
    });
    

});

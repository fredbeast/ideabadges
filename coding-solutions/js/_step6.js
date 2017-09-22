/*
	_______________________________________________________
		
	Step 6
	_______________________________________________________
		
*/

$(function () {
    /////////////////////////////////////////////////////////////////////// iFrame
    
    var checkVa = "http://stackoverflow.com/questions/65034/remove-border-from-iframe",
        vCIframe = "<p>Well done, using forums like this is a good way of getting help from the community on things that are complicated or when you need some help understanding a problem.</p><p>As you develop your understanding, and try more things yourself, you will be able to start posting your solutions so that you can help others.</p>";

    var iframeB = debounce(function () {
        
        if ($('#iframeBlock').val() === checkVa) {
            $('#infoContent').empty().append(vCIframe);
            TweenMax.to('#iframeBlock', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function () {
                    infoPanel.open();
                    $('#forumBtnNext').removeClass('hidden');
                }
            });
            awesomeCheck.play();
            $('#checkIframe').off().addClass('disabled');
        } else {
            shake('#iframeBlock');
            TweenMax.set('#iframeBlock', {
                backgroundColor: '#ffffff'
            });
        }

    }, 250);

    $('#checkIframe').on('click', function(e) {
        e.preventDefault();
        iframeB();
    });

});
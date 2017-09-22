/*
	_______________________________________________________
		
	Step 3
	_______________________________________________________
		
*/

$(function () {
    /////////////////////////////////////////////////////////////////////// W3

    var valueCorrectW3 = 'https://validator.w3.org/nu/?doc=https%3A%2F%2Fidea.org.uk%2F',
        vCW3 = "<p><strong>Great! So that's the quick wins. Now we need to move on to improving the website.</strong></p>";


    var checkW3 = debounce(function () {

        if ($('#checkW3').val() === valueCorrectW3) {
            $('#infoContent').empty().append(vCW3);
            TweenMax.to('#checkW3', 0.3, {
                backgroundColor: '#cecece',
                ease: Power2.easeOut,
                onComplete: function () {
                    infoPanel.open();
                    $('#infoBtnNext').removeClass('hidden');
                }
            });
            awesomeCheck.play();
            $('#checkW3Btn').off().addClass('disabled');
        } else {
            shake('#checkW3');
            TweenMax.set('#checkW3', {
                backgroundColor: '#ffffff'
            });
        }

    }, 250);

    $('#checkW3Btn').on('click', function(e) {
        e.preventDefault();
        checkW3();
    });

});
/*
	_______________________________________________________
		
	Step 5
	_______________________________________________________
		
*/

$(function() {
    var $reponsiveList = $('.movil-list').find('li').find('a');
    $reponsiveList.each(function(i, elem) {
        $(elem).on('click', function(e) {
            e.preventDefault();
            var $width = $(this).data('wsize');
            var $height = $(this).data('hsize');
            
            TweenMax.to('.theme-finish', 0.2, {
                width: $width / 1.1,
                height: $height / 1.1,
                ease: Power2.easeOut
            });
            
            $('#movilBtn').removeClass('disabled');
            
        });
    });
});
/*
	_______________________________________________________

	MAIN
	_______________________________________________________

*/

var self,
mainTodo = {

    setting: {
        $btnInit: $('.init-go'),
        $intro: $('.intro'),
        $btnNext: $('#btnNext'),
        $btnGo: $('.next-go'),
        $btnGoLink: $('.next-go-link'),
        $btnEnd: $('.next-end'),
        $infoContent: $('.info'),
        $btnInfo: $('#info'),
        $btnStep2: $('#step2go'),
        $inspector: $('.inspector')
    },

    init: function() {
        self = this.setting;

        //animationSectionStep.inStep(3);

        // STEP SETTING
        initSetStep();
        
        if(Modernizr.touchevents) {
            
            mainTodo.eventInitMovile();
            
        } else {
            
            mainTodo.eventInit();
            strike.play();
        }

        self.$intro.find('.monitor').append($monitor);

    },

    eventInit: function() {

        self.$btnInit.on('click', function() {
            animationSectionStep.inStep(1);
            questionPanel.open();
            TweenMax.to(self.$intro, 0.2, {
                autoAlpha: 0,
                ease: Power2.easeOut
            });
            return false;
        });  
        
        var $c = 0;
        
        self.$btnNext.on('click', function () {
            if($c == 0) {
                $c++;
            } else {
                navSteps.next();
            }
            
            $('#panelContent p').remove();
            $('#panelContent ul').remove();
            $('#infoBtnNext').addClass('hidden');
            
            questionPanel.close();
            InfoContentSteps(nSteps);
            window.requestTimeout(function() {
                infoPanel.open();
            }, 1000);
            return false;
        });


        self.$btnGo.on('click', function() {
            click.play();
            questionPanel.open();
            infoPanel.close();
            return false;
        });

        self.$btnStep2.on('click', function() {
            click.play();
            infoPanel.close();
            moveUpDown(self.$inspector, 0.3, 0, 100);
            navSteps.next();
            InfoContentSteps(nSteps);
            window.requestTimeout(function() {
                infoPanel.open();
            }, 1000);
            return false;
        });

        self.$btnEnd.on('click', function() {
            click.play();
            navSteps.next();
            return false;
        });

        self.$btnInfo.on('click', function(e) {
            e.preventDefault();

            if ( self.$infoContent.hasClass('active-info') ) {
                infoPanel.close();
            } else {
                infoPanel.open();
            }

        });
        
        self.$btnGoLink.on('click', function() {
            if($c == 0) {
                $c++;
            } else {
                navSteps.next();
            }
            
            infoPanel.close();
            
            $('#panelContent p').remove();
            $('#panelContent ul').remove();
            
            InfoContentSteps(nSteps);
            window.requestTimeout(function() {
                infoPanel.open();
            }, 1000);
            return false;
        });

    },
    
    eventInitMovile: function() {
        
        self.$btnInit.on('singletap', function() {
            animationSectionStep.inStep(1);
            questionPanel.open();
            moveUpDown(self.$intro, 0.3, 0, 100);
        });  
        
        var $c = 0;
        
        self.$btnNext.on('singletap', function () {
            if($c == 0) {
                $c++;
            } else {
                navSteps.next();
            }
            
            $('#panelContent p').remove();
            $('#panelContent ul').remove();
            $('#infoBtnNext').addClass('hidden');
            
            questionPanel.close();
            InfoContentSteps(nSteps);
            window.requestTimeout(function() {
                infoPanel.open();
            }, 1000);
        });

        self.$btnGo.on('singletap', function() {
            click.play();
            questionPanel.open();
            infoPanel.close();
        });

        self.$btnStep2.on('singletap', function() {
            click.play();
            infoPanel.close();
            moveUpDown(self.$inspector, 0.3, 0, 100);
            navSteps.next();
            InfoContentSteps(nSteps);
            window.requestTimeout(function() {
                infoPanel.open();
            }, 1000);
        });

        self.$btnEnd.on('singletap', function() {
            click.play();
            navSteps.next();
        });
        
        self.$btnInfo.on('singletap', function(e) {

            if ( self.$infoContent.hasClass('active-info') ) {
                infoPanel.close();
            } else {
                infoPanel.open();
            }
            
            e.preventDefault();

        });
        
        self.$btnGoLink.on('click', function() {
            if($c == 0) {
                $c++;
            } else {
                navSteps.next();
            }
            
            infoPanel.close();
            
            $('#panelContent p').remove();
            $('#panelContent ul').remove();

            InfoContentSteps(nSteps);
            window.requestTimeout(function() {
                infoPanel.open();
            }, 1000);
            return false;
        });
    }

};

/*
	_______________________________________________________

	PRELOAD AND "mainTodo" GO!!!
	_______________________________________________________

*/

$(document).ready(function () {
    mainTodo.init();
});

$(window).load(function () {
    TweenMax.to('.progress > .progress-bar > div', 1, {
        width: 100 + '%',
        force3D: true,
        ease: Power2.easeOut,
        onComplete: function () {
            TweenMax.to('#loader', 0.35, {
                autoAlpha: 0,
                pointerEvents: "none",
                zIndex: -1,
                force3D: true,
                ease: Power2.easeOut
            });
        }
    });
});
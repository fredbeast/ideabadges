/*
	_______________________________________________________

	STEPS NAVEGATION
	_______________________________________________________

*/

var nSteps = 0;

function initSetStep() {
    TweenMax.set(['.step-1', '.step-2', '.step-3', '.step-4', '.step-5', '.step-6', '.step-7', '.step-8', '.step-9'], {
        y: -400,
        autoAlpha: 0,
        pointerEvents: "none"
    });
}

var animationSectionStep = {
    inStep: function (n) {
        TweenMax.to('.step-' + n, 0.35, {
            y: 0,
            autoAlpha: 1,
            pointerEvents: "auto",
            force3D: true,
            ease: Power2.easeOut,
            clearProps: 'y'
        });
    },
    outStep: function (n) {
        TweenMax.to('.step-' + n, 0.2, {
            scale: 0.8,
            autoAlpha: 0,
            pointerEvents: "none",
            force3D: true,
            ease: Power2.easeOut,
            onComplete: function () {
                y: 400
            }
        });
    }
};

var navSteps = {
    next: function () {

        if (nSteps === 8) {
            nSteps = 1;
        } else {
            nSteps++;
        }

        //$('body').attr('data-step', (nSteps + 1));

        switch (nSteps) {
        case 1:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
            break;
        case 2:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
            break;
        case 3:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
            break;
        case 4:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
            TweenMax.to($('.movil'), 0.2, {
                autoAlpha: 1,
                y: 0 + '%',
                x: -50 + '%',
                force3D: true,
                ease: Power2.easeOut
            });
            break;
        case 5:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
            TweenMax.to($('.movil'), 0.2, {
                autoAlpha: 0,
                y: -100 + '%',
                x: -50 + '%',
                force3D: true,
                ease: Power2.easeOut
            });
            break;
        case 6:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
            window.requestTimeout(function() {
                $('#infoBtnNext').removeClass('hidden');
            }, 1000);
            break;
        case 7:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
            $('.info').addClass('hidden');
            break;
         case 8:
            animationSectionStep.outStep(nSteps);
            animationSectionStep.inStep((nSteps + 1));
        }

        return nSteps;
    }
};

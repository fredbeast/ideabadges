/*
	_______________________________________________________
		
	Character Function
	_______________________________________________________
		
*/

function moveUpHead() {
    var $head = $('#cabeza');
    var tl = new TimelineMax();
    tl.to([$head], 0.6, {
        rotation: -15,
        transformOrigin: "bottom center",
        ease: Elastic.easeOut.config(1, 0.6)
    });
    return tl;
}

function moveArmLeft() {
    var $leftArm = $('#bIzq'),
        $leftArmBottom = $('#bIzq-inferior');
    
    var tl = new TimelineMax();
    tl.to($leftArm, 0.3, {
        rotation: -60,
//        y: -6,
//        x: -5,
        transformOrigin: "top center",
        ease: Power2.easeOut
    })
    .to($leftArmBottom, 0.3, {
        rotation: -35,
        y: 6,
        x: -5,
        transformOrigin: "top center",
        ease: Power2.easeOut
    }, 0);
    return tl;
}

function moveArmRight() {
    var $rightArm = $('#bDer'),
        $rightArmBottom = $('#bDer-inferior');
    
    var tl = new TimelineMax();
    tl.to($rightArm, 0.3, {
        rotation: 30,
        y: -6,
        x: 5,
        transformOrigin: "top center",
        ease: Power2.easeOut
    })
    .to($rightArmBottom, 0.3, {
        rotation: -35,
        y: 6,
        x: -5,
        transformOrigin: "top center",
        ease: Power2.easeOut
    }, 0);
    return tl;
}

// WALKING

function pushWalk(v, t) {
    var $body = $('.character');
    TweenMax.to($body, t, {
        x: v,
        force3D: true,
        ease: Sine.easeOutIn
    });
}

function walkInitHead() {
    
    var $head = $('#cabeza');
    
    TweenMax.set($head, {
        rotation: -5,
        transformOrigin: "bottom center"
    });
    
    var tl = new TimelineMax();
    
    tl.fromTo($head, 0.5, {
        rotation: 5,
        ease: Power2.easeIn
    }, {
        rotation: -5,
        ease: Power2.easeOut
    });
    
    return tl;
}

function walkInitRight() {

    var $rightArm = $('#bDer'),
        $rightArmBottom = $('#bDer-inferior');
    
    TweenMax.set($rightArm, {
        rotation: -35,
        y: 6,
        x: -5, 
        transformOrigin: "top center"
    });
    
    TweenMax.set($rightArmBottom, {
        rotation: -35,
        y: 6,
        x: -5, 
        transformOrigin: "top center"
    });
    
    var tl = new TimelineMax();
    
    tl.fromTo($rightArm, 0.5, {
        rotation: 35,
        ease: Power2.easeInOut
    }, {
        rotation: -35,
        ease: Power2.easeInOut
    })
    .fromTo($rightArmBottom, 0.5, {
        rotation: -5,
        y: -4,
        x: -1,
        ease: Power2.easeInOut
    }, {
        rotation: -35,
        y: 6,
        x: -5,
        ease: Power2.easeInOut
    }, 0);
    
    return tl;
}

function walkInitLeft() {
    
    var $leftArm = $('#bIzq'),
        $leftArmBottom = $('#bIzq-inferior');
    
    TweenMax.set($leftArm, {
        rotation: 35,
        y: 6,
        x: -5, 
        transformOrigin: "top center"
    });
    
    TweenMax.set($leftArmBottom, {
        rotation: -35,
        y: 6,
        x: -5, 
        transformOrigin: "top center"
    });
    
    var tl = new TimelineMax();
    
    tl.fromTo($leftArm, 0.5, {
        rotation: -35,
        ease: Power2.easeInOut
    }, {
        rotation: 35,
        ease: Power2.easeInOut
    })
    .fromTo($leftArmBottom, 0.5, {
        rotation: -35,
        y: 6,
        x: -5,
        ease: Power2.easeInOut
    }, {
        rotation: -5,
        y: -4,
        x: -1,
        ease: Power2.easeInOut
    }, 0);
    
    return tl;
}

function walkInitLeftLeg() {

    var $leftLeg = $('#pIzq'),
        $leftLegBottom = $('#pIzq-inferior');
    
    TweenMax.set($leftLeg, {
        rotation: -10,
        transformOrigin: "top center"
    });
    
    TweenMax.set($leftLegBottom, {
        rotation: 35,
        y: 0,
        x: 5, 
        transformOrigin: "top center"
    });
    
    var tl = new TimelineMax();
    
    tl.fromTo($leftLeg, 0.5, {
        rotation: 10,
        ease: Power2.easeInOut
    }, {
        rotation: -10,
        ease: Power2.easeInOut
    })
    .fromTo($leftLegBottom, 0.5, {
        rotation: 25,
        y: 5,
        x: 5,
        ease: Power2.easeInOut
    }, {
        rotation: 5,
        y: 4,
        x: 1,
        ease: Power2.easeInOut
    }, 0);
    
    return tl;
}

function walkInitRightLeg() {

    var $rightLeg = $('#pDer'),
        $rightLegBottom = $('#pDer-inferior');
    
    
    TweenMax.set($rightLeg, {
        rotation: 10,
        transformOrigin: "top center"
    });
    
    TweenMax.set($rightLegBottom, {
        rotation: 5,
        y: 4,
        x: 1, 
        transformOrigin: "top center"
    });
    
    var tl = new TimelineMax();
    
    tl.fromTo($rightLeg, 0.5, {
        rotation: -10,
        ease: Power2.easeInOut
    }, {
        rotation: 10,
        ease: Power2.easeInOut
    })
    .fromTo($rightLegBottom, 0.5, {
        rotation: 5,
        y: 4,
        x: 1,
        ease: Power2.easeInOut
    }, {
        rotation: 25,
        y: 5,
        x: 5,
        ease: Power2.easeInOut
    }, 0);
    
    return tl;
}

function walkStop() {
    
    var $rightArm = $('#bDer'),
        $rightArmBottom = $('#bDer-inferior');
    
    var $leftArm = $('#bIzq'),
        $leftArmBottom = $('#bIzq-inferior');

    var $rightLeg = $('#pDer'),
        $rightLegBottom = $('#pDer-inferior');
    
    var $leftLeg = $('#pIzq'),
        $leftLegBottom = $('#pIzq-inferior');
    
    var tlx = new TimelineMax();
    
    tlx.to([$rightLeg, $leftLeg, $leftArm, $rightArm], 0.5, {
        rotation: 0,
//        y: 0,
//        x: 0,
        transformOrigin: "top center",
        ease: Power2.easeOut
    })
    .to([$rightLegBottom, $leftLegBottom, $leftArmBottom, $rightArmBottom], 0.5, {
        rotation: 0,
        y: 0,
        x: 0,
        transformOrigin: "top center",
        ease: Power2.easeOut
    }, 0);
    

    return tlx;
}

/*
	_______________________________________________________
		
	MASTER SCENES
	_______________________________________________________
		
*/

pushWalk();
    
var masterWalk = new TimelineMax({
    paused: true,
    repeat: 3,
    yoyo: true,
    onStart: function() {
        pushWalk(-500, 2.4);
    },
    onComplete: function() {
        poseConversation.play();
    }
});

masterWalk.add(walkInitRight(), "0")
.add(walkInitLeft(), "-=0.5")
.add(walkInitLeftLeg(), "-=0.5")
.add(walkInitRightLeg(), "-=0.5")
.add(walkInitHead(), "-=0.5");
masterWalk.timeScale(1);
    
var poseConversation = new TimelineMax({
    paused: true
});
poseConversation.add(walkStop(), "scene1")
.add(moveUpHead(), "scene2")
.add(moveArmLeft(), "-=0.5", "scene3");
poseConversation.timeScale(1);


function resetGuardAll() {
    
    masterWalk.pause(0, true);
    masterWalk.remove();
    poseConversation.pause(0, true);
    poseConversation.remove();
    
    pushWalk(0, 0.5);

}
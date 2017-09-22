/*
	_______________________________________________________
		
	Step 7
	_______________________________________________________
		
*/

$(function () {
    
    $('#quiz').quiz({
        counterFormat: 'Question %current of %total',
        allowIncorrect: false,
        answerCallback: function() {
            $('#goFinish').remove();
            $('#quiz-restart-btn').addClass('hidden');
        },
        homeCallback: function() {
            $('#quiz-finish-btn').addClass('hidden');
        },
        finishCallback: function() {
            infoPanel.open();
            $('#quiz-buttons').append('<button id="goFinish" class="next-go btn" style="float: right; margin-top: 15px;" onClick="navSteps.next();infoPanel.close();">NEXT</button>');
        },
        questions: [
            {
                'q': 'Which of the following is correct about Bootstrap?',
                'options': [
                    'Bootstrap\'s responsive CSS adjusts to Desktops,Tablets and Mobiles.',
                    'Provides a clean and uniform solution for building an interface for developers.',
                    'It contains beautiful and functional built-in components which are easy to customize.',
                    'All of the above.'
                ],
                'correctIndex': 3,
                'correctResponse': 'The answer is correct, Bootstrap is all of the above - a responsive framework that works across a range of devices, with a clean interface and customizable components.',
                'incorrectResponse': 'Bootstrap is all of the above - a responsive framework that works across a range of devices, with a clean interface and customizable components.'
            },
            {
                'q': "What does W3C's validator (at validator.w3.org) check?",
                'options': [
                    'HTML, CSS and RSS',
                    'HTML and CSS',
                    'HTML',
                    'None of the above'
                ],
                'correctIndex': 2,
                'correctResponse': 'Correct response.',
                'incorrectResponse': 'You need to read the information on W3C very carefully. The validator checks HTML, but there are other validators and tools available for CSS, RSS and other checks.'
            },
            {
                'q': "Which games engines can you use to build Windows 10 games on Microsoft Virtual Academy?",
                'options': [
                    'Unity 4 and Construct 2',
                    'Unity 5 and Construct 2',
                    'Unity 5 and Construct 3',
                    'Unity 4 and Construct 3'
                ],
                'correctIndex': 1,
                'correctResponse': 'Correct response. Microsoft Virtual Academy provides courses for building Windows 10 games using both Unity 5 and Construct 2.',
                'incorrectResponse': 'Microsoft Virtual Academy provides courses for building Windows 10 games using both Unity 5 and Construct 2.'
            },
            {
                'q': "What does stumbleupon do?",
                'options': [
                    "Keep a track of which websites you've visited",
                    'Share useful websites with others',
                    'Rate content',
                    'Personalise the browsing experience',
                    'All of the above'
                ],
                'correctIndex': 4,
                'correctResponse': 'Correct response. StumbleUpon enables you to track websites you’ve visited, share useful websites with others, rate content and personalise your browsing experience',
                'incorrectResponse': 'StumbleUpon enables you to track websites you’ve visited, share useful websites with others, rate content and personalise your browsing experience'
            },
            {
                'q': "What are MOOCs?",
                'options': [
                    "Massive Organised Online Courses",
                    'Massive Optimised Online Courses',
                    'Massive Only Online Courses',
                    'Massive Open Online Courses',
                    'None of the above'
                ],
                'correctIndex': 3,
                'correctResponse': 'Correct response. MOOCs are Massive Open Online Courses. This means they are online courses that are accessible to lots of people without having to pay to access the content i.e. they are massive and open',
                'incorrectResponse': 'MOOCs are Massive Open Online Courses. This means they are online courses that are accessible to lots of people without having to pay to access the content i.e. they are massive and open.'
            }
        ]
    });
});

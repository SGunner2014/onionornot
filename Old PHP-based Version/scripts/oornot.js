/*
*	This script compares the choice they have made and tests to see whether they have chosen the correct one.
*	If so, it will make a window popup, saying that they have chosen the correct one, and if not, do the reverse.
*/

$(document).ready(function() {

	$('.close').click(function() {
		$('#correctAnswer').slideUp();
		$('#wrongAnswer').slideUp();
	});

	$('#false').click(function() {
 
		if ( $('#correctAnswer').css('display') === 'none' && $('#wrongAnswer').css('display') === 'none') {

			if ( $('#notonion').length ) { //Chosen the correct choice, it is the onion.
				$('#correctAnswer').slideDown();
			} else {
				$('#wrongAnswer').slideDown();
			}

		}

	});

	$('#true').click(function() {

		if ( $('#correctAnswer').css('display') === 'none' && $('#wrongAnswer').css('display') === 'none') {

			if ( $('#onion').length ) {
				$('#correctAnswer').slideDown();
			} else {
				$('#wrongAnswer').slideDown();
			}

		}

	});

});

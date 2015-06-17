/*
*	This script compares the choice they have made and tests to see whether they have chosen the correct one.
*	If so, it will make a window popup, saying that they have chosen the correct one, and if not, do the reverse.
*/

$(document).ready(function() {

	$('#false').click(function() {

		if ( $('#notonion').length ) { //Chosen the correct choice, it is the onion.
			$('#correctAnswer').slideDown();
		} else {
			$('#wrongAnswer').slideDown();
		}

	});

	$('#true').click(function() {

		if ( $('#onion').length ) {
			$('#correctAnswer').slideDown();
		} else {
			$('#wrongAnswer').slideDown();
		}

	});

});

/*
	document.querySelector - Returns the first element within the document that matches the specified group of selectors

	window.localStorage needed to store the data after browser closes

	window.addEventListener() method registers the specified listener on the EventTarget it's called on

	navigator.onLine will listen for the for the events of changing network state
*/

document.addEventListener("DOMContentLoaded", function(event) {

	if ( 'querySelector' in document
		&& 'addEventListener' in window
		&& 'localStorage' in window
		&& 'onLine' in navigator
	) {
		console.log('The mustard has been cut.');

		window.addEventListener("online", function() {
			console.log('The Site came online');
			document.getElementsByTagName("html")[0].classList.remove('is-offline');
		});

		window.addEventListener("offline", function() {
			console.log('The Site went offline');
			document.getElementsByTagName("html")[0].classList.add('is-offline');

			
		});

		window.addEventListener("submit", function(e){
			console.log( "the form was submitted" );

			var form_data = {};	
			if ( ! navigator.onLine ) {
				console.log( "computer is offline" );
				e.preventDefault();
				document.getElementsByTagName("html")[0].classList.add('is-offline');

				console.log( "get the data" );
				var your_name   = document.getElementById("your-name").value;
				var website     = document.getElementById("website").value;
				var good_at     = document.getElementById("good-at").value;
				var looking_for = document.getElementById("looking-for").value;

				// Add input validation here
				console.log( "validate the data" );
				
				form_data.your_name = your_name;
				form_data.good_at = good_at;
				form_data.looking_for = looking_for;
				form_data.website = website;

				console.log( "instantiate ProfileForm" );
				var profile_form = new ProfileForm( form_data );

				console.log( "ProfileForm get_form_data" );
				profile_form.update_storage();
			} else {
				console.log( " Submit to the server." );
			}
		});


	}




	if ( ! navigator.onLine ) {
		document.getElementsByTagName("html")[0].classList.add('is-offline');
	}


});


/*
	Offline Application
*/ 


MIXR.SearchResults = function (){
	this.data = {};
}

MIXR.SearchResults.toggleItem = function( contentId ){
	console.log( 'Toggling the Item' );
	var content = document.getElementById( contentId );
	if ( content.classList.contains('is-closed') ) {
		content.classList.remove('is-closed');
	} else {
		content.classList.add('is-closed');
	}
}




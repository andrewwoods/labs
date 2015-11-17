
var MIXR = MIXR || {};
MIXR.VERSION = '0.1.0';
MIXR.AUTHOR = 'Andrew Woods';

MIXR.about = function(){
	console.log( "About Mixr - Version " + MIXR.VERSION );
	console.log( "Created By " + MIXR.AUTHOR );
};

/*
 * ProfileForm Class
 * -----------------
 */

MIXR.ProfileForm = function ( data ) {
	console.log( 'inside ProfileForm' );
	console.dir( data );
	this.personName = data.your_name || '';
	this.whatFor = data.what_for || '';
	this.goodAt = data.good_at || '';
}

MIXR.ProfileForm.prototype.update_storage = function( data ){
	window.localStorage.setItem( 'MyProfile', JSON.stringify( data ) );
};

MIXR.ProfileForm.prototype.get_storage = function(){
	return window.localStorage.get( 'MyProfile' );
};



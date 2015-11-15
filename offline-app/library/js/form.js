var ProfileForm = function ( data ) {
	console.log( 'inside ProfileForm' );
	console.dir( data );
	this.personName = data.your_name || '';
	this.whatFor = data.what_for || '';
	this.goodAt = data.good_at || '';
}

ProfileForm.prototype.update_storage = function( ){
	console.log( 'Update Storage' );

};

/*
var Student = function( config ) {
    // Call the Parent Constructor
    Person.call(this, config);

    // Initialize the student-specific properties
    this.studentId =  config.studentId || 0;
};

Student.prototype = Object.create(Person.prototype);

// Set the "constructor" property to refer to Student
Student.prototype.constructor = Student;


var aw = new Student( {name: 'Andrew Woods', size: '4 oz', height: '6 foot 1 inches', } );

*/


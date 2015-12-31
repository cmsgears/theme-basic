var mainApp		= new cmt.api.Application();

jQuery(document).ready( function() {

	var appControllers				= [];

	appControllers[ 'form' ]		= 'FormController';
	appControllers[ 'newsletter' ] 	= 'NewsletterController';
	appControllers[ 'user' ]		= 'UserController';

	jQuery( ".cmt-form, .cmt-request" ).cmtRequestProcessor({
		app: mainApp,
		controllers: appControllers
	});
});

// DefaultController ----------------------------------------

cmt.api.controllers.DefaultController.prototype.avatarActionPost = function( success, parentElement, message, response ) {

	parentElement.parent().hide();
};

// UserController -------------------------------------------

UserController	= function() {};

UserController.inherits( cmt.api.controllers.BaseController );

UserController.prototype.loginActionPost = function( success, parentElement, message, response ) {

	if( success ) {

		window.location.replace( siteUrl + "user/home" );
	}
};

UserController.prototype.registerActionPost = function( success, parentElement, message, response ) {
	// do nothing
};

UserController.prototype.accountActionPost = function( success, parentElement, message, response ) {

	if( success ) {

		var source 		= document.getElementById( "userAccountTemplate" ).innerHTML;
		var template 	= Handlebars.compile( source );
		var output 		= template( response.data );
		var parent		= jQuery( "#" + parentElement ).parent().parent();

		parent.find( ".wrap-info" ).html( output );

		parent.find( ".btn-edit" ).click();
	}
};

UserController.prototype.settingsActionPost = function( success, parentElement, message, response ) {

	if( success ) {

		var source 		= document.getElementById( "userSettingsTemplate" ).innerHTML;
		var template 	= Handlebars.compile( source );
		var data		= { settings: response.data };
		var output 		= template( data );
		var parent		= jQuery( "#" + parentElement ).parent().parent();

		parent.find( ".wrap-info" ).html( output );

		parent.find( ".btn-edit" ).click();
	}
};
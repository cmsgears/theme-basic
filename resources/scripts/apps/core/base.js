// == Application =========================

jQuery( document ).ready( function() {

	// Register App
	var app	= cmt.api.root.registerApplication( 'basicCore', 'cmt.api.Application', { basePath: ajaxUrl } );

	// Register Listeners
	cmt.api.utils.request.register( app, jQuery( '[cmt-app=basicCore]' ) );
});

// == App Namespace =======================

var basic = basic || {};

basic.core = basic.core || {};

// == Controller Namespace ================

basic.core.controllers = basic.core.controllers || {};

// == Service Namespace ===================

basic.core.services = basic.core.services || {};

// == Additional Methods ==================

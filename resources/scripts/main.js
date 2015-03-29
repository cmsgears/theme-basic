jQuery(document).ready( function() {

	initLanding();

	initModules();

	initListeners();
});

function initLanding() {

	registerHeaderChange();

	initSmoothScroll( ".smooth-scroll" );	
}

function initModules() {

	// Show pre-loader spinner
	jQuery( '#pre-loader-page' ).fadeIn();

	// Hide pre-loader spinner
	jQuery('.module').imagesLoaded( function() {

		jQuery( '#pre-loader-page' ).fadeOut( "slow" );
	});

	// Initialise the Page Modules
	jQuery( ".module" ).cmgPageModules( {
		fullHeight: true,
		modules: {
			'module-about': { fullHeight: true, css: { 'height': 'auto' } },
			'module-contact': { heightAutoMobile: true, heightAutoWidth: 1024 }
		}
	});
}

function initListeners() {

	// Initialise the mobile button
	jQuery("#btn-mobile-menu").click( function() {

		jQuery( ".nav-main" ).slideToggle( "slow" );
	});
}
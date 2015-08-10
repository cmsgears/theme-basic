jQuery(document).ready( function() {
	
	initPreloaders();

	initLanding();

	initModules();

	initListeners();
	
	initAutoHeight();
});

function initPreloaders() {

	// Hide global pre-loader spinner
	jQuery('.module').imagesLoaded( function() {

		jQuery( '#pre-loader-main' ).fadeOut( "slow" );
	});
}

function initLanding() {

	// perspective header
	if( jQuery().cmtHeader ) {

		jQuery( "#header" ).cmtHeader( { scrollDistance: 500 } );
	}

	// smooth scroll
	if( jQuery().cmtSmoothScroll ) {

		jQuery( ".smooth-scroll" ).cmtSmoothScroll();
	}
}

function initModules() {

	// Page Modules
	if( jQuery().cmtPageModule ) {

		jQuery( ".module" ).cmtPageModule( {
			fullHeight: true,
			modules: {
				'module-about': { fullHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
				'module-contact': { fullHeight: false, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
				'module-public': { fullHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
				'module-public-full': { fullHeight: false, heightAutoMobile: true, heightAutoMobileWidth: 1024 }
			}
		});
	}
}

function initListeners() {

	// Initialise the mobile button
	jQuery( "#btn-mobile-menu, #nav-mobile li" ).click( function() {

		jQuery( "#nav-mobile" ).slideToggle( "slow" );
	});

	// Show/ Hide login box
	jQuery("#btn-login, #btn-login-mobile").click( function() {

		jQuery( "#wrap-login-register" ).toggle( "slow" );
	});

	// Show/ Hide settings box
	jQuery("#btn-settings, #btn-settings-mobile").click( function( e ) {

		e.preventDefault();

		jQuery( "#box-settings" ).toggle( "slow" );
	});

	// File Uploader
	if( jQuery().cmtFileUploader ) {

		jQuery( '.file-uploader' ).cmtFileUploader();
	}
}

function initAutoHeight () {
		
		jQuery( ".header" ).css( "height", jQuery(".items").height()-8 );
		
		if( window.innerWidth <= 1024  ) {
		
			jQuery( ".header" ).css( "height", "auto" );
		}
}
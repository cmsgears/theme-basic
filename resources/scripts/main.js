jQuery(document).ready( function() {

	initPreloaders();

	initCmgTools();

	initListeners();

	initAutoHeight();
});

function initPreloaders() {

	// Hide global pre-loader spinner
	jQuery( '.block' ).imagesLoaded( { background: true }, function() {

		jQuery( '#pre-loader-main' ).fadeOut( 'slow' );
	});
}

function initCmgTools() {

	// perspective header
	if( jQuery().cmtHeader ) {

		jQuery( "#header-main" ).cmtHeader( { scrollDistance: 350 } );
	}

	// smooth scroll
	if( jQuery().cmtSmoothScroll ) {

		jQuery( ".smooth-scroll" ).cmtSmoothScroll();
	}

	// Initialise the Blocks
	if( jQuery().cmtBlock ) {

		jQuery( ".block" ).cmtBlock({
			fullHeight: true,
			blocks: {
				'block-about': { 'fullHeight': true, heightAutoMobile: true, heightAutoMobileWidth: 1024 },
				'block-contact': { 'fullHeight': true, 'heightAuto': true },
				'block-public': { 'fullHeight': true, heightAutoMobile: true, heightAutoMobileWidth: 1600 }
			}
		});
	}

	// File Uploader
	if( jQuery().cmtFileUploader ) {

		jQuery( '.file-uploader' ).cmtFileUploader();
	}
}

function initListeners() {

	// Initialise the mobile button
	jQuery( "#btn-mobile-menu, #nav-mobile li" ).click( function() {

		jQuery( "#nav-mobile" ).slideToggle( "slow" );
	});

	// Show/ Hide login box
	jQuery( "#btn-login, #btn-login-mobile" ).click( function() {

		jQuery( "#wrap-login-register" ).toggle( "slow" );
	});

	// Show/ Hide settings box
	jQuery( "#btn-settings, #btn-settings-mobile" ).click( function( e ) {

		e.preventDefault();

		jQuery( "#box-settings" ).toggle( "slow" );
	});
}

function initAutoHeight () {

	jQuery( ".header" ).css( "height", jQuery( ".items" ).height() - 8 );

	if( window.innerWidth <= 1024  ) {

		jQuery( ".header" ).css( "height", "auto" );
	}
}
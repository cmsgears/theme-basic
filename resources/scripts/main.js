jQuery( document ).ready( function() {

	initPreloaders();

	initCmgTools();

	initListeners();

	initAutoHide();
});

// == Pre Loaders =========================

function initPreloaders() {

	jQuery( '.container-main' ).imagesLoaded( { background: true }, function() {

		jQuery( '#pre-loader-main' ).fadeOut( 'slow' );
	});
}

// == CMT JS ==============================

function initCmgTools() {

	// Page Blocks
	jQuery( '.block' ).cmtBlock({
		// Generic
		fullHeight: true,
		// Block Specific - Ignores generic
		blocks: {
			'block-public': { fullHeight: true, heightAutoMobile: true, heightAutoMobileWidth: 1024 }
		}
	});

	// Perspective Header
	jQuery( '#header-main' ).cmtHeader( { scrollDistance: 350 } );

	// Smooth Scroll
	jQuery( '.smooth-scroll' ).cmtSmoothScroll();

	// Box Forms
	jQuery( '.box-form' ).cmtFormInfo();

	// Ratings
	jQuery( '.cmt-rating' ).cmtRate();

	// Select
	jQuery( '.cmt-select' ).cmtSelect( { iconHtml: '<span class="fa fa-caret-down"></span>' } );
	jQuery( '.cmt-select-c' ).cmtSelect( { iconHtml: '<span class="fa fa-caret-down"></span>', copyOptionClass: true } );
	jQuery( '.cmt-select-s' ).cmtSelect( { iconHtml: '<span class="fa fa-caret-down"></span>', wrapperClass: 'element-small' } );

	// Checkboxes
	jQuery( '.cmt-checkbox' ).cmtCheckbox();

	// Field Groups
	jQuery( '.cmt-field-group' ).cmtFieldGroup();

	// File Uploader
	jQuery( '.file-uploader' ).cmtFileUploader();

	// Popups
	jQuery( '.popup' ).cmtPopup();

	// Popouts
	jQuery( '.popout-group' ).cmtPopoutGroup();

	// Auto Fillers
	jQuery( '.auto-fill' ).cmtAutoFill();

	// Vertical & Horizontal Tabs
	jQuery( '.tabs-v, .tabs-h' ).cmtTabs();

	// Grid
	jQuery( '.grid-data' ).cmtGrid();

	// Icon Picker
	jQuery( '.icon-picker' ).cmtIconPicker();
	
	// Collapsible Sidebar
	jQuery( '#sidebar-main' ).cmtCollapsibleMenu();
}

// == JS Listeners ========================

function initListeners() {

	// Datepicker
	if( jQuery().datepicker ) {

		var start = jQuery( '.datepicker' ).attr( 'start' );

		if( null != start ) {

			jQuery( '.datepicker' ).datepicker({
				dateFormat: 'yy-mm-dd',
				minDate: start
			});
		}
		else {
			
			jQuery( '.datepicker' ).datepicker({
				dateFormat: 'yy-mm-dd'
			});
		}
	}

	// Custom Scroller
	if( jQuery().mCustomScrollbar ) {

		jQuery( '.cscroller' ).mCustomScrollbar( { autoHideScrollbar: true } );
	}
	
	// Initialise the mobile button
	jQuery( '#btn-mobile-menu, #nav-mobile li' ).click( function() {

		jQuery( '#nav-mobile' ).slideToggle( 'slow' );
	});

	// Show/ Hide login box
	jQuery( '#btn-login, #btn-login-mobile' ).click( function() {

		jQuery( '#wrap-login-register' ).toggle( 'slow' );
	});

	// Show/ Hide settings box
	jQuery( '#btn-settings, #btn-settings-mobile' ).click( function( e ) {

		e.preventDefault();

		jQuery( '#box-settings' ).toggle( 'slow' );
	});
}

// == Auto Hide ===========================

function initAutoHide() {

	hideElement( jQuery( '.popout-trigger' ), jQuery( '.popout' ) );
}

function hideElement( targetElement, hideElement ) {

	jQuery( window ).click( function( e ) {

	    if ( !targetElement.is( e.target ) && targetElement.has( e.target ).length === 0 ) {

			jQuery( hideElement ).slideUp();

	        targetElement.removeClass( 'active' );
	    }
	});
}

// == Auto Height =========================

function initAutoHeight () {

	jQuery( '.header' ).css( 'height', jQuery( '.items' ).height() - 8 );

	if( window.innerWidth <= 1024  ) {

		jQuery( '.header' ).css( 'height', 'auto' );
	}
}

// == Window Resize, Scroll ===============

function initWindowResize() {

	//resizeElements();

	jQuery( window ).resize( function () {

		//resizeElements();
	});
}

function initWindowScroll() {

	jQuery( window ).scroll(function() {

		var scrolledY = jQuery( window ).scrollTop();

	  	// Do scroll specific tasks
	});
}

function resizeElements() {

	// Resize elements on window resize
}

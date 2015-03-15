// Page Modules -------------------------------------------

( function( cmg ) {

	cmg.fn.cmgPageModules = function( options ) {

		// == Init == //

		// Configure Modules
		var settings 		= cmg.extend( {}, cmg.fn.cmgPageModules.defaults, options );
		var modules			= this;
		var screenHeight	= cmg( window ).height();
		var modulesArr		= settings.modules;
		var modulesKeys		= Object.keys( modulesArr );

		// Iterate and initialise all the fox sliders
		modules.each( function() {

			var module	= cmg( this );

			init( module );
		});

		// Initialise parallax
		if( settings.backgroundParallax ) {

			cmg( window ).scroll( scrollBackground );
		}

		// return control
		return;

		// == Private Functions == //

		// Initialise Module
		function init( module ) {

			if( settings.fullHeight ) {

				module.css( { 'height': screenHeight + "px" } );
			}

			if( cmg.inArray( module.attr( "id" ), modulesKeys ) >= 0 ) {

				var moduleSettings	= modulesArr[ module.attr( "id" ) ];
				var fullHeight 		= moduleSettings[ "fullHeight" ];
				var css 			= moduleSettings[ "css" ];

				if( fullHeight ) {

					module.css( { 'min-height': screenHeight + "px" } );
				}

				module.css( css );
			}
		}

		// Initialise parallax
		function scrollBackground() {
			
			var winHeight 	= cmg( window ).height();
		    var winTop 		= cmg( window ).scrollTop();
		    var winBottom 	= winTop + winHeight;
		    var winCurrent 	= ( winTop + winBottom ) / 2;
		    
		    modules.each( function( i ) {

		        var module 			= cmg( this );
		        var moduleHeight 	= module.height();
		        var moduleTop 		= module.offset().top;
		        var moduleBottom 	= moduleTop + moduleHeight;
		        var background		= module.children(".module-bkg-parallax");

		        if( null != background && background.length > 0 && winBottom > moduleTop && winTop < moduleBottom ) {

					var bkgWidth 		= background.width();
	            	var bkgHeight 		= background.height();
		            var min 			= 0;
		            var max 			= winHeight - bkgHeight;
		            var heightOverflow 	= moduleHeight < winHeight ? bkgHeight - moduleHeight : bkgHeight - winHeight;
		            moduleTop 			= moduleTop - heightOverflow;
		            moduleBottom 		= moduleBottom + heightOverflow;
		            var value 			= min + (max - min) * ( winCurrent - moduleTop ) / ( moduleBottom - moduleTop );

		            background.css( "background-position", "50% " + value + "px" );
		        }
		    });
		}
	};

	// Default Settings
	cmg.fn.cmgPageModules.defaults = {
		// Controls
		fullHeight: true,
		backgroundParallax: true,
		modules: {}
	};

}( jQuery ) );
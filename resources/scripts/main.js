// Jquery init
jQuery(document).ready( function() {

	initListeners();
});

function initListeners() {

	// Show pre-loader spinner
	jQuery( '#pre-loader' ).fadeIn();

	// Hide pre-loader spinner
	jQuery('.module').imagesLoaded( function() {

		jQuery( '#pre-loader' ).fadeOut( "slow" );
	});

	// Initialise the Page Modules
	jQuery(".module").cmgPageModules( {
		fullHeight: true,
		modules: {
			'rooms': { 'fullHeight': true, 'css': { 'height': 'auto' } },
			'about': { 'fullHeight': false, 'css': { 'height': 'auto', 'min-height': '500px' } },
			'page': { 'fullHeight': false, 'css': { 'height': 'auto', 'min-height': '500px' } },
			'blog': { 'fullHeight': false, 'css': { 'height': 'auto', 'min-height': '500px' } }
		}
	});

	// Initialise the mobile button
	jQuery("#btn-mobile-menu").click( function() {
		
		jQuery(".nav-main").slideToggle( "slow" );
	});
	
	// Forms
	jQuery( ".frm-ajax" ).processAjax();
}

// Forms --------------------------------------------------------------------------

function preCRProcessor( formId, formGroup, formKey ) {

	return true;
}

preAjaxProcessor.addListener( preCRProcessor );

function postCRProcessorSuccess( formId, formGroup, formKey, data ) {

	switch( formGroup ) {
		
		case FORM_GROUP_PUBLIC:
		{
			switch( formKey ) {
				
				case FORM_KEY_LOGIN:
				{
					window.location = siteUrl + "?r=room/index";

					break;
				}
			}

			break;
		}
	}
}

function postCRProcessorFailure( formId, formGroup, formKey, data ) {

}

postAjaxProcessor.addSuccessListener( postCRProcessorSuccess );
postAjaxProcessor.addFailureListener( postCRProcessorFailure );
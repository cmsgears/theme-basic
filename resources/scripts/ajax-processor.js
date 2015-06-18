var FORM_KEY_AVATAR		=  100000;

jQuery(document).ready( function() {

	initAjaxListeners();
});

function initAjaxListeners() {

	// Listen for Ajax Forms
	jQuery( ".frm-ajax" ).processAjax();
}

// Forms --------------------------------------------------------------------

function postBTProcessorSuccess( formId, formGroup, formKey, data ) {

	switch( formGroup ) {

		case FORM_GROUP_DEFAULT:
		{

			switch( formKey ) {

				case FORM_KEY_LOGIN:
				{
					window.location.replace( siteUrl + "user/home" );

					break;
				}
				case FORM_KEY_AVATAR:
				{
					jQuery( "#" + formId ).parent().hide();

					break;
				}
			}

			break;
		}
	}
}

postAjaxProcessor.addSuccessListener( postBTProcessorSuccess );
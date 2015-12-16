jQuery(document).ready(function() {

	/*Documentation link and Upgrade to PRO link */
	if( !jQuery( ".novel-docs" ).length ) {
		jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section novel-docs">');
	}

	if( jQuery( ".novel-docs" ).length ) {

		jQuery('.novel-docs').append('<a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="http://www.themehunk.com/novellite-theme-documentation/" class="button" target="_blank">{documentation}</a>'.replace('{documentation}', NovelLiteCustomizerObject.documentation));

	}
	jQuery('.preview-notice').append('<a class="novel-docs-to-pro-button" href="http://www.themehunk.com/product/novelpro-single-page-theme/" class="button" target="_blank">{pro}</a>'.replace('{pro}',NovelLiteCustomizerObject.pro));

	if ( !jQuery( ".novel-docs" ).length ) {
		jQuery('#customize-theme-controls > ul').prepend('</li>');
	}



});
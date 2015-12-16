<?php
/**
 * Sanitization for textarea field
 */
function NovelLite_sanitize_textarea( $input ) {
    global $allowedposttags;
    $output = wp_kses( $input, $allowedposttags );
    return $output;
}

/**
 * Returns a sanitized filepath if it has a valid extension.
 */
function NovelLite_sanitize_upload( $upload ) {
    $return = '';
    $fype = wp_check_filetype( $upload );
    if ( $fype["ext"] ) {
        $return = esc_url_raw( $upload );
    }
    return $return;
}

/**
 * vaild int.
 */
function NovelLite_sanitize_int( $input ) {
$return = absint($input);
    return $return;
}


function NovelLite_registers() {

    wp_enqueue_script( 'NovelLite_customizer_script', get_template_directory_uri() . '/js/customizer.js', array("jquery"), '', true  );
    
    wp_localize_script( 'NovelLite_customizer_script', 'NovelLiteCustomizerObject', array(
        
        'documentation' => __( 'View Documentation', 'novellite' ),
        'pro' => __('View PRO version','novellite')

    ) );
}
add_action( 'customize_controls_enqueue_scripts', 'NovelLite_registers' );

function NovelLite_customizer_styles() {

    wp_enqueue_style('NovelLite_customizer_styles', get_template_directory_uri() . '/css/customizer_styles.css');

}
add_action('customize_controls_print_styles', 'NovelLite_customizer_styles');
?>
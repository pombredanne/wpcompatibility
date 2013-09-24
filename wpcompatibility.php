<?php
/* 
* Plugin Name: WP.compatibility
* Description: Basic support for Wordpress.com shortcodes
*/

function codeblocks($atts, $content = null) {
    echo $content;
    extract(shortcode_atts(array(
        'language' => '',
        'gutter' => ''
    ), $atts));

    return '<pre>' . $content . '</pre>';
}

add_shortcode('code', 'codeblocks');

remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);

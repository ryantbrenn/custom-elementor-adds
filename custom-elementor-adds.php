<?php
/**
 * Plugin Name: Elementor Custom Brush Extension
 * Description: Custom Brush extension.
 * Plugin URI:  https://brushstroker.com
 * Version:     1.0.0
 * Author:      DDC Team brush stroker
 * Author URI:  https://brushstroker.com
 * Text Domain: elementor-brush-extension
 */

// Add Header Brush Shape Divider
add_filter('elementor/shapes/additional_shapes', function( $additional_shapes ){

$additional_shapes['brush1'] = [
'title' => _x('Header Brush', 'Shapes', 'elementor'),
'has_negative' => true,
'path' => get_stylesheet_directory() . '/assets/images/header-brush.svg'
];

return $additional_shapes;
});


//add Custom Brush 1
add_filter('elementor/shapes/additional_shapes', function( $additional_shapes ){

$additional_shapes['cbrush1'] = [
'title' => _x('Custom Brush 1', 'Shapes', 'elementor'),
'has_negative' => true,
'path' => get_stylesheet_directory() . '/assets/images/custom-brush-1.svg'
];

return $additional_shapes;
});


//add custom brush 2
add_filter('elementor/shapes/additional_shapes', function( $additional_shapes ){

$additional_shapes['cbrush2'] = [
'title' => _x('Custom Brush 2', 'Shapes', 'elementor'),
'has_negative' => true,
'path' => get_stylesheet_directory() . '/assets/images/custom-brush-2.svg'
];

return $additional_shapes;
});


//add custom brush 3
add_filter('elementor/shapes/additional_shapes', function( $additional_shapes ){

$additional_shapes['cbrush3'] = [
'title' => _x('Custom Brush 3', 'Shapes', 'elementor'),
'has_negative' => true,
'path' => get_stylesheet_directory() . '/assets/images/custom-brush-3.svg'
];

return $additional_shapes;
});


//add custom brush 4
add_filter('elementor/shapes/additional_shapes', function( $additional_shapes ){

$additional_shapes['cbrush4'] = [
'title' => _x('Custom Brush 4', 'Shapes', 'elementor'),
'has_negative' => true,
'path' => get_stylesheet_directory() . '/assets/images/custom-brush-4.svg'
];

return $additional_shapes;
});


# custom-elementor-adds-plugin
tool to setup custom shape divider for Elementor 

# to install
- clone or download repo
- save to /plugins folder 
- activate plugin 

#to set custom shpe dividers 
edit file paths and titles of shape dividers within additional shapes function blocks, add and remove blocks as needed: 

#example:
// Add Shape Divider
add_filter('elementor/shapes/additional_shapes', function( $additional_shapes ){

$additional_shapes['brush1'] = [
'title' => _x('Your Shape Divider Name Here', 'Shapes', 'elementor'),
'has_negative' => true,
'path' => get_stylesheet_directory() . 'Path-to-your-file-here'
];

return $additional_shapes;
});


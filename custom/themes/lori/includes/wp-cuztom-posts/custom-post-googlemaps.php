<?php //Google Maps
$args = array(
    'has_archive'   => true,
    'hierarchical'  => true,
    'show_in_nav_menus' => true,
    'menu_icon'     => 'dashicons-location', //http://melchoyce.github.io/dashicons/
    'supports'      => array( 'title'),
    );

$map = register_cuztom_post_type('Map', $args);

$map->add_meta_box(
    'map',
    'Map',
    array(
        'bundle', 
        array(
            array(
                'name'          => 'title',
                'label'         => 'Title',
                'description'   => 'Add map title',
                'type'          => 'text',
            ),
            array(
                'name'          => 'address',
                'label'         => 'Street Address',
                'description'   => 'Enter street address',
                'type'          => 'text',
            ),
            array(
                'name'          => 'postalcode',
                'label'         => 'Postal Code',
                'description'   => 'Enter postal code',
                'type'          => 'text',
            ),
            array(
                'name'          => 'seasonality',
                'label'         => 'Seasonality',
                'description'   => '',
                'type'          => 'text',
            ),
            array(
                'name'          => 'hours',
                'label'         => 'Hours',
                'description'   => 'Location hours',
                'type'          => 'text',
            )
        )
    )
);

?>
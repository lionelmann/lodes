<?php //Connect CPT
$args = array(
    'has_archive'   => true,
    'show_in_nav_menus' => true,
    'menu_icon'     => 'dashicons-admin-home', //http://melchoyce.github.io/dashicons/
    'supports'      => array( 'title'),
    'menu_position' => 75,
    'labels'        => array( 'name' => 'Home Setup'),
    'rewrite'       => array( 'slug' => 'setup'),
    'description'   => 'This post type is for managing all sections on the homepage'
    );

$home = register_cuztom_post_type('Home Setup', $args);

$home->add_meta_box(
    'banner',
    'Banner', 
    array(
        array(
            'name'          => 'image',
            'label'         => 'Image',
            'description'   => 'Dimensions 1200px x 800px',
            'type'          => 'image',
        ),
        array(
            'name'          => 'headline',
            'label'         => 'Headline',
            'description'   => 'Enter headline',
            'type'          => 'text',
        ),
    )
);


$home->add_meta_box(
    'content',
    'Content', 
    array(
        array(
            'name'          => 'content',
            'label'         => 'Text',
            'description'   => 'Enter text',
            'type'          => 'wysiwyg',
        )
    )
);

$home->add_meta_box(
    'testimonial',
    'Testimonials',
    array(
        'bundle', 
        array(
            array(
                'name'          => 'text',
                'label'         => 'Content',
                'description'   => '',
                'type'          => 'textarea',
                
            )
        )
    )
);

$home->add_meta_box(
    'slider',
    'Gallery <i>(Optional)</i>', 
    array(
        array(
        'name'          => 'select',
        'label'         => 'Select a related gallery',
        'description'   => '',
        'type'          => 'post_select',
        'args'          => array(
            'post_type' => 'slider',
            'show_option_none' => "Select a Gallery",
            )
        )
    )
);

?>
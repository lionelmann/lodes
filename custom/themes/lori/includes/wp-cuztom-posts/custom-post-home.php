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
        array(
            'name'          => 'text',
            'label'         => 'Excerpt',
            'description'   => 'Enter text',
            'type'          => 'textarea',  
        )
    )
);

$home->add_meta_box(
    'action',
    'Take action', 
    array(
        array(
            'name'          => 'button',
            'label'         => 'Button label',
            'description'   => 'Enter button label and make your users want to click',
            'type'          => 'text',
        ),
        array(
            'name'          => 'url',
            'label'         => 'Url',
            'description'   => 'Example: http://www.google.ca',
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

?>
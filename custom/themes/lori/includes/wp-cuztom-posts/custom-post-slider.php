<?php //Connect CPT

$args = array(
	'has_archive'  => true,
	'menu_icon'    => 'dashicons-images-alt2', //https://developer.wordpress.org/resource/dashicons/#email
	'supports'     => array( 'title' ),
	'labels'       => array('name' => 'Slider')
 	);

$slider = register_cuztom_post_type( 'Slider', $args);

$slider->add_meta_box(
	'slider',
	'Gallery',	
	array(
        'bundle', 
        array(
            array(
                'name'          => 'headline',
                'label'         => 'Headline',
                'description'   => '',
                'type'          => 'text',
                
            ),
            array(
            'name'          => 'image',
            'label'         => 'Image',
            'description'   => 'Dimensions 1200px x 800px',
            'type'          => 'image',
            ),
        )
    )
);

?>
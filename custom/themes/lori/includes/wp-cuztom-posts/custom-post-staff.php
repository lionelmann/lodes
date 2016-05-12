<?php //Connect CPT

$args = array(
	'has_archive'  => true,
	'menu_icon'    => 'dashicons-smiley', //http://melchoyce.github.io/dashicons/
	'supports'     => array( 'title' ),
	'labels'       => array('name' => 'Staff')
 	);

$staff = register_cuztom_post_type( 'Staff', $args);

$staff->add_meta_box(
	'staff',
	'Employee',	
	array(
		array(
			'name'          => 'image',
			'label'         => 'Profile image',
			'description'   => 'Dimensions 300px x 300px',
			'type'          => 'image',
		),
		array(
			'name'          => 'title',
			'label'         => 'Job Title',
			'decription'    => '',
			'type'          => 'text',          
		),
		array(
        	'name'          => 'email',
        	'label'         => 'Email',
        	'description'   => '',
        	'type'          => 'text'
     	),
     	array(
        	'name'          => 'phone',
        	'label'         => 'Direct',
        	'description'   => '',
        	'type'          => 'text'
     	),
     	array(
        	'name'          => 'extension',
        	'label'         => 'Extension',
        	'description'   => '',
        	'type'          => 'text'
     	),
     	array(
        	'name'          => 'bio',
        	'label'         => 'Bio',
        	'description'   => '',
        	'type'          => 'textarea'
     	)
	)
);

?>
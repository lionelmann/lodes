<?php //Connect CPT

$args = array(
	'has_archive'  => true,
	'menu_icon'    => 'dashicons-smiley', //http://melchoyce.github.io/dashicons/
	'supports'     => array( 'title' ),
	'labels'       => array('name' => 'Staff')
 	);

$staff = register_cuztom_post_type( 'Staff', $args);

$role = register_cuztom_taxonomy( 'Role', 'staff' );

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
        	'type'          => 'wysiwyg'
     	)
	)
);

// Change the ADMIN columns for the edit CPT screen
function change_staff_columns( $cols ) {
    $cols = array(
        'cb'      => '<input type="checkbox" />',
        'title'   => __( 'Name', 'trans' ),
        'avatar'  => __( 'Profile Image', 'trans' ),
        'role'    => __( 'Role', 'trans' ),
        'job'     => __( 'Job Title', 'trans' ),
        'email'   => __( 'Email', 'trans' ),
        'date'    => __( 'Date', 'trans' ),
    );
    return $cols;
}

add_filter( "manage_staff_posts_columns", "change_staff_columns" );

// Add content to those ADMIN columns
function custom_staff_columns( $column, $post_id ) {
    switch ( $column ) {
        case "avatar":  
            $staff_image_id   = get_post_meta($post_id, '_staff_image', true);
            $staff_image_url  = wp_get_attachment_image_src($staff_image_id,'thumbnail', true);
            if (!$staff_image_id) {
                echo '<div style="background-color: #cccccc; width: 150px; height: 150px; border-radius: 50%;"></div>';
            } else {
                echo '<img style="border-radius: 50%;" src=' . $staff_image_url[0] . '>';
            }
        break;
        case "job":
            echo get_post_meta($post_id,'_staff_title',true);
        break; 
        case "email":
            echo get_post_meta($post_id,'_staff_email',true);
        break; 
        case "role":
            echo get_the_term_list($post_id,'role','',', ','');
        break; 
    }
}

add_action( "manage_staff_posts_custom_column", "custom_staff_columns", 10, 2 );

// Make these ADMIN columns sortable
function sortable_staff_columns() {
    return array(
        'avatar' => 'avatar',
        'date'   => 'date',
        'job'    => 'job',
        'title'  => 'title',
        'email'  => 'email',
        'role'   => 'role',
    );
}
add_filter( "manage_edit-staff_sortable_columns", "sortable_staff_columns" );

?>
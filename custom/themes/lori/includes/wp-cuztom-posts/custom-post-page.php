<?php //Content Template for Pages

function remove_meta_boxes() {
    remove_meta_box('postcustom', 'page', 'normal'); //Custom fields metabox
    remove_meta_box('commentstatusdiv', 'page', 'normal'); //Comments status metabox (discussion)
    remove_meta_box('commentsdiv', 'page', 'normal'); //Comments metabox
    remove_meta_box('trackbacksdiv', 'page', 'normal'); //Trackbacks metabox
    remove_meta_box('authordiv', 'page', 'normal'); //Author metabox
    remove_meta_box('slugdiv', 'page', 'normal'); //Slug metabox
    //remove_meta_box('postexcerpt', 'page', 'normal'); //Excerpt metabox
    //remove_meta_box('postimagediv', 'page', 'side'); //Featured image metabox
}
add_action( 'admin_menu' , 'remove_meta_boxes' );

$pages = new Cuztom_Post_Type('page');

$pages->add_meta_box(
    'slide',
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
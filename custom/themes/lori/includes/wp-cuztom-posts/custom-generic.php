<?php //Generic Modular Content Template for Posts and Pages
function remove_meta_boxes() {
    remove_meta_box('postcustom', 'page', 'normal'); //Custom fields metabox
    remove_meta_box('commentstatusdiv', 'page', 'normal'); //Comments status metabox (discussion)
    remove_meta_box('commentsdiv', 'page', 'normal'); //Comments metabox
    remove_meta_box('trackbacksdiv', 'page', 'normal'); //Trackbacks metabox
    remove_meta_box('authordiv', 'page', 'normal'); //Author metabox
    remove_meta_box('slugdiv', 'page', 'normal'); //Slug metabox
    remove_meta_box('postexcerpt', 'page', 'normal'); //Excerpt metabox
    remove_meta_box('postimagediv', 'page', 'side'); //Featured image metabox
}
add_action( 'admin_menu' , 'remove_meta_boxes' );
$pages = new Cuztom_Post_Type('page');
$pages->add_meta_box(
    'banner',
    'Featured banner', 
    array(
        array(
            'name'          => '',
            'label'         => 'Overview Intro',
            'description'   => 'Insert Overview intro here',
            'type'          => 'image',
        ),
        array(
            'name'          => 'name_textarea',
            'label'         => 'Overview Text',
            'description'   => 'Insert Overview text content here.',
            'type'          => 'image',
        ),
        array(
            'name'          => 'name_text',
            'label'         => 'Overview Intro',
            'description'   => 'Insert Overview intro here',
            'type'          => 'image',
        ),
        array(
            'name'          => 'name_textarea',
            'label'         => 'Overview Text',
            'description'   => 'Insert Overview text content here.',
            'type'          => 'image',
        ),
        array(
            'name'          => 'name_text',
            'label'         => 'Overview Intro',
            'description'   => 'Insert Overview intro here',
            'type'          => 'image',
        ),
        array(
            'name'          => 'name_textarea',
            'label'         => 'Overview Text',
            'description'   => 'Insert Overview text content here.',
            'type'          => 'image',
        )
    )
);
?>
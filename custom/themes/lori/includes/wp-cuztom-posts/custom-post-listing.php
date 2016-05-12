<?php //Listings CPT

$args = array(
    'has_archive'       => true,
    'hierarchical'      => true,
    'show_in_nav_menus' => true,
    'menu_icon'         => 'dashicons-groups', //http://melchoyce.github.io/dashicons/
    'supports'          => array( 'title'),
    //'taxonomies'        => array('category'),
    );

$listing = register_cuztom_post_type('listing', $args);

$listing->add_meta_box(
    'address',
    'Farm address', 
    array(
        array(
            'name'          => 'address1',
            'label'         => 'Farm address line 1',
            'type'          => 'text',
        ),
        array(
            'name'          => 'address2',
            'label'         => 'Farm address line 2',
            'type'          => 'text',
        ),
        array(
            'name'          => 'town',
            'label'         => 'Town',
            'type'          => 'text',
        ),
        array(
            'name'          => 'county',
            'label'         => 'County',
            'type'          => 'text',
        ),
        array(
            'name'          => 'province',
            'label'         => 'Province',
            'type'          => 'select',
            'options'       => array(
                'AB'    => 'AB',
                'BC'    => 'BC',
                'MB'    => 'MB',
                'NB'    => 'NB',
                'NL'    => 'NL',
                'NS'    => 'NS',
                'NT'    => 'NT',
                'NU'    => 'NU',
                'ON'    => 'ON',
                'PE'    => 'PE',
                'QC'    => 'QC',
                'SK'    => 'SK',
                'YT'    => 'YT',
            ),
        ),
        array(
            'name'          => 'postalcode',
            'label'         => 'Postal Code',
            'type'          => 'text',
        ),
    )
);

$listing->add_meta_box(
    'description',
    'Farm Description and History', 
    array(
        array(
            'name'          => 'description',
            'label'         => 'Farm Description',
            'description'   => 'Please provide a brief description of the farm, its history and what you would like to see it become in the future:',
            'type'          => 'textarea',
        ),
    )
);

$listing->add_meta_box(
    'use',
    'What is the farmland available for?', 
    array(
        array(
            'type'          => 'checkboxes',
            'name'          => 'farmland',
            'label'         => 'Check all that apply',
            'options'       => array(
                'On-farm employment'    => 'On-farm employment',
                'Mentoring'             => 'Mentoring',
                'Internship'            => 'Internship',
                'Business partnership with new farmer' => 'Business partnership with new farmer',
                'Lease'                 => 'Lease',
                'Lease-to-own'          => 'Lease-to-own',
                'Sale'                  => 'Sale'
            ),
        )
    )
);

$listing->add_meta_box(
    'soil',
    'What types of soil are found on the farm?', 
    array(
        array(
            'type'          => 'checkboxes',
            'label'         => 'Check all that apply',
            'name'          => 'land',
            'options'       => array(
                'Clay'      => 'Clay',
                'Loam'      => 'Loam',
                'Sand'      => 'Sand',
                'Clay loam' => 'Clay loam',
                'Sandy loam'=> 'Sandy loam',
                'Other'     => 'Other'
            ),
        ),
        array(
            'name'          => 'other',
            'label'         => 'Please Specify',
            'type'          => 'text',
        ),
    )
);

$listing->add_meta_box(
    'acre',
    'What is the acreage of your farm?', 
    array(
        array(
            'name'          => 'other',
            'label'         => 'Total acreage of your Farm',
            'type'          => 'text',
        ),
        array(
            'type'          => 'select',
            'label'         => 'What acreage is available for use by a new farmer?',
            'name'          => 'farmland',
            'options'       => array(
                '1 acre or less'    => '1 acre or less',
                '2-5 acres'         => '2-5 acres',
                '5-10 acres'        => '5-10 acres',
                '10-25 acres'       => '10-25 acres',
                '25-50 acres'       => '25-50 acres',
                '50 acres or more'  => '50 acres or more'
            ),
        ),
    )
);

$listing->add_meta_box(
    'land',
    'What is your land currently being used for?', 
    array(
        array(
            'type'          => 'checkboxes',
            'label'         => 'Check all that apply',
            'options'       => array(
                'Livestock'      => 'Livestock',
                'Field crops'    => 'Field crops',
                'Market garden'  => 'Market garden',
                'Hay or pasture' => 'Hay or pasture',
                'Fallow'         => 'Fallow',
                'Woodlot'        => 'Woodlot',
                'Other'          => 'Other'
            ), 
        ),
        array(
            'name'          => 'other',
            'label'         => 'Please Specify',
            'type'          => 'text',
        ),
    )
);

$listing->add_meta_box(
    'practices',
    'What farming practices are you currently using?', 
    array(
        array(
            'type'          => 'checkboxes',
            'label'         => 'Check all that apply',
            'options'       => array(
                'Conventional'      => 'Conventional',
                'Certified organic' => 'Certified organic',
                'Ecological production, but not certified' => 'Ecological production, but not certified',
                'None, the land is not being farmed' => 'None, the land is not being farmed',
                'Biodynamic'    => 'Biodynamic',
                'Other'         => 'Other',
            ),
        )
    )
);

$listing->add_meta_box(
    'strategies',
    'If applicable, what have been your marketing strategies?', 
    array(
        array(
            'type'          => 'checkboxes',
            'label'         => 'Check all that apply',
            'options'       => array(
                'Wholesale'    => 'Wholesale',
                'Commodity markets'    => 'Commodity markets',
                'Farmers markets or farm stand'    => 'Farmers markets or farm stand',
                'Community Supported Agriculture (CSA)'    => 'Community Supported Agriculture (CSA)',
                'Restaurant sales'    => 'Restaurant sales',
                'Other'    => 'Other',
            ), 
        ),
        array(
            'name'          => 'other',
            'label'         => 'Please Specify',
            'type'          => 'text',
        ),
    )
);

$listing->add_meta_box(
    'facilities',
    'What facilities and equipment are available for a new farmer to use?', 
    array(
        array(
            'type'          => 'checkboxes',
            'label'         => 'Check all that apply',
            'options'       => array(
                'Housing'    => 'Housing',
                'Irrigation capacity'    => 'Irrigation capacity',
                'Irrigation equipment'    => 'Irrigation equipment',
                'Greenhouse'    => 'Greenhouse',
                'Barn or other livestock facilities'    => 'Barn or other livestock facilities',
                'Fencing'    => 'Fencing',
                'Agricultural machinery'    => 'Agricultural machinery',
                'Cold storage'    => 'Cold storage',
                'Processing facilities'    => 'Processing facilities',
                'Other'    => 'Other',
            ),
        )
    )
);

$listing->add_meta_box(
    'desired',
    'What are your desired farming practices by a new farmer?', 
    array(
        array(
            'type'          => 'checkboxes',
            'label'         => 'Check all that apply',
            'options'       => array(
                'Conventional'    => 'Conventional',
                'Certified organic'    => 'Certified organic',
                'Ecological production but not necessarily certified'    => 'Ecological production but not necessarily certified',
                'Biodynamic'    => 'Biodynamic',
                'No preference'    => 'No preference',
                'Other'    => 'Other',
            ),
        )
    )
);

$listing->add_meta_box(
    'relationship',
    'If applicable, please provide more information on the farming opportunity that is available and the kind of relationship you would like to have with a new farmer:', 
    array(
        array(
            'name'          => 'farmer',
            'label'         => 'Please Specify',
            'type'          => 'textarea',
        ),
    )
);

$listing->add_meta_box(
    'timeframe',
    'Within what timeframe could you be ready for a farm seeker to begin working your land?', 
    array(
        array(
            'name'          => 'from',
            'label'         => 'From',
            'type'          => 'date',
            'args'          => array(
                'date_format' => 'M d, Y'
            )
        ),
        array(
            'name'          => 'to',
            'label'         => 'To',
            'type'          => 'date',
            'args'          => array(
                'date_format' => 'M d, Y'
            )
        ),
    )
);

$listing->add_meta_box(
    'contact',
    'If applicable, please provide a date by which interested farmers should contact you:', 
    array(
        array(
            'name'          => 'farmer',
            'label'         => 'Please Specify',
            'type'          => 'date',
            'args'          => array(
                'date_format' => 'M d, Y'
            )
        ),
    )
);

$listing->add_meta_box(
    'images',
    'Farm Images',
    array(
        'bundle', 
        array(
            array(
                'name'          => 'image',
                'label'         => 'Upload Farm Images',
                'description'   => 'Dimensions 1200px x 800px',
                'type'          => 'image',
            ),
        )
    )
);

?>
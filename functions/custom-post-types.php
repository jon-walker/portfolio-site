<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_projects()
{

    register_post_type('jw_projects', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Projects', 'jw_projects'), // Rename these to suit
            'singular_name' => __('Project', 'jw_projects'),
            'add_new' => __('Add New', 'jw_projects'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'jw_projects'),
            'edit' => __('Edit', 'jw_projects'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'jw_projects'),
            'new_item' => __('New HTML5 Blank Custom Post', 'jw_projects'),
            'view' => __('View HTML5 Blank Custom Post', 'jw_projects'),
            'view_item' => __('View HTML5 Blank Custom Post', 'jw_projects'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'jw_projects'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'jw_projects'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'jw_projects')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-star-empty',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
        'menu_position' => 5 // Sets Placement in WP Admin to after posts
    ));
    register_taxonomy(
        'jw_skills',    // Taxonomy
        'jw_projects',  // Object Type
        array(
            'label' => __( 'Skills' ),
            'rewrite' => array( 'slug' => 'Skill' ),
            'hierarchical' => false, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
}

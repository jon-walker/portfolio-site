<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_projects()
{

    register_post_type('projects', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Projects', 'projects'), // Rename these to suit
            'singular_name' => __('Project', 'projects'),
            'add_new' => __('Add New', 'projects'),
            'add_new_item' => __('Add New Project', 'projects'),
            'edit' => __('Edit', 'projects'),
            'edit_item' => __('Edit Project', 'projects'),
            'new_item' => __('New Project', 'projects'),
            'view' => __('View Projects', 'projects'),
            'view_item' => __('View Project', 'projects'),
            'search_items' => __('Search Projects', 'projects'),
            'not_found' => __('No Projects Found', 'projects'),
            'not_found_in_trash' => __('No Projects Found in Trash', 'projects')
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
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5, // Sets Placement in WP Admin to just after posts
        'show_in_rest' => true, // Must be true to use Gutenberg editor
    ));
    register_taxonomy(
        'jw_skills',    // Taxonomy
        'projects',  // Object Type
        array(
            'label' => __( 'Skills' ),
            'rewrite' => array( 'slug' => 'Skill' ),
            'hierarchical' => false, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
}

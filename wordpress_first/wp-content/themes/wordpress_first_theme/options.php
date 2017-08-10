<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */

function optionsframework_option_name() {

    // Change this to use your theme slug
    $themename = wp_get_theme();
    $themename = preg_replace("/\W/", "_", strtolower($themename) );

    $optionsframework_settings = get_option( 'optionsframework' );
    $optionsframework_settings['id'] = $themename;
    update_option( 'optionsframework', $optionsframework_settings );
}


/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'ascent'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {
    // Background Defaults
    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll' );

    // Pull all the pages into an array
    $options_pages = array();
    $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
    $options_pages[''] = 'Select a page:';
    foreach ($options_pages_obj as $page) {
        $options_pages[$page->ID] = $page->post_title;
    }

    // If using image radio buttons, define a directory path
    $imagepath =  get_template_directory_uri() . '/includes/images/theme-options/';

    $options = array();

    /*  Tab 1: Header Settings
    ============================================================================================*/
    $options[] = array(
        'name' => __('Header Settings', 'wordpress_first'),
        'type' => 'heading');

    $options[] = array(
        'name' => __(' logo Image', 'wordpress_first'),
        'desc' => __('Logo Image.', 'wordpress_first'),
        'id' => 'logo',
        'type' => 'upload');
    $options[] = array(
        'name' => __('Slider Image 1', 'wordpress_first'),
        'desc' => __('Upload Photo for slider in Home page', 'wordpress_first'),
        'id' => 'slider_1',
        'type' => 'upload');


    $options[] = array(
        'name' => __('Header Description ', 'wordpress_first'),
        'desc' => __('write your description of banner part your name and what you do ', 'wordpress_first'),
        'id' => 'head_desc',
        'type' => 'textarea');

    $options[] = array(
        'name' => __('Your Name ', 'wordpress_first'),
        'desc' => __('write your first name to be displayed in banner', 'wordpress_first'),
        'id' => 'name',
        'type' => 'text');

    $options[] = array(
        'name' => __('Your work ', 'wordpress_first'),
        'desc' => __('write what you are ', 'wordpress_first'),
        'id' => 'title',
        'type' => 'text');

    $options[] = array(
        'name' => __('Slider Image 3', 'wordpress_first'),
        'desc' => __('Upload Photo for slider in Home page', 'wordpress_first'),
        'id' => 'slider_3',
        'type' => 'upload');
    /*  Tab 2: Panas Page Settings
           ============================================================================================*/
    $options[] = array(
        'name' => __('Details', 'wordpress_first'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Latest works details', 'wordpress_first'),
        'desc' => __('write the description on latest works', 'wordpress_first'),
        'id' => 'latest_work_desc',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('Offer from me details', 'wordpress_first'),
        'desc' => __('write the description of offer from me part', 'wordpress_first'),
        'id' => 'offer_desc',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('offer_title 1', 'wordpress_first'),
        'desc' => __('write offer title', 'wordpress_first'),
        'id' => 'offer_title_1',
        'type'=>'text');

    $options[] = array(
        'name' => __('offer_detail_1', 'wordpress_first'),
        'desc' => __('write offer detail', 'wordpress_first'),
        'id' => 'offer_detail_1',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('offer_title 2', 'wordpress_first'),
        'desc' => __('write offer title', 'wordpress_first'),
        'id' => 'offer_title_2',
        'type'=>'text');

    $options[] = array(
        'name' => __('offer_detail_2', 'wordpress_first'),
        'desc' => __('write offer detail', 'wordpress_first'),
        'id' => 'offer_detail_2',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('offer_title_3', 'wordpress_first'),
        'desc' => __('write offer title_3', 'wordpress_first'),
        'id' => 'offer_title_3',
        'type'=>'text');

    $options[] = array(
        'name' => __('offer_detail_3', 'wordpress_first'),
        'desc' => __('write offer detail 3', 'wordpress_first'),
        'id' => 'offer_detail_3',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('offer_title 4', 'wordpress_first'),
        'desc' => __('write offer title', 'wordpress_first'),
        'id' => 'offer_title_4',
        'type'=>'text');

    $options[] = array(
        'name' => __('offer_detail_4', 'wordpress_first'),
        'desc' => __('write offer detail 4', 'wordpress_first'),
        'id' => 'offer_detail_4',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('offer_title 5', 'wordpress_first'),
        'desc' => __('write offer title', 'wordpress_first'),
        'id' => 'offer_title_5',
        'type'=>'text');

    $options[] = array(
        'name' => __('offer_detail_5', 'wordpress_first'),
        'desc' => __('write offer detail', 'wordpress_first'),
        'id' => 'offer_detail_5',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('offer_title 6', 'wordpress_first'),
        'desc' => __('write offer title', 'wordpress_first'),
        'id' => 'offer_title_6',
        'type'=>'text');

    $options[] = array(
        'name' => __('offer_detail_6', 'wordpress_first'),
        'desc' => __('write offer detail', 'wordpress_first'),
        'id' => 'offer_detail_6',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('Happy clients description', 'wordpress_first'),
        'desc' => __('Happy clients description', 'wordpress_first'),
        'id' => 'happy_clients_desc',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('what we love to do description', 'wordpress_first'),
        'desc' => __('description for  what we love to do', 'wordpress_first'),
        'id' => 'what_we_do',
        'type'=>'textarea');

    $options[] = array(
        'name' => __('features work description', 'wordpress_first'),
        'desc' => __('description for some of our features works', 'wordpress_first'),
        'id' => 'feature_works',
        'type'=>'textarea');

    /*  Tab 2: Footer Page Settings
            ============================================================================================*/
    $options[] = array(
        'name' => __('Footer', 'wordpress_first'),
        'type' => 'heading');

    $options[] = array(
        'name' => __('Footer Message', 'wordpress_first'),
        'desc' => __('Footer Description', 'wordpress_first'),
        'id' => 'footer_desc',
        'type'=>'text');
    /*  Tab 3:  Pages Details
            ============================================================================================*/
    $options[] = array(
        'name' => __('Pages Details', 'wordpress_first'),
        'type' => 'heading');
    $options[] = array(
        'name' => __('Featured image for service page', 'wordpress_first'),
        'desc' => __('main image of service page', 'wordpress_first'),
        'id' => 'service-img',
        'type'=>'upload');

    $options[] = array(
        'name' => __('Cover image for bloger profile', 'wordpress_first'),
        'desc' => __('cover photo of bloger profile in blog page', 'wordpress_first'),
        'id' => 'cover_img',
        'type'=>'upload');

    $options[] = array(
        'name' => __('Profile image for bloger profile', 'wordpress_first'),
        'desc' => __('Profile photo of bloger profile in blog page', 'wordpress_first'),
        'id' => 'profile_img',
        'type'=>'upload');

    $options[] = array(
        'name' => __('Name of bloger', 'wordpress_first'),
        'desc' => __('Name of bloger in blog page', 'wordpress_first'),
        'id' => 'bloger_name',
        'type'=>'text');

    $options[] = array(
        'name' => __('Description of bloger', 'wordpress_first'),
        'desc' => __('Description of bloger in blog page', 'wordpress_first'),
        'id' => 'bloger_desc',
        'type'=>'textarea');
    /*  Tab 4: Social Link Settings
    ============================================================================================*/
    $options[] = array(
        'name' => __('Social Link Settings', 'wordpress_first'),
        'type' => 'heading');
    $options[] = array(
        'name' => __('Twitter', 'hubahu'),
        'desc' => __('Your twitter Group', 'wordpress_first'),
        'id' => 'contact_twitter',
        'type' => 'text');
    $options[] = array(
        'name' => __('linkedin', 'wordpress_first'),
        'desc' => __('Your linkedin channel', 'wordpress_first'),
        'id' => 'contact_linkedin',
        'type' => 'text');
    $options[] = array(
        'name' => __('google', 'wordpress_first'),
        'desc' => __('Your google channel', 'wordpress_first'),
        'id' => 'contact_google',
        'type' => 'text');

    $options[] = array(
        'name' => __('Facebook', 'wordpress_first'),
        'desc' => __('Your Facebook page', 'wordpress_first'),
        'id' => 'contact_facebook',
        'type' => 'text');

    /*  Tab 3: Other Settings
    ============================================================================================*/
    $options[] = array(
        'name' => __('Other Settings', 'wordpress_first'),
        'type' => 'heading');

    /* Enable/Disable Swipebox */
    $options[] = array(
        'name' => __('Enable Swipebox- A touchable jQuery lightbox ', 'wordpress_first'),
        'desc' => __('Do you want to enable the Swipebox plugin?', 'wordpress_first'),
        'id' => 'enable_swipebox',
        'std' => '1',
        'type' => 'checkbox');

    /* Enable/Disable Sticky Header */
    $options[] = array(
        'name' => __('Enable Sticky Header ', 'wordpress_first'),
        'desc' => __('Do you want to enable the sticky header?', 'wordpress_first'),
        'id' => 'enable_sticky_header',
        'std' => '1',
        'type' => 'checkbox');

    /* Enable/Disable Scroll to Top Feature */
    $options[] = array(
        'name' => __('Enable Scroll to Top ', 'wordpress_first'),
        'desc' => __('Do you want to enable scroll to top feature?', 'wordpress_first'),
        'id' => 'enable_scroll_to_top',
        'std' => '1',
        'type' => 'checkbox');

    return $options;
}

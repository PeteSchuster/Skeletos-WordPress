<?php
/*
    @package Skeletos
*/

//sets up the theme
//some options are commented
//out to meet WordPress standards
function ss_skeletos_setup() {

    //adds wysiwyg style
    add_editor_style('css/wysiwyg.css');

    //adds menu support
    add_theme_support('menus');

    //adds RSS feed links to header
    add_theme_support('automatic-feed-links');

    //adds post thumbnail support
    add_theme_support('post-thumbnails');

    //sets content width for embeded media
    if (!isset($content_width)) {
        $content_width = 984;
    } //end if

    // This registers the nav in the header
    register_nav_menu('main', 'Main Navigation');
    register_nav_menu('footer', 'Footer Navigation');

}
add_action('after_setup_theme', 'ss_skeletos_setup');

//Custom Comments List
if (!function_exists('ss_comment')) {
    function ss_comment($comment, $args, $depth) {

        $GLOBALS[ 'comment' ] = $comment;

        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' :
        ?>
        <li class="post pingback">
            <p>Pingback: <?php comment_author_link(); ?><?php edit_comment_link('Edit', '<span class="edit-link">', '</span>'); ?></p>
        <?php
                break;
            default :
        ?>
        <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

            <article class="post-comment clearfix">

                <?php echo get_avatar($comment, 150); ?>

                <?php
                $author = get_comment_author();
                $link   = get_comment_author_url();
                $author = ($link == '') ? $author : '<a href="' . $link . '" target="_blank">' . $author . '</a>';
                ?>

                <header>
                    <h1 class="heading4"><?php echo $author; ?></h1>
                    <p><time datetime="<?php echo get_comment_time('c'); ?>"><?php echo get_comment_time(get_option('date_format')); ?></time></p>
                </header>

                <div>

                    <?php

                    edit_comment_link('Edit', '<p class="edit-link">', '</p>');

                    if ($comment->comment_approved == '0') {

                        echo '<p><i>Your comment is awaiting moderation</i></p>';

                    } //end if

                    comment_text();

                    ?>

                    <p class="right meta">
                        <?php comment_reply_link(array_merge($args, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                    </p><!-- reply -->

                </div>

            </article>

        <?php
                break;

        endswitch;
    }
} // ends check for ss_comment()

//Change the Excerpt Length
function ss_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'ss_excerpt_length');

//Remove the [..] from the excerpt
add_filter('excerpt_more', '__return_null');

//Registers Widgetized Sidebars
function ss_widgets_init() {

    //Register Another Sidebar for Widgets Like Twitter
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id' => 'ss_widgets',
        'description' => 'Widgets in this area will be shown on the right-hand side.',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title' => '<h6 class="heading4">',
        'after_title' => '</h6>'
  ));

}
add_action('widgets_init', 'ss_widgets_init');

//Enqueues CSS and JS for the Theme
function ss_scripts_styles(){

    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Ubuntu:400,700,400italic,700italic');

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js');

    if (defined('SCRIPT_DEBUG')&& SCRIPT_DEBUG) {

        wp_enqueue_script('functionalityDev', get_template_directory_uri() . '/js/functionality.js', array('jquery'), '1.0', true);
        wp_enqueue_style('styleDev', get_stylesheet_directory_uri() . '/css/style.css', '', '1.02');

    } else {

        wp_enqueue_script('functionality', get_template_directory_uri() . '/js/functionality.min.js', array('jquery'), '1.0', true);
        wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.min.css', '', '1.02');

    } //end if

    if (is_singular('post')) {

        wp_enqueue_script('comment-reply');

    } //end if

    wp_enqueue_style('ps_lte_ie8', get_stylesheet_directory_uri().'/css/ie.css');

    $GLOBALS[ 'wp_styles' ]->add_data('ps_lte_ie8', 'conditional', 'lte IE 8');

}
add_action('wp_enqueue_scripts', 'ss_scripts_styles');

function ss_custom_widget_counter($params) {

    global $ss_widget_counter;

    $ss_widget_counter++;
    $class = 'class="widget-' . $ss_widget_counter . ' ';

    if ($ss_widget_counter % 2) {
        $class .= 'widget-odd ';
    } else {
        $class .= 'widget-even ';
    } //end if

    $params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']);

    return $params;
}
add_filter('dynamic_sidebar_params','ss_custom_widget_counter');

//removes "current_page_parent from blog menu item"
add_filter('nav_menu_css_class', 'ss_current_type_nav_class', 10, 2);
function ss_current_type_nav_class($classes, $item) {
    // Get post_type for this post
    $post_type = get_query_var('post_type');

    // Removes current_page_parent class from blog menu item
    if (get_post_type() == $post_type) {
        $classes = array_filter($classes, 'ss_get_current_value');
    } //end if

    // Go to Menus and add a menu class named: {custom-post-type}-menu-item
    // This adds a current_page_parent class to the parent menu item
    if (in_array($post_type . '-menu-item', $classes)) {
        array_push($classes, 'current_page_parent');
    } //end if

    return $classes;
}
function ss_get_current_value($element) {
    return ($element != 'current_page_parent');
}
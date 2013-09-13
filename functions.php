<?php
/*
    @package WordPress
    @subpackage Skeletos
*/

//sets up the theme
//some options are commented
//out to meet WordPress standards
function skeletos_setup() {

    //adds wysiwyg style
    add_editor_style( 'css/wysiwyg.css' );

    //remove admin bar
    //add_filter('show_admin_bar', '__return_false');

    //adds menu support
    add_theme_support( 'menus' );

    //adds RSS feed links to header
    add_theme_support( 'automatic-feed-links' );

    //adds post thumbnail support
    add_theme_support( 'post-thumbnails' );

    //Removes the default anchor link from images
    //disabling this might cause issues with plugins
    //update_option( 'image_default_link_type', 'none' );

    //sets content width for embeded media
    if ( !isset( $content_width ) ){

        $content_width = 728;

    }

    // This registers the nav in the header
    register_nav_menu( 'main', 'Main Navigation' );

    // This registers the nav in the footer
    register_nav_menu( 'footer', 'Footer Menu' );

    // Remove the version number of WP
    // Warning - this info is also available in the
    //readme.html file in your root directory - delete this file!
    //remove_action( 'wp_head', 'wp_generator' );

}
add_action( 'after_setup_theme', 'skeletos_setup' );

// Obscure login screen error messages
function ss_login_obscure(){

    return '<strong>Sorry</strong>: Think you have gone wrong somwhere!';

}
add_filter( 'login_errors', 'ss_login_obscure' );

// Disable the theme / plugin text editor in Admin
if( ! defined( 'DISALLOW_FILE_EDIT' ) ){

    define( 'DISALLOW_FILE_EDIT', true );

}

//Custom Comments List
if ( !function_exists( 'ss_comment' ) ){

function ss_comment( $comment, $args, $depth ) {

    $GLOBALS[ 'comment' ] = $comment;

    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback visuallyhidden">
        <p>Pingback: <?php comment_author_link(); ?><?php edit_comment_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

        <article class="post-comment clearfix">

            <?php echo get_avatar( $comment, 150 ); ?>

            <div>

                <header>

                    <?php

                    $author = get_comment_author();
                    $link   = get_comment_author_url();
                    $author = ( $link == '' ) ? $author : '<a href="' . $link . '" target="_blank">' . $author . '</a>'

                    ?>

                    <h1 class="heading4"><?php echo $author; ?></h1>

                    <time datetime="<?php echo get_comment_time( 'c' ); ?>"><?php echo get_comment_time( 'M d, Y' ); ?></time>

                </header>

                <?php

                edit_comment_link( 'Edit', '<span class="edit-link">', '</span>' );

                if ( $comment->comment_approved == '0' ){ ?>

                    <i>Your comment is awaiting moderation</i>

                <?php } ?>

                <?php comment_text(); ?>

                <p class="right">
                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </p><!-- .reply -->

            </div>

        </article>

    <?php
            break;

    endswitch;

}

} // ends check for ss_comment()

//Change the Excerpt Length
function ss_excerpt_length( $length ) {

    return 30;

}
add_filter( 'excerpt_length', 'ss_excerpt_length' );

//Remove the [..] from the excerpt
add_filter( 'excerpt_more', '__return_null' );

//Registers Widgetized Sidebars
// function ss_widgets_init() {

//     //Register Another Sidebar for Widgets Like Twitter
//     register_sidebar( array(

//         'name' => 'Widgets Right',
//         'id' => 'ss_widgets',
//         'description' => 'Widgets in this area will be shown on the right-hand side.',
//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</li>',
//         'before_title' => '<h3>',
//         'after_title' => '</h3>'

//     ) );

// }
// add_action( 'widgets_init', 'ss_widgets_init' );

//Enqueues CSS and JS for the Theme
function ss_scripts_styles(){

    wp_enqueue_style( 'google_fonts', '//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic|Open+Sans:700' );

    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js' );

    if( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {

        wp_enqueue_script( 'functionalityDev', get_template_directory_uri() . '/js/functionality.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_style( 'styleDev', get_template_directory_uri() . '/css/style.css', '', '1.0' );

    } else {

        wp_enqueue_script( 'functionality', get_template_directory_uri() . '/js/functionality.min.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css', '', '1.0' );

    }

    if ( is_singular( 'post' ) ){

        wp_enqueue_script( 'comment-reply' );

    }

    wp_enqueue_style( 'ps_lte_ie8', get_template_directory_uri().'/css/ie.css' );

    $GLOBALS[ 'wp_styles' ]->add_data( 'ps_lte_ie8', 'conditional', 'lte IE 8' );

}
add_action( 'wp_enqueue_scripts', 'ss_scripts_styles' );

//adds iOS icons and favicon
// function ss_header_icons(){

//     echo '
//     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="' . get_template_directory_uri() . '/images/ui/apple-touch-icon-144x144-precomposed.png" />
//     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="' . get_template_directory_uri() . '/images/ui/apple-touch-icon-114x114-precomposed.png" />
//     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="' . get_template_directory_uri() . '/images/ui/apple-touch-icon-72x72-precomposed.png" />
//     <link rel="apple-touch-icon-precomposed" href="' . get_template_directory_uri() . '/images/ui/apple-touch-icon-57x57-precomposed.png" />
//     <link rel="shortcut icon" href="' . get_template_directory_uri() . '/images/ui/favicon.ico" />
//     ';

// }
// add_action( 'wp_head', 'ss_header_icons' );


//Child Image Gallery

//The function below will output all
//images attached to a given
//post object sorted via the menu order

// function ss_child_images() {
//     global $post;
//     $args = array(
//         'post_type' => 'attachment',
//         'post_mime_type' => 'image',
//         'post_parent' => $post->ID
//     );
//     $arrImages =& get_children( $args );
//     if( $arrImages ) {
//         usort( $arrImages, 'ss_child_image_sort' );
//         echo "<ul class=\"gallery\">\n";
//         $style_classes = array( 'odd', 'even' );
//         $style_index = 0;
//         foreach ( $arrImages as $key => $data ) {
//             $k = $style_index%2;
//             $imagelarge = wp_get_attachment_image_src( $data->ID, "full" );
//             $imagesmall = wp_get_attachment_image_src( $data->ID, "thumbnail" );
//             echo "<li class=\"".$style_classes[$k]."\"><a rel=\"prettyPhoto[gallery]\" href=\"".$imagelarge[0]."\"><img src=\"".$imagesmall[0]."\" /></a></li>\n";
//             $style_index++;
//         }
//         echo "</ul>";
//     }
// }
// function ss_child_image_sort( $a, $b ) {
//     if( $a->menu_order ==  $b->menu_order ){ return 0 ; }
//     return ( $a->menu_order < $b->menu_order ) ? -1 : 1;
// }
<?php
//
//  Custom Child Theme Functions
//
// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Home',
        'sort_column' => 'menu_order',
        'menu_class' => 'menu',
        'echo' => false
    );
    return $args;
}
add_filter('wp_page_menu_args','childtheme_menu_args', 20);
// Unleash the power of Thematic's dynamic classes
// 
// define('THEMATIC_COMPATIBLE_BODY_CLASS', true);
// define('THEMATIC_COMPATIBLE_POST_CLASS', true);

// Unleash the power of Thematic's comment form
//
// define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// Unleash the power of Thematic's feed link functions
//
 define('THEMATIC_COMPATIBLE_FEEDLINKS', true);
 
 
 // enable Google Font API
 function childtheme_gfontapi() { ?>
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
<?php }
add_action('wp_head', 'childtheme_gfontapi');


 // rel=author for google http://yoast.com/push-rel-author-head/
 function childtheme_relauthor() { ?>
    <link rel="author" href="https://plus.google.com/102196253927230918215/posts"/>
<?php } 
add_action('wp_head', 'childtheme_relauthor');


// changing login logo
 function my_custom_login_logo() {
    echo '<style type="text/css"> h1 a { background-image:url('.get_stylesheet_directory_uri().'/img/jbp_blog_login.png) !important; }</style>';
}
add_action('login_head', 'my_custom_login_logo');


// I need to add this meta in head for responsive web
// <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
function viewport_responsive_meta() {
?>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<?php
}
add_action('wp_head', 'viewport_responsive_meta');


function respond_scripts() {?>
<!--[if lt IE 9]>
    <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/respond.min.js" type="text/javascript"></script>
<![endif]-->
<?php }
add_action('wp_head','respond_scripts');


?>
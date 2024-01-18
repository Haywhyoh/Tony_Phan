<?php 

function load_styles() {
    // Register and enqueue styles
    wp_register_style('minibar_css', get_template_directory_uri() . '/assets/css/minibar.virtual.css', array(), false, 'all');
    wp_enqueue_style('minibar_css');

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('virtual_css', get_template_directory_uri() . '/assets/css/topbar.virtual.css', array(), false, 'all');
    wp_enqueue_style('virtual_css');

    wp_register_style('animate_css', get_template_directory_uri() . '/assets/vendor/animate/animate.css', array(), false, 'all');
    wp_enqueue_style('animate_css');

    wp_register_style('owl_css', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl_css');

    wp_register_style('fancy_css', get_template_directory_uri() . '/assets/vendor/fancybox/css/jquery.fancybox.min.css', array(), false, 'all');
    wp_enqueue_style('fancy_css');

    wp_register_style('nice_css', get_template_directory_uri() . '/assets/vendor/nice-select/css/nice-select.css', array(), false, 'all');
    wp_enqueue_style('nice_css');

    wp_register_style('themify_css', get_template_directory_uri() . '/assets/vendor/themify-icons/css/themify-icons.css', array(), false, 'all');
    wp_enqueue_style('themify_css');

    wp_register_style('maicon_css', get_template_directory_uri() . '/assets/css/maicons.css', array(), false, 'all');
    wp_enqueue_style('maicon_css');

  
    wp_register_style('themify_icon', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), false, 'all');
    wp_enqueue_style('themify_icon');

    wp_register_style('topbar_css', get_template_directory_uri() . '/assets/css/topbar.css', array('minibar_css'), false, 'all');
    wp_enqueue_style('topbar');

    wp_register_style('virtual_css_main', get_template_directory_uri() . '/assets/css/virtual.css', array(), false, 'all');
    wp_enqueue_style('virtual_css_main');

}

add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts() {


    // Register and enqueue scripts

    wp_enqueue_script('jquery');

    wp_register_script('typed', get_template_directory_uri() . '/assets/lib/typed/typed.min.js', array('jquery' ), false, true);
    wp_enqueue_script('typed'); // Add this line to enqueue the script
    
    wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_script('bootstrap_js'); // Add this line to enqueue the script

    wp_register_script('wow_js', get_template_directory_uri() . '/assets/vendor/wow/wow.min.js', array(), false, true);
    wp_enqueue_script('wow_js');


    wp_register_script('owl_js', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array(), false, true);
    wp_enqueue_script('owl_js');

    wp_register_script('nice_select_js', get_template_directory_uri() . '/assets/vendor/nice-select/js/jquery.nice-select.min.js', array(), false, true);
    wp_enqueue_script('nice_select_js');

    wp_register_script('isotope_js', get_template_directory_uri() . '/assets/vendor/isotope/isotope.pkgd.min.js', array(), false, true);
    wp_enqueue_script('isotope_js');

    wp_register_script('minibar_js', get_template_directory_uri() . '/assets/js/minibar-virtual.js', array('jquery', 'typed', 'wow_js', 'owl_js'), false, true);
    wp_enqueue_script('minibar_js');

    wp_register_script('topbar', get_template_directory_uri() . '/assets/js/topbar-virtual.js', array('jquery','typed', 'wow_js'), false, true);
    wp_enqueue_script('topbar');

    wp_register_script('animate_js', get_template_directory_uri() . '/assets/vendor/animateNumber/jquery.animateNumber.min.js', array('jquery' ), false, true);
    wp_enqueue_script('animate_js');



    // $vendor_js_files = glob(get_template_directory() . '/assets/vendor/*/js/*.js');
    // foreach ($vendor_js_files as $file) {
    //     $handle = basename($file, '.js');
    //     $file_uri = get_template_directory_uri() . '/assets/vendor/' . basename(dirname($file)) . '/js/' . basename($file);
    //     wp_register_script($handle, $file_uri, array('jquery'), false, true);
    //     wp_enqueue_script($handle);
    // }

}


add_action('wp_enqueue_scripts', 'load_scripts');


// add filter atag class
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

//Theme options
add_theme_support('menus');
add_theme_support('custom-logo');

//Menus
register_nav_menus(
    array(
        'top-menu' => "Top Bar",
        'mobile-menu' => 'Mobile Menu Location',

    )
    );

function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_title(){
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'add_title' );

function baker_customizer_register($wp_customize){
// Post Section
$wp_customize->add_section(
    'color_settings', array(
        'title' => __( 'Colors', 'theme-name' ),
        'description' => esc_html__( 'Change your theme color' ),
        'priority' => 50,
        'capability' => 'edit_theme_options',
    )
);

// Add Title Text Support
$wp_customize->add_setting(
    'primary_color', array(
        'default' => '#EAA636',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'  )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'primary_color', array(
        'description' => __( 'Change Primary color', 'theme-name' ),
        'label' => __( 'Default Color Control' ),
        'section'     => 'color_settings',
        'settings'    => 'primary_color',
        'type'        => 'color',
        'capability' => 'edit_theme_options'
    ))
);

$wp_customize->add_setting(
    'secondary_color', array(
        'default' => '#545454',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'  )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
    'secondary_color', array(
        'description' => __( 'Change Secondary color', 'theme-name' ),
        'section'     => 'color_settings',
        'settings'    => 'secondary_color',
        'type'        => 'color',
        'capability' => 'edit_theme_options'
    )

    )
);

$wp_customize->add_setting(
    'light_color', array(
        'default' => '#FDF5EB',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'  )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
    'light_color', array(
        'description' => __( 'Change Light color', 'theme-name' ),
        'section'     => 'color_settings',
        'settings'    => 'light_color',
        'type'        => 'color',
        'capability' => 'edit_theme_options'
    )

    )
);

$wp_customize->add_setting(
    'dark_color', array(
        'default' => '#1E1916',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'  )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
    'dark_color', array(
        'description' => __( 'Change Dark color', 'theme-name' ),
        'section'     => 'color_settings',
        'settings'    => 'dark_color',
        'type'        => 'color',
        'capability' => 'edit_theme_options'
    )

    )
);

$wp_customize->add_setting(
    'text_color', array(
        'default' => '#1E1916',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color'  )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
    'text_color', array(
        'description' => __( 'Change Text color', 'theme-name' ),
        'section'     => 'color_settings',
        'settings'    => 'text_color',
        'type'        => 'color',
        'capability' => 'edit_theme_options'
    )

    )
);
}
add_action( 'customize_register', 'baker_customizer_register' );

function mytheme_customize_css() {
    ?>
    <style type="text/css">
        .text-primary { color: <?php echo get_theme_mod( 'primary_color', '#545454 !important' ); ?>; }
        .bg-primary { background-color: <?php echo get_theme_mod( 'primary_color', '#545454 !important' ); ?>; }

        .btn-primary { background-color: <?php echo get_theme_mod( 'primary_color', '#545454 !important' ); ?>; 
            border-color: <?php echo get_theme_mod( 'primary_color', '#545454 !important' ); ?>;
         }
         .bg-light { background-color: <?php echo get_theme_mod( 'light_color', '#FDF5EB !important' ); ?>; }

         .img-twice::before { background: <?php echo get_theme_mod( 'primary_color', '#1E1916 !important' ); ?>;
                                border: 25px solid <?php echo get_theme_mod( 'light_color', '#FDF5EB !important' ); ?>; }
         .bg-dark { background-color: <?php echo get_theme_mod( 'dark_color', '#1E1916 !important' ) ;?>; }
         .nav-link a { color: <?php echo get_theme_mod( 'primary_color', '#545454 !important' ); ?>; }
         .product-item:hover {background: <?php echo get_theme_mod( 'primary_color', '#545454 ' ) , '!important'; ?>; }
         .testimonial-carousel .owl-item.center .testimonial-item {background: <?php echo get_theme_mod( 'primary_color', '#545454' ) ,'!important' ;  ?>; }
         .product-item:hover * {color: <?php echo get_theme_mod( 'light_color', '#545454 !important' ); ?>; }
         .team-item .team-social:hover {  background: <?php echo get_theme_mod( 'primary_color', '#1E1916' ), '!important'; ?>; }
         .team-item .team-title {  background: <?php echo get_theme_mod( 'light_color', '#1E1916' ), '!important'; ?>; }

    </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');

function tony_phan_customizer_section($wp_customize) {
    $wp_customize->add_section('tony_phan_section', array(
        'title' => 'Tony Phan',
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => 'Hero Image',
        'section' => 'tony_phan_section',
        'settings' => 'hero_image',
    )));

    $wp_customize->add_setting('logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' => 'Logo Image',
        'section' => 'tony_phan_section',
        'settings' => 'logo',
    )));

    $wp_customize->add_setting( 'cv_pdf_file' );
    $wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'pdf_file', array(
        'label' => 'Upload CV',
        'section' => 'tony_phan_section',
        'settings' => 'cv_pdf_file',
        'mime_type' => 'application/pdf','image', // Limit to PDF and image files
    ) ) );

    $wp_customize->add_setting('big_banner_text');
    $wp_customize->add_control('big_banner_text', array(
        'label' => 'Big Banner Text',
        'section' => 'tony_phan_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('sub_text');
    $wp_customize->add_control('sub_text', array(
        'label' => 'Sub Text',
        'section' => 'tony_phan_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('typed_text');
    $wp_customize->add_control('typed_text', array(
        'label' => 'Typed Text',
        'section' => 'tony_phan_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_me');
    $wp_customize->add_control('about_me', array(
        'label' => 'About Me',
        'section' => 'tony_phan_section',
        'type' => 'textarea', // Changed 'text' to 'textarea' to make the textbox longer
    ));

    $wp_customize->add_setting('about_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
        'label' => 'About Image',
        'section' => 'tony_phan_section',
        'settings' => 'about_image',
    )));
}
add_action('customize_register', 'tony_phan_customizer_section');
/**
 * 
 * Create Post types
 */

function create_project_post_type(){
    add_theme_support('post-thumbnails');
    $args = array(
        'labels' => array(
            'name' => __( 'Projects'), 
            'singular_name' => __( 'Project'),
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
         ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'project'),
        'show_in_rest' => true,
        'description' => 'Projects that makes up the portfolio',
        'hierarchical' => true,
        'supports' => array('title',),
        'taxonomies' => array('category'),
        'menu-icons' => 'dashicons-portfolio'


    );
    register_post_type( 'project', $args);
}

add_action( 'init', 'create_project_post_type');


function create_skills_post_type(){
    add_theme_support('post-thumbnails');
    $args = array(
        'labels' => array(
            'name' => __( 'Skills'), 
            'singular_name' => __( 'Skills'),
            'add_new_item' => 'Add New Skills',
            'add_new' => 'Add a Skills',
            'edit_item' => 'Edit Skills',
            'new_item' => 'Add Skills',
            'all_items' => 'All Skills',
         ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'skills'),
        'show_in_rest' => true,
        'description' => 'Skills that Tony Phan offers',
        'hierarchical' => true,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('category'),
        
    );
    register_post_type( 'skills', $args);
}


add_action( 'init', 'create_skills_post_type');

function create_testimonial_post_type(){
    add_theme_support('post-thumbnails');
    $args = array(
        'labels' => array(
            'name' => __( 'Testimonials'), 
            'singular_name' => __( 'Tesimonial'),
            'add_new_item' => 'Add New Testimonial',
            'add_new' => 'Add a Testimonial',
            'edit_item' => 'Edit Testimomial',
            'new_item' => 'Add Testimonial',
            'all_items' => 'All Testimonial',
         ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonial'),
        'show_in_rest' => true,
        'description' => 'Services that Tony Phan offers',
        'hierarchical' => true,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('category'),
        
    );
    register_post_type( 'testimonial', $args);
}


add_action( 'init', 'create_testimonial_post_type');

add_theme_support('elementor');
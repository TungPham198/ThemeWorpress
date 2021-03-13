

<?php


function setup_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action( 'after_setup_theme', 'setup_woocommerce_support' );

function register_my_menu() {
    register_nav_menu('Header-Top',__( 'Menu top' ));
    register_nav_menu('Header-Main',__( 'Menu main' ));
    register_nav_menu('Header-Bot',__( 'Menu bot' ));


    if (function_exists('register_sidebar')){
        register_sidebar(array(
            'name'=> 'Cột bên trên',
            'id' => 'sidebar_up',
        ));
    }
    
    if (function_exists('register_sidebar')){
        register_sidebar(array(
            'name'=> 'Cột bên dưới',
            'id' => 'sidebar_dow',
        ));
    }
}
add_action( 'init', 'register_my_menu' );

function slide_post_type(){
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Slider', //Tên post type dạng số nhiều
        'singular_name' => 'Slider' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Tuỳ chỉnh Slider', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail',
        ), //Các tính năng được hỗ trợ trong post type
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-embed-photo', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        // 'capability_type' => 'post' //
    );
 
    register_post_type('Slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}
add_action('init', 'slide_post_type');
add_custom_background();


// function wpl_customize_register( $wp_customize ){
//     $wp_customize->add_section (
//         'section_a',
//         array(
//             'title' => 'Thông tin website',
//             'description' => 'Thông tin cơ bản của website',
//             'priority' => 25 ));
//     $wp_customize->add_setting ( 'option_checkbox');
    
//     $wp_customize->add_control('control_checkbox',
//     array('type' => 'checkbox',
//     'label' => 'Yes',
//     'section' => 'section_a',
//     'settings' => 'option_checkbox')
//     );
// }


function devvn_customize_register($wp_customize) 
{
 //Footer
    $wp_customize->add_section("footer", array(
        'title' => __("Footer nha", ),
        'priority' => 130,
        'description' => __( 'Thay đổi cái gì đó ở đây và xem kết quả. bạn sẽ thấy điều thú zị' ),
    ));

    //Footer text
    $wp_customize->add_setting("footer_text", array(
        'default' => '',
        'transport' => 'postMessage',
    )); 
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,"footer_text",array(
        'label' => __("Điền văn bản vào đây cô nương ơi.", ),
        'section' => 'footer',
        'settings' => 'footer_text',
        'type' => 'textarea',
    )));

    //Footer background color
    $wp_customize->add_setting("footer_bg_color", array(
        'default' => '#ccc',
        'transport' => 'postMessage',
    )); 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
        'label' => 'Footer Background Color',
        'section' => 'footer',
        'settings' => 'footer_bg_color',
        'type' => 'color',
    )));

    $wp_customize->add_setting("footer_logo", array(
        'transport' => 'postMessage',
    )); 
    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_logo',array(
        'label' => __('Footer Logo', 'devvn'),
        'section' => 'footer',
        'settings' => 'footer_logo',
    )));
    
 
}
add_action("customize_register","devvn_customize_register");


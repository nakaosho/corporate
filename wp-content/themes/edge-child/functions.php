<?php
add_action( 'wp_enqueue_scripts', 'edge_enqueue_styles' );
function edge_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/scss/style.css', array('parent-style'));
    

    //親テーマのjquery.fullPage.css
    wp_enqueue_style( 'fullPage-style', get_template_directory_uri() . '/css/jquery.fullPage.css' );

    //親テーマのjquery-2.1.4.min
    wp_enqueue_script( 'jquery-2.1.4.min', get_template_directory_uri() . '/js/jquery-2.1.4.min.js' );
    
    //親テーマのjquery.fullPage.js
    wp_enqueue_script( 'fullPage', get_template_directory_uri() . '/js/jquery.fullPage.min.js' );

    //親テーマのfunctions.js
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/common.js' );
    //子テーマのfunctions.js
    wp_enqueue_script( 'functions-child', get_stylesheet_directory_uri() . '/js/common.js', array( 'functions' ) );
}
?>


<?php
//functions.php
function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',

    'test-menu'  => 'Test Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );
?>
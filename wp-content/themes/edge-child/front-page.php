<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$edge_settings = edge_get_theme_options(); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>


</head>


<body <?php body_class(); ?>>
	<?php 
	if ( function_exists( 'wp_body_open' ) ) {

		wp_body_open();

	} ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content','edge');?></a>
<!-- Masthead ============================================= -->

<header id="masthead" class="site-header" role="banner">


<?php
/*
<?php wp_nav_menu( $args ); ?> 

*/
?>

		
</header> <!-- end #masthead -->



<?php
/*
	$edge_settings = edge_get_theme_options();
	global $edge_content_layout;
	if( $post ) {
		$layout = get_post_meta( $post->ID, 'edge_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}
	if( 'default' == $layout ) { //Settings from customizer
		if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')){ ?>
			<div id="primary">
				<?php }
	}?>
				<main id="main" class="site-main clearfix" role="main">
					<?php
					if( have_posts() ) {
						while( have_posts() ) {
							the_post();
							get_template_part( 'content', get_post_format() );
						}
					}
					else { ?>
					<h2 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'edge' ); ?> </h2>
					<?php } ?>
				</main> <!-- #main -->
				<?php get_template_part( 'pagination', 'none' );
				if( 'default' == $layout ) { //Settings from customizer
					if(($edge_settings['edge_sidebar_layout_options'] != 'nosidebar') && ($edge_settings['edge_sidebar_layout_options'] != 'fullwidth')): ?>
						</div> <!-- #primary -->
						<?php endif;
				}
*/				
?>	


<div class="flex-container">

  <div id="side-bar">
    <div id="header-bar" class="hidden-pc">
      <div id="navToggle">
        <div> <span></span> <span></span> <span></span> </div>
      </div>
      <nav  id="slide_menu" class="accordion_nav">
        <ul>
      <li><a href="#section1">Section1</a></li>
          <li><a href="#section2">Section2</a></li>
          <li><a href="#section3">Section3</a></li>
          <li><a href="#section4">Section4</a></li>
		  <li><a href="#section4">Section5</a></li>
        </ul>
      </nav>
    </div>
  </div>  



  <div id="fullpage">
    <section class="section sec1">
    	<div class="container1">
			<h2>陰ながらビジネスを支える</h2>
			<h2>パートナーカンパニーとして。</h2>
			<h3>Techtrage Co.,Ltd</h3>
		</div>
    </section>

    <section class="section sec2">
    	<div class="container2">
			<h2><span class="color_FFA830">C</span>OMPANY<span class="sub_title"><?php $page_obj = get_page_by_path('company');
				  $page = get_post( $page_obj );echo $page->post_title;?></span></h2>
				
		  
			<h4>彼を知れば、百戦殆うからず。</h4>
			<p>わたしたちは常にあなたのパートナーであり続けますが、</p>
			<p>まずは仕事へのポリシーをぜひ知っていてください。</p>
			<p>そうすれば、いつでも気軽にビジネストークができるはずです。</p>
			<p class="link_company"><a>VIEW MORE</a></p>
		</div>
    </section>

    <section class="section sec3">
      <h2>SERVICE</h2>
	  <p>新鮮な提案を最速でお届け。</p>
	  <p>活きの良いアイデアは、美味しいうちに料理しなければなりません。</p>
	  <p>ビジネスにおいても鮮度は命なのです。</p>
    </section>

	<section class="section sec4">
      <h2>RECRUIT</h2>
	  <p>一緒に働く仲間を歓迎します。</p>
	  <p>あなたの人生の1ページにふさわしい企業となれるよう</p>
	  <p>常に成長を見据え、共に歩める仲間を募集しています。</p>
	  <p>エントリーの扉を叩いてみてください。</p>
    </section>

    <section class="section sec5">
      <footer id="colophon" class="site-footer clearfix">
<?php
if ( is_front_page() && is_home() ) {
	if ((function_exists('display_instagram')) && $edge_settings['edge_instagram_feed_display'] !=0){
		echo do_shortcode('[instagram-feed]');
	}// Default homepage
} elseif ( is_front_page()){
	if ((function_exists('display_instagram')) && $edge_settings['edge_instagram_feed_display'] !=0){
		echo do_shortcode('[instagram-feed]');
	}//Static homepage
} else {
//silence is golden
}
$footer_column = $edge_settings['edge_footer_column_section'];
	if( is_active_sidebar( 'edge_footer_1' ) || is_active_sidebar( 'edge_footer_2' ) || is_active_sidebar( 'edge_footer_3' ) || is_active_sidebar( 'edge_footer_4' )) { ?>
	<div class="widget-wrap">
		<div class="container">
			<div class="widget-area clearfix">
			<?php
				if($footer_column == '1' || $footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'edge_footer_1' ) ) :
						dynamic_sidebar( 'edge_footer_1' );
					endif;
				echo '</div><!-- end .column'.$footer_column. '  -->';
				}
				if($footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'edge_footer_2' ) ) :
						dynamic_sidebar( 'edge_footer_2' );
					endif;
				echo '</div><!--end .column'.$footer_column.'  -->';
				}
				if($footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'edge_footer_3' ) ) :
						dynamic_sidebar( 'edge_footer_3' );
					endif;
				echo '</div><!--end .column'.$footer_column.'  -->';
				}
				if($footer_column == '4'){
				echo '<div class="column-'.$footer_column.'">';
					if ( is_active_sidebar( 'edge_footer_4' ) ) :
						dynamic_sidebar( 'edge_footer_4' );
					endif;
				echo '</div><!--end .column'.$footer_column.  '-->';
				}
				?>
			</div> <!-- end .widget-area -->
		</div> <!-- end .container -->
	</div> <!-- end .widget-wrap -->
	<?php } ?>
<div class="site-info" <?php if($edge_settings['edge-img-upload-footer-image'] !=''){?>style="background-image:url('<?php echo esc_url($edge_settings['edge-img-upload-footer-image']); ?>');" <?php } ?>>
	<div class="container">
	<?php
		if($edge_settings['edge_buttom_social_icons'] == 0):
			do_action('social_links');
		endif;
		do_action('edge_footer_menu');

		if ( is_active_sidebar( 'edge_footer_options' ) ) :
		dynamic_sidebar( 'edge_footer_options' );
		else:
			echo '<div class="copyright">' .'&copy; ' . date('Y') .' '; ?>
		<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> 
				
		<?php /* ?>デフォルトのコピーライト非表示						
		<?php esc_html_e('Designed by:','edge'); ?> <a title="<?php echo esc_attr__( 'Theme Freesia', 'edge' ); ?>" target="_blank" href="<?php echo esc_url( 'https://themefreesia.com' ); ?>"><?php esc_html_e('Theme Freesia','edge');?></a> | 
							<?php esc_html_e('Powered by:','edge'); ?> <a title="<?php echo esc_attr__( 'WordPress', 'edge' );?>" target="_blank" href="<?php echo esc_url( 'http://wordpress.org' );?>"><?php esc_html_e('WordPress','edge'); ?></a>
							<?php */ ?>
		
			</div>
		<?php endif; ?>
			<div style="clear:both;"></div>
		</div> <!-- end .container -->
	</div> <!-- end .site-info -->
	<?php
		$disable_scroll = $edge_settings['edge_scroll'];
		if($disable_scroll == 0):?>
	<div class="go-to-top"><a title="<?php esc_html_e('Go to Top','edge');?>" href="#masthead"><i class="fa fa-angle-double-up"></i></a></div> <!-- end .go-to-top -->
	<?php endif; ?>
</footer> <!-- end #colophon -->
    </section>

  </div>

</div><!-- //flex-container -->



</div> <!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>
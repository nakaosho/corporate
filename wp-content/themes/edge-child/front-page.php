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
</div> <!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>
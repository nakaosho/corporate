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
      		
		  <!-- <li><a href="#section1">Section1</a></li>
          <li><a href="#section2">Section2</a></li>
          <li><a href="#section3">Section3</a></li>
          <li><a href="#section4">Section4</a></li>
		  <li><a href="#section5">Section5</a></li> -->

        </ul>

		<!-- テンプレートファイルのメニューを表示したい場所に記述 -->
		<?php 
		wp_nav_menu( array( 
			'theme_location' => 'test-menu' 
		) ); 
		?>

      </nav>
    </div>
  </div>  



  <div id="fullpage">
    <section class="section sec1">
      <h2>Section1</h2>
    </section>

    <section class="section sec2">
      <h2>Section2</h2>
    </section>

    <section class="section sec3">
      <h2>Section3</h2>
	</section>

	<section class="section sec4">
      <h2>Section4</h2>
    </section>

	

    <section class="section sec5">

		<div class="new_selected_Ctr">

			<?php
			$information= get_posts( array(
				'posts_per_page' => 5, // 表示件数の指定
				'category' => 13 // カテゴリーID 1 のカテゴリーを指定
			));
			if( $information):
			?>
				<ul class="new_selected">
					<?php
					foreach( $information as $post ):
					setup_postdata( $post );
					?>
					<li><span class="new_date"><?php the_time('Y年n月j日'); ?></span><a href="<?php the_permalink(); ?>"> <strong class="new_title"><?php the_title(); ?></strong> <span class="new_txt"><?php echo mb_substr( get_the_excerpt(), 0, 10 ) . '...'; ?></span></a></li>
					<?php
					endforeach;
					wp_reset_postdata();
					?>
				</ul>
			<?php else: ?>
			<p>表示できる情報はありません。</p>
			<?php endif; ?>

			<div class="new_selected_btn">

				<a href="<?php echo home_url(); ?>/info/" class="arrow sample">viewmore</a>

			</div>


		</div>



					

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
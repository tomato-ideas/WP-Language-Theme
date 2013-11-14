<?php
/**
 * Template Name: TestTmtMultilang Template
 *
 * @package WordPress
 * @subpackage MADESC_Inteligence
 * @since MADESC Inteligence 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
<!--
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>
-->
				<?php 
							if(isset($_SESSION['lang'])){
								if( $_SESSION['lang']=="TH" ){
									?> featured img TH : <?php the_post_thumbnail();
								}else if( $_SESSION['lang']=="EN" ){
								$idx = get_the_ID();
									?> featured img EN : <?php the_post_thumbnail_tmt($idx);
								}
							} else {
								//echo "Session no value";
								the_post_thumbnail();
							}
						?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title">
						<?php 
							if(isset($_SESSION['lang'])){
								if( $_SESSION['lang']=="TH" ){
									?> title TH : <?php the_title();
								}else if( $_SESSION['lang']=="EN" ){
								//$idx = get_the_ID();
									?> title EN : <?php the_title_tmt($idx);
								}
							} else {
								//echo "Session no value";
								the_title();
							}
						?></h1>
					</header>
			
					<div class="entry-content">
						<!-- <?php wp_nav_menu_tmt(); ?> -->
						<?php 
							if(isset($_SESSION['lang'])){
								if( $_SESSION['lang']=="TH" ){
									?> content TH : <?php the_content();
								}else if( $_SESSION['lang']=="EN" ){
								//$idx = get_the_ID();
									?> content EN : <?php the_content_tmt($idx);
								}
							} else {
								//echo "Session no value";
								the_content();
							}
						?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
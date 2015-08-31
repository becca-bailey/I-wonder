<?php
/**
 * Template Name: Landing Page
 *
 * This is the template for the landing page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package I wonder
 */

get_header(); 

	$icon1 = get_field( 'icon_1' );
	$icon2 = get_field( 'icon_2' );
	$icon3 = get_field( 'icon_3' );
	$icon4 = get_field( 'icon_4' );
	$size = 'large'
		
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="home-icons">
				<div class="icon-1">
					<?php if ($icon1) { ?>
						<div class="icon-hover">
						</div>
						<?php echo wp_get_attachment_image( $icon1, $size );
					} ?>
				</div>
				<div class="icon-2">
					<?php if ($icon2) { ?>
						<div class="icon-hover">
						</div>
						<?php echo wp_get_attachment_image( $icon2, $size );
					} ?>
				</div>
				<div class="icon-3">
					<?php if ($icon3) { ?>
						<div class="icon-hover">
						</div>
						<?php echo wp_get_attachment_image( $icon3, $size );
					} ?>
				</div>
				<div class="icon-4">
					<?php if ($icon4) { ?>
						<div class="icon-hover">
						</div>
						<?php echo wp_get_attachment_image( $icon4, $size );
					} ?>
				</div>

			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

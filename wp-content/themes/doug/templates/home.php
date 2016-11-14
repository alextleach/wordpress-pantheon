<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

	<main role="main" id="panel">
		<!-- section -->
		<section>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="p-24 pl-0 p-sm-6">
					<div class="h1">
						<?php the_title(); ?>
					</div>
				</div>

				<?php the_content(); ?>


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'theme' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>

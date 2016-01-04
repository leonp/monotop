<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="entry">

		<div class="entry-header">

			<h1 class="entry-title"><?php the_title(); ?></h1>

		</div>

		<div class="entry-content">

			<?php the_content(); ?>

		</div>

	</article>

	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>

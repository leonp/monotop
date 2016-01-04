<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<article class="entry">

			<header class="entry-header">

				<?php

					the_archive_title( '<h1 class="entry-title">', '</h1>' );
					the_archive_description( '<div class="secondary entry-meta">', '</div>' );

				?>

			</header> <!-- .entry-header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="slot">

					<header class="slot-header">

						<h1 class="slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

						<p class="slot-meta secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time></p>

					</header>

					<div class="slot-excerpt">

						<?php the_excerpt(); ?>

					</div>

				</article>

			<?php endwhile; ?>

			<?php the_posts_pagination( array(

				'prev_text'          => __( '&larr; Previous', 'cs' ),
				'next_text'          => __( 'Next &rarr;', 'cs' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'cs' ) . ' </span>',

			) );

			?>

		<?php else : ?>

			<p>No posts, I'm afraid.</p>

		<?php endif; ?>

	</article>

<?php get_footer(); ?>

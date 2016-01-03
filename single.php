<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



					<article class="entry">

						<header class="entry-header">

							<h1 class="entry-title"><?php the_title(); ?></h1>

							<div class="entry-meta">

								<p class="secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time> and filed under <span class="tag"><?php the_category( ', ' ); ?></span></p>

							</div>

						</header>

						<div class="entry-content">

							<?php if ( has_post_thumbnail() ) {?>

								<figure class="hero-splash hero-splash-in-entry hero-splash-<?php global $post; echo $post->post_name; ?>">

									<?php the_post_thumbnail(); ?>

									<figcaption class="hero-splash-text hero-splash-in-entry-text hero-splash-text-<?php global $post; echo $post->post_name; ?>"><?php if ( has_excerpt() ) {?><?php the_excerpt(); ?><?php } ?></figcaption>

								</figure>

							<?php } ?>

							<?php the_content(); ?>

						</div>

					</article>

				</main>

			</div>

	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>

<?php get_footer(); ?>

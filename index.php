<?php get_header(); ?>

	<article>

		<section class="content-band">

			<h1 class="content-band-title">About</h1>

			<div class="content-band-content">

				<p>I'm Leon, web and customer service manager at Suffolk Libraries. I've been building and managing websites and blogging since 2008.</p>

			</div>

		</section>

		<section class="content-band">

			<h1 class="content-band-title">Blog posts</h1>

			<?php $the_query = new WP_Query( 'category_name=libraries&posts_per_page=1' ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<article class="slot">

							<h1 class="slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

							<div class="slot-meta">

								<p class="secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time> and filed under <span class="tag"><?php the_category( ', ' ); ?></span></p>

							</div>

						</article>

					<?php endwhile; ?>

				<?php endif; ?>

			<?php wp_reset_postdata(); ?>

			<?php $the_query = new WP_Query( 'category_name=web&posts_per_page=1' ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<article class="slot">

							<h1 class="slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

							<div class="slot-meta">

								<p class="secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time> and filed under <span class="tag"><?php the_category( ', ' ); ?></span></p>

							</div>

						</article>

					<?php endwhile; ?>

				<?php endif; ?>

			<?php wp_reset_postdata(); ?>

			<?php $the_query = new WP_Query( 'category_name=politics&posts_per_page=1' ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<article class="slot">

							<h1 class="slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

							<div class="slot-meta">

								<p class="secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time> and filed under <span class="tag"><?php the_category( ', ' ); ?></span></p>

							</div>

						</article>

					<?php endwhile; ?>

				<?php endif; ?>

			<?php wp_reset_postdata(); ?>

			<?php $the_query = new WP_Query( 'category_name=books-music&posts_per_page=1' ); ?>

				<?php if ( $the_query->have_posts() ) : ?>

					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<article class="slot">

							<h1 class="slot-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

							<div class="slot-meta">

								<p class="secondary">Posted <time class="updated" pubdate><?php the_date('d M Y'); ?></time> and filed under <span class="tag"><?php the_category( ', ' ); ?></span></p>

							</div>

						</article>

					<?php endwhile; ?>

				<?php endif; ?>

			<?php wp_reset_postdata(); ?>

		</section> <!-- end .blog posts -->

	</article>

<?php get_footer(); ?>

<?php get_header(); ?>

<section id="single-post">
	<div class="container">
		<div class="row">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="inner">
					<h1><?php the_title(); ?></h1>
					<p class="byline vcard"><?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp"></span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link()); ?></p>
					<?php the_content(); ?>			
				</div>
			</article>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
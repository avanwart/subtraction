<?php
/*
Template Name: Portfolio Page
*/

?>
<?php get_header(); ?>

<section id="hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h1><?php the_field('boilerplate'); ?></h1>
				<blockquote>
					&ldquo;<?php the_field('quote'); ?>&rdquo;
					<small><?php the_field('quote_author'); ?></small>
				</blockquote>
			</div>
		</div>
	</div>
</section>
<section id="portfolio">
	<div class="container">
		<header>
			<h1><?php the_title(); ?> <small>(alphabetical)</small></h1>
		</header>
		<div class="row">
			<!-- Start the Loop to query portfolio posts -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 100, 'category' => '3', 'order' => 'ASC', 'orderby' => 'title' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post); 
			?>
				<article class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="inner">
						<h1><?php the_title(); ?></h1>
						<?php the_post_thumbnail('medium'); ?>
						<div class="caption">
							<p><?php the_field('blurb'); ?></p>
							<a href="http://<?php the_field('website'); ?>"><?php the_field('website'); ?></a>
						</div>
					</div>
				</article>

			<!-- Close the loop -->
			<?php endforeach; ?>
      <?php wp_reset_postdata(); ?>

		</div>
	</div>
</section>


<?php get_footer(); ?>

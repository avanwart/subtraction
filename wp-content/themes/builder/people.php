<?php
/*
Template Name: People Page
*/

?>
<?php get_header(); ?>

<section id="people">
	<div class="container">
		<header>
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('team_description'); ?></p>
		</header>
		<div class="row">
			<div class="col-sm-12">
				<h2>Partners</h2>
			</div>
		</div>
		<div class="row partners">
			<div class="col-sm-2">
				&nbsp;
			</div>
			<!-- Start the Loop to query portfolio posts -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 100, 'category' => '4', 'order' => 'ASC', 'orderby' => 'title' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post); 
			?>
			<article class="col-xs-12 col-sm-4">
				<div class="inner">
					<h1><?php the_title(); ?></h1>
					<h2><?php the_field('job_title'); ?></h2>
					<?php the_post_thumbnail('medium'); ?>
					<p><?php the_field('biography'); ?></p>
					<p><strong>Education:</strong> <?php the_field('education'); ?></p>
					<p><strong>Prior operational experience:</strong> <?php the_field('prior'); ?></p>
					<p class="linkedin"><a href="<?php the_field('linkedin_url'); ?>">linkedin</a></p>
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

		<div class="row">
			<div class="col-sm-12">
				<h2>Team</h2>
			</div>
		</div>
    <div class="row partners">
			<!-- Start the Loop to query portfolio posts -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 100, 'category' => '5', 'order' => 'ASC', 'orderby' => 'title' );
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

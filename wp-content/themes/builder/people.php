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
			<p class="mission"><?php the_field('team_description'); ?></p>
		</header>
		<div class="row">
			<div class="col-lg-8 col-md-12 col-lg-offset-2">
				<h2 class="header">Partners</h2>
			</div>
		</div>
		<div class="row partners">
			<div class="col-lg-2">
				&nbsp;
			</div>
			<!-- Start the Loop to query portfolio posts -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 100, 'category' => '4', 'order' => 'ASC', 'orderby' => 'title' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post); 
			?>
			<article class="col-xs-12 col-lg-4 col-md-6 col-sm-6">
				<div class="inner partner">
					<h1><?php the_title(); ?></h1>
					<h2><?php the_field('job_title'); ?></h2>
					<?php the_post_thumbnail('medium'); ?>
					<p><?php the_field('biography'); ?></p>
					<p><strong>Education:</strong> <?php the_field('education'); ?></p>
					<p><strong>Prior operational experience:</strong> <?php the_field('prior'); ?></p>
					<a class="linkedin" href="<?php the_field('linkedin_url'); ?>">linkedin</a>
				</div>
			</article>

			<!-- Close the loop -->
			<?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>

		<div class="row">
			<div class="col-lg-9 col-lg-offset-1 col-md-12 halfset">
				<h2 class="header">Team</h2>
			</div>
		</div>
    <div class="row partners">
    	<div class="col-lg-1 halfset">
  			&nbsp;
    	</div>
			<!-- Start the Loop to query portfolio posts -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 100, 'category' => '5', 'order' => 'ASC', 'orderby' => 'date' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post); 
			?>
				<article class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="inner team">
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field('job_title'); ?></h4>
						<?php the_post_thumbnail('medium'); ?>
						<p><?php the_field('biography'); ?></p>
						<a class="linkedin" href="http://<?php the_field('linkedin_url'); ?>">linkedin</a>
					</div>
				</article>

			<!-- Close the loop -->
			<?php endforeach; ?>
	    <?php wp_reset_postdata(); ?>

		</div>
	</div>
</section>


<?php get_footer(); ?>

<?php
/*
Template Name: Contact Page
*/

?>
<?php get_header(); ?>

<section id="contact">
	<div class="container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-lg-5 col-lg-offset-1 mantra">
					<h1><?php the_title(); ?></h1>
					<p><?php the_field('subtraction_mantra'); ?></p>
			</div>
			<div class="col-lg-4 col-lg-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>

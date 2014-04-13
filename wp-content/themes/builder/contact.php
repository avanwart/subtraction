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
					<p>If you are interested in connecting with or learning more about Subtraction Capital, use the form or send us an email:
<a href="mailto:info@subtractioncaptial.com">info@subtractioncapital.com</a>.</p>
			</div>
			<div class="col-lg-4 col-lg-offset-1">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		$('textarea').attr('rows', '5');
	});
</script>

<?php get_footer(); ?>

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
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 mantra">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<p><?php the_field('subtraction_mantra'); ?></p>
				<p>If you are interested in connecting with or learning more about Subtraction Capital, use the form or send us an email:
<a href="mailto:info@subtractioncaptial.com">info@subtractioncapital.com</a>.</p>
				<!-- Begin Social Icons -->
				<div class="social">
					<ul>
						<li class="facebook"><a href="https://www.facebook.com/subtractioncapital" target="_blank">Facebook</a></li>
						<li class="linkedin"><a href="http://www.linkedin.com/company/subtraction-capital" target="_blank">LinkedIn</a></li>
						<li class="twitter"><a href="https://twitter.com/SubtractionCap" target="_blank">Twitter</a></li>
						<li class="angellist"><a href="https://angel.co/subtraction-capital" target="_blank">Angel List</a></li>
						<li class="crunchbase"><a href="http://www.crunchbase.com/organization/subtraction-capital" target="_blank">Crunch Base</a></li>
					</ul>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>

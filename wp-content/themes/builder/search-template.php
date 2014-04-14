<?php
/**
 * Template Name: Search Page Template
 *
 * Used for Custom Filtered Search
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="press">
	<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
		</div>
	</div>
		<div class="row">
			<div class="col-sm-12" id="press-filters">
				<?php while ( have_posts() ) : the_post(); ?>
				<!-- Display the Ultimate WP Query Search Filter Form -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content filter-box" style="padding: 0 !important;">
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->
				</article>
				<!-- end form -->
				<?php endwhile; 	?>
			</div>
		</div>
	</div>
	<section id="articles">
		<div class="container">
			<div class="search-results row"></div>
		</div>
	</section>
	<script>
    jQuery(document).ready(function($){
    	$('.uwpqsf_class').hide();
    });
  </script>

<?php
 // get_sidebar();
get_footer();

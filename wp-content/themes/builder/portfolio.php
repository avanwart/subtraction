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
		<div class="row">
			<div class="col-sm-12">
				<header>
					<h1><?php the_title(); ?> <small>(alphabetical)</small></h1>
				</header>
			</div>
		</div>
		<div class="row">
			<!-- Start the Loop to query portfolio posts -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 100, 'category_name' => 'companies', 'order' => 'ASC', 'orderby' => 'title' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post);
			?>
			<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
				$url = $thumb['0'];
			?>
				<article class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					<div class="flip">
		        <div class="card"> 
		          <div class="face front <?php the_field('acquired'); ?>" style="background: #fff url(<?=$url?>) center center no-repeat; background-size: 75% auto;">
		          	<img class="ribbon" src="<?php bloginfo('template_directory'); ?>/library/images/acquired-ribbon-sm-bw.png" alt="" width="85" height="85">
		          	<?php $thumb_url; ?> 
		        		<h1><?php the_title(); ?></h1>
		          </div> 
		          <div class="face back"> 
								<!--<h3>About <?php the_title(); ?></h3>-->
								<p><?php the_field('blurb'); ?></p>
								<p class="site">
									<a target="_blank" href="http://<?php the_field('website'); ?>">Visit website &raquo;</a>
								</p>
		          </div> 
		        </div>
		      </div>
	      </article>

			<!-- Close the loop -->
			<?php endforeach; ?>
      <?php wp_reset_postdata(); ?>

		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
	  $('.card').click(function(){
	    $(this).toggleClass('flipped');
	  });
	  $('.flip').mouseleave(function(){
	    $(this).children('.card').removeClass('flipped');
	  });

	});
</script>

<?php get_footer(); ?>

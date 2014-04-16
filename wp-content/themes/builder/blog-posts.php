<?php
/*
Template Name: Blog Page
*/

?>
<?php get_header(); ?>

<section id="blog">
	<div class="container">
		<header>
			<h1><?php the_title(); ?> <small>(alphabetical)</small></h1>
		</header>
		<div class="row">
			<!-- Start the Loop to query portfolio posts -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 100, 'category_name' => 'blog', 'order' => 'ASC', 'orderby' => 'title' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post);
			?>
			<?php
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
				$url = $thumb['0'];
			?>
				<article class="col-sm-8 col-sm-offset-2">
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
	  $('.face.front').click(function(){
	    $(this).parent('.card').addClass('flipped').mouseleave(function(){
	      $(this).removeClass('flipped');
	    });
	  });
	  $('.face.back').click(function(){
      $(this).parent('.card').removeClass('flipped');
    });

	});
</script>

<?php get_footer(); ?>

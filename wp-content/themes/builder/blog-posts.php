<?php
/*
Template Name: Blog Page
*/

?>
<?php get_header(); ?>

<section id="blog">
	<div class="container">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<!-- Start the Loop -->
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
				<article class="inner">
					<div class="row">
						<div class="col-sm-4 col-xs-5 left">
							<div class="thumb" style="background: #fff url(<?=$url?>) center center no-repeat; background-size: cover;">&nbsp;</div>
						</div>
						<div class="col-sm-8 col-xs-7 right">
							<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
							<p class="byline vcard"><?php
   						printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp"></span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link());
   						?></p>
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
		    </article>
		    <?php endforeach; ?>
      	<?php wp_reset_postdata(); ?>
			</div>
		</div>
	<!-- Close the loop -->
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

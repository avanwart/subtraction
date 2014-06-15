			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div> <!-- end #inner-footer -->

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>
		<script src="<?php bloginfo('template_directory'); ?>/library/js/subcap.js"></script>
		<script>
			jQuery(document).ready(function($){
				$('.navbar-toggle').bind( "touchstart", function(e){
	    		e.preventDefault();
	    		$('.navbar-collapse').collapse('toggle');
	    	});
			});
		</script>
	</body>

</html> <!-- end page. what a ride! -->

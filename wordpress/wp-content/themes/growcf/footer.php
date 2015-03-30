	<div style="display: none" id="ninja-forms-preload">
		<?php 
			if( function_exists( 'ninja_forms_display_form' ) ){ 
				ninja_forms_display_form( 2 ); } 
		?>
	</div>
	<footer class="site-footer">
			<p>Copyright &copy; <?php echo date( 'Y' ); ?> Grow Cannon Falls</p>
			<?php wp_footer() ?>
		</footer>
	</div>
	<div id="signup-modal">
		<h2 class="section-heading">Get Your Free Information Packet</h2>
		<div class="signup-form-wrap">
		<?php 
			if( function_exists( 'ninja_forms_display_form' ) ){ 
				ninja_forms_display_form( 2 ); } 
		?>
	</div>
	<!--[if lt IE 9]>
		<script type="text/javascript">
			alert('You are using an outdated browser that is not supported by Grow Cannon Falls. Please upgrade your browser to improve your experience. If you are using Windows XP, please try using a newer computer, or visit our page from your mobile device or tablet. Visit http://browsehappy.com for more information.');
			</script>
	<![endif]--> 
	</div>
</body>
</html>
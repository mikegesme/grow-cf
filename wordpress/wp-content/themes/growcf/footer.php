	<div style="display: none" id="ninja-forms-preload">
		<?php 
			if( function_exists( 'ninja_forms_display_form' ) ){ 
				ninja_forms_display_form( 2 ); } 
		?>
	</div>
	<footer class="site-footer">
			<p>Copyright &copy; <?php echo date( 'Y' ); ?> Grow Cannon Falls</p>
			Cover Photo "<a href="http://commons.wikimedia.org/wiki/File:Cannon_Falls,_Minnesota_5.jpg#mediaviewer/File:Cannon_Falls,_Minnesota_5.jpg">Cannon Falls, Minnesota 5</a>" by <a href="//commons.wikimedia.org/wiki/User:AlexiusHoratius" title="User:AlexiusHoratius">AlexiusHoratius</a> - <span class="int-own-work">Own work</span>. Licensed under <a href="http://creativecommons.org/licenses/by-sa/3.0" title="Creative Commons Attribution-Share Alike 3.0">CC BY-SA 3.0</a> via <a href="//commons.wikimedia.org/wiki/">Wikimedia Commons</a>
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
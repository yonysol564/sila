<?php 
	$footer_copy 	= get_field('copy_right', 'option');


	 $facebook_img = get_field('facebook_img', 'option');
	 $youtube_img= get_field('youtube_img', 'option');
	 $googleplus_img = get_field('googleplus_img', 'option');
	 $twitter_img = get_field('twitter_img', 'option');
	
	 $facebook_link = get_field('facebook_link', 'option');
	 $youtube_link = get_field('youtube_link', 'option');
	 $googleplus_link = get_field('googleplus_link', 'option');
	 $twitter_link = get_field('twitter_link', 'option');

?>
<footer>
	<div class="footer_menu desktop_only">
    	<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'menu_class' => 'footer_menu' ) ); ?>
	</div>
	<div class="copy_footer">
		<div>
			<?php echo $footer_copy; ?>
		</div>
	</div>
	<div class="wrap_socials mobile_only">
		<?php if ($facebook_img) { ?>
	  		<a class="social_img" target="_blank" href="<?php echo $facebook_link; ?>">
				<img src="<?php echo $facebook_img['url']; ?>" alt="facebook">
			</a>								
		<?php } ?>							
		<?php if ($googleplus_img) { ?>
			<a class="social_img" target="_blank" href="<?php echo $googleplus_link; ?>">
				<img src="<?php echo $googleplus_img['url']; ?>" alt="googleplus">
			</a>							
		<?php } ?>
		<?php if ($twitter_img) { ?>
			<a class="social_img" target="_blank" href="<?php echo $twitter_link; ?>">
				<img src="<?php echo $twitter_img['url']; ?>" alt="twitter">
			</a>								
		<?php } ?>
		<?php if ($youtube_img) { ?>
			<a class="social_img" target="_blank" href="<?php echo $youtube_link; ?>">
				<img src="<?php echo $youtube_img['url']; ?>" alt="youtube">
			</a>
		<?php } ?>
	</div>
</footer>
<?php wp_footer(); ?>

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581596cf85ebe836"></script> 
</body>
</html>

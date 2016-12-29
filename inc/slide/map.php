<?php if( isset($args) && $args ): ?>
<div class="row map_row">
	<div class="large-12 column">
		<div class="map_wrap_title">
			<?php echo get_the_title(); ?>
		</div>

		<div class="wrap_map_img">	
			<img src="<?php echo $args['url']; ?>" title="" alt="">
		</div>

		<div class="map_slide_con">
			<?php echo do_shortcode( $args['content'] );?>
		</div>

	</div>
</div>
<?php endif; ?>


<?php if( isset($args) && $args ):  ?>
	<div class="slider_row clearfix">
			
		<div class="mobile_only">
			<div class="title_img">
				<img src="<?php echo $args['title_image']['url']; ?>" title="" alt="">
			</div>
			<div class="small_title">
				<?php echo $args['small_title']; ?>
			</div>
		</div>

		<div class="col_3">
			<img src="<?php echo $args['url']; ?>" title="" alt="">
		</div>

		<div class="col_9">
			
			<div class="title_img desktop_only">
				<img src="<?php echo $args['title_image']['url']; ?>" title="" alt="">
			</div>
			<div class="small_title desktop_only">
				<?php echo $args['small_title']; ?>
			</div>

			<div class="slide_con">
				<?php echo do_shortcode( $args['content'] );?>
			</div>
			<div class="staring_wrap">
				 <img src="<?php echo $args['staring']['url']; ?>" alt="staring">
			</div>
			
			<div class="wrap_con">
				<?php echo $args['slide_content']; ?>
			</div>

			<?php if ($args['choose_system']) { ?>	
				<div class="sys_operating">
					<?php 
						foreach ($args['choose_system'] as $sys) { 
							$sys_img = $sys['choose_sys_img'];
							$sys_link = $sys['choose_sys_link'];		
						?>
							<a href="<?php echo $sys_link; ?>" target="_blank">
								<img src="<?php echo $sys_img['url']; ?>" title="" alt="">
							</a>
						<?php }
					?>
				</div>
			<?php } ?>
		</div>

	</div>
<?php endif; ?>
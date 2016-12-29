<?php
/* Template Name: Home */
	get_header();
	?>
	
    <div class="main_slider">
		<?php  
			$sliders 	= get_field('sliders_show');
			$sliders_id = array();
			foreach($sliders as $slide){
				$sliders_id[] = $slide->ID;
			}
			$sliders_args = array(
				'post_type' 	 => 'slider',
				'posts_per_page' => -1,
				'post__in' 		 => $sliders_id
			);
			$sliders = new WP_Query($sliders_args);
			$first_wrap = '';
			$cnt = 0;
		?>
		<?php while ( $sliders->have_posts() ) : $sliders->the_post() ; 
			$cnt++;
			$bg_image = get_field('bg_image',$post->ID);
			if ($cnt == 1) {
				$first_wrap = 'first_wrap';
			}else{
				$first_wrap = '';
			}	
		?>
			<div class="wrapper <?php echo $first_wrap; ?>" style="background-image: url(<?php echo $bg_image['url']; ?>);">
				<div class="inner_slider">
					<?php render_slide_element($post->ID); ?>
				</div>
			</div>

		<?php endwhile; wp_reset_query(); ?>

    </div>

<?php
get_sidebar();
get_footer();
?>

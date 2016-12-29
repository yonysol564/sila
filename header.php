<?php
	 $logo = get_field('main_logo','option');

	 $facebook_img = get_field('facebook_img', 'option');
	 $youtube_img= get_field('youtube_img', 'option');
	 $googleplus_img = get_field('googleplus_img', 'option');
	 $twitter_img = get_field('twitter_img', 'option');
	
	 $facebook_link = get_field('facebook_link', 'option');
	 $youtube_link = get_field('youtube_link', 'option');
	 $googleplus_link = get_field('googleplus_link', 'option');
	 $twitter_link = get_field('twitter_link', 'option');


?>
<!doctype html>
<!--[if lt IE 10]><html lang="he" class="lt10"><![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
<title><?php wp_title(); ?></title>
<!--[if lt IE 10]>
	<script type='text/javascript'>
		$(document).ready(function(){
			$.get('browsers.html' , function(data){
				$('body').html(data);
			});
		});
	</script>
<![endif]-->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<div class="title-bar" data-hide-for="medium">
		<div class="logo_wrap logo_wrap_mobile mobile_only">
	  		<a class="logo_img" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo($show = 'name'); ?>">
				<div>
					<img src="<?php echo $logo['url']; ?>" title="<?php echo get_bloginfo($show = 'name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
				</div>
			</a>
		</div>
			<a href="#" class="mobile_only open_menu toggle_btn_menu">
				<img src="<?php echo THEME_DIR; ?>/images/mobile_menu.png" alt="open">	
			</a>
			<a href="#" class="mobile_only close_menu toggle_btn_menu">
				<img src="<?php echo THEME_DIR; ?>/images/mobile_close_menu.png" alt="close">
			</a>
		<div class="title-bar-title"></div>
	</div>
	<div class="top-bar menu_div">
		<div class="logo_wrap desktop_only">
	  		<a class="logo_img" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo($show = 'name'); ?>">
				<div>
					<img src="<?php echo $logo['url']; ?>" title="<?php echo get_bloginfo($show = 'name'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
				</div>
			</a>
		</div>

		<div class="wrap_socials desktop_only">
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

		<div class="wrap_lang desktop_only">
			<?php icl_post_languages(); ?>
		</div>

		<nav>
			<div class="desktop_only">	
	    		<?php
			        wp_nav_menu( array('theme_location' => 'top_menu','menu_class' => '','container' => '', 'container_class' => ''));
		        ?>
			</div>
			<div class="mobile_only wrap_mobile_lang">
				<?php icl_post_languages(); ?>
			</div>
			<div class="mobile_only mobile_menu_wrap">
				<?php  
					wp_nav_menu( array('theme_location' => 'mobile_menu'));
				?>
			</div>
		</nav>

		<div class="wrap_socials mobile_only top_menu_socials">
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
				<a class="social_img" target="_blank" href="<?php echo $twitter_link; ?>">
					<img src="<?php echo $youtube_img['url']; ?>" alt="youtube">
				</a>
			<?php } ?>
		</div>
	</div>	
</header>





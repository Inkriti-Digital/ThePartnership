<div class="nav-container">
	<div class="logo">
		<?php logo_action() ?>

	</div>
	
    <div class="main-nav desktop">
      <?php
						 $defaults = array(
										'theme_location'  => 'header-menu',
										'menu'            => '',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => '',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul>%3$s</ul>',
										'depth'           => 0,
										'walker'          => new themeslug_walker_nav_menu
						);
						wp_nav_menu( $defaults );
					?>
		
	</div>
		
	
	<div class="mobile-nav mobile">
		<div class="colapsed">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-menu-ico.png" alt="mobile navigation"/>
		</div>
	</div>
	<!-- search button -->
	<div id="searchbtn" class="desktop"></div>
	<div id="searchblock" class="desktop">
			<form action="#">
				<input type="text" placeholder="Enter search">
				<input type="submit" value="" class="search_button">
		  </form>
	</div>

	<!-- social links -->
	<div class="social desktop">
		<a href="#">
			<img class="ico-linked" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png'"  alt="Linked In"/>
		</a>
		<a href="#">
			<img class="ico-fb" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-fb.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-fb_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-fb.png'" alt="facebook"/>
		</a>
		<a href="#">
			<img class="ico-twitter" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter.png'" alt="twitter"/>
		</a>
		<a href="#">
			<img class="ico-youtube" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube.png'" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube.png" alt="youtube"/>
		</a>
		<a href="#">
			<img class="ico-google" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-google.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-google_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-google.png'" alt="google +"/>
		</a>
	</div>
</div>

<div class="nav-container">
  <div class="logo">
        <?php logo_action() ?>
  </div>
  <div class="main-nav" id="topnav">
    <div id="navwrap">
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
      <div id="searchbtn"></div>
      <div class="social">
	  <?php	  /* social links */
	  	  $linkedin = "https://www.linkedin.com/company/the-partnership-inc.";
	  	  $facebook = "https://www.facebook.com/thepartnershipinc?_rdr=p";
	  	  $twitter = "https://twitter.com/TPI_Program";
	  	  $youtube = "https://www.youtube.com/user/PartnershipInc";
		  $googleplus = "";
       ?> 
           <a target="_blank" href="<?php echo  $linkedin ?>">
              <img class="ico-linked" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png'"  alt="Linked In">
           </a>
           <a  target="_blank" href="<?php echo  $facebook ?>">
             <img class="ico-fb" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-fb.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-fb_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-fb.png'" alt="facebook">
           </a>
           <a  target="_blank" href="<?php echo  $twitter ?>">
             <img class="ico-twitter" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter.png'" alt="twitter">
           </a>
           <a  target="_blank" href="<?php echo  $youtube ?>">
             <img class="ico-youtube" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube.png'" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube.png" alt="youtube">
           </a>
           <a  target="_blank" href="<?php echo  $googleplus ?>">
              <img class="ico-google" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-google.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-google_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-google.png'" alt="google +">
           </a>
       
       </div>
      <div id="searchblock">
        <form action="#">
          <input type="text" placeholder="Enter search">
          <input type="submit" value="" class="search_button">
        </form>
      </div>
    </div>
    <div id="mobil-navico"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-menu-ico.png" alt=""> </div>
  </div>
</div>

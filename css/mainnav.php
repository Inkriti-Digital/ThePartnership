<?php /*?><div class="nav-container">
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
        	<!-- social links -->
	<div class="social">
		<a href="#">
			<img class="ico-linked" src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png'"  alt="Linked In"/>
		</a>
		<a href="#">
			<img class="ico-fb" src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/social-fb.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-fb_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-fb.png'" alt="facebook"/>
		</a>
		<a href="#">
			<img class="ico-twitter" src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter.png'" alt="twitter"/>
		</a>
		<a href="#">
			<img class="ico-youtube" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube.png'" src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube.png" alt="youtube"/>
		</a>
		<a href="#">
			<img class="ico-google" src="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/img/social-google.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-google_active.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/social-google.png'" alt="google +"/>
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
<?php */?>
<div class="nav-container">
  <div class="logo">
        <a href="index.php">
        <img class="desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/partnership-logo.png" alt="The Partnership Logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partnership-logo-mobile.png" alt="The Partnership Logo" id="mobilelogo"></a> 
  </div>
  <div class="main-nav" id="topnav">
    <div id="navwrap">
      <ul>
        <li> <a href="corporations.php">For Corporations</a> </li>
        <li> <a href="professionals.php">For Professionals</a> </li>
        <li> <a href="alumni.php">For Alumni</a>
          <!-- dropdown here -->
          <ul class="subnav">
            <li class="mobile"><a href="alumni.php">Overview</a>
            <li><a href="alumni-events.php">Alumni Events</a></li>
            <li><a href="alumni-contribute.php">Contribute</a></li>
          </ul>
        </li>
        <li> <a href="services.php">Services</a>
          <!-- dropdown here -->
          <ul class="subnav">
            <li class="mobile"><a href="services.php">Overview</a>
            <li><a href="leadership.php">Leadership Development</a>
              <ul class="sub-subnav">
                <li class="mobile"><a href="leadership.php">Overview</a></li>
                <li><a href="lead-csuite.php">C-Suit</a></li>
                <li><a href="lead-executive.php">Executive</a></li>
                <li><a href="lead-midcareer.php">Mid-Career</a></li>
                <li><a href="lead-earlycareer.php">Early-Career</a></li>
              </ul>
            </li>
            <li><a href="serv-consulting.php">Consulting</a></li>
            <li><a href="serv-boardlink.php">Boardlink</a></li>
            <li><a href="serv-learning.php">Learning Center</a></li>
            <li><a href="serv-partners.php">Client/Partners</a></li>
          </ul>
        </li>
        <li> <a href="about.php">About</a>
          <!-- dropdown here -->
          <ul class="subnav">
            <li><a href="about.php">Overview</a>
            <li><a href="news-leadership.php">Our Leadership</a>
              <ul class="sub-subnav">
                <li class="mobile"><a href="about-leadership.php">Overview</a></li>
                <li><a href="about-staff.php">Staff</a></li>
                <li><a href="about-faculty.php">Faculty</a></li>
                <li><a href="about-board.php">Board</a></li>
              </ul>
            </li>
            <li><a href="about-events.php">Events</a></li>
            <li><a href="about-news.php">In the News</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
      <div id="searchbtn"></div>
      <div class="social"> <a href="#"><img class="ico-linked" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-linkedin.png" onmouseover="this.src='img/social-linkedin_active.png'" onmouseout="this.src='img/social-linkedin.png'"  alt="Linked In"> </a> <a href="#"> <img class="ico-fb" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-fb.png" onmouseover="this.src='img/social-fb_active.png'" onmouseout="this.src='img/social-fb.png'" alt="facebook"> </a> <a href="#"> <img class="ico-twitter" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-twitter.png" onmouseover="this.src='img/social-twitter_active.png'" onmouseout="this.src='img/social-twitter.png'" alt="twitter"> </a> <a href="#"> <img class="ico-youtube" onmouseover="this.src='img/social-youtube_active.png'" onmouseout="this.src='img/social-youtube.png'" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-youtube.png" alt="youtube"> </a> <a href="#"> <img class="ico-google" src="<?php echo get_template_directory_uri(); ?>/assets/img/social-google.png" onmouseover="this.src='img/social-google_active.png'" onmouseout="this.src='img/social-google.png'" alt="google +"> </a> </div>
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

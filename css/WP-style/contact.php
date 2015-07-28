<?php
/*
Template Name: Contact
*/
?>
  <?php get_header();?>
	 <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 <div class="header">
				<div class="head-image">
					<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
					<img src="<?php echo $url; ?>"/>
				</div>
			</div>
      <div class="seperator-red"></div>
  <div class="inner-container">
    <div class="biz-block alumniblock">
      <h2><?php the_title();?></h2>
      <p><?php the_content();?></p>
    </div>
  </div>
  <div class="inner-seperator contact-seperator">
    <div class="red-block">
   
      <div class="three-col">
        <div class="address-view">
          <h4><?php the_field("contact_address_text");?></h4>
          <p><?php the_field("contact_address_direction");?></p>
          <a target="_blank" href="<?php  the_field("contact_address_direction_link") ?>" class="directions-link"><?php  the_field("contact_us_get_direction_text") ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/direction-btnbg.png" alt=""></a> </div>
      </div>
      <div class="three-col">
        <div class="address-view">
          <h4><?php the_field("contact_address_block_2_text");?></h4>
          <p><?php the_field("contact_number");?>
          <?php the_field("conatct_mail");?>
          </p>
        </div>
      </div>
      
      <div class="three-col">
        <div class="address-view">
          <h4>Social Media</h4>
          <p class="social-media"> <a  target="_blank"  href="<?php  the_field("contact_social_media_linkedin_links") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-media-linkdin.png" alt=""></a> <a  target="_blank"  href="<?php  the_field("contact_social_media_facebook_links") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-media-fb.png" alt=""></a> <a  target="_blank"  href="<?php  the_field("contact_social_media_twitter_links") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-media-twitter.png" alt=""></a> <a  target="_blank"  href="<?php  the_field("contact_social_media_youtube_links") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-media-youtube.png" alt=""></a> <a  target="_blank"  href="<?php  the_field("contact_social_media_googleplus_links") ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social-media-google.png" alt=""></a> </p>
        </div>
      </div>
      
    </div>
  </div>
  <div class="inner-container">
    <div class="page-body-block corp-block">
      <!--contact form-->
      <div class="contact-form-wrap">
        <h3>Send Us A Message</h3>
        <div class="divider"> </div>
        <div class="contact-form">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-elements">
            <div class="form-col">
              <label>First Name:*</label>
              <input type="text" placeholder="" name="fname">
            </div>
            <div class="form-col right-col">
              <label>Last Name:*</label>
              <input type="text" placeholder="" name="lname">
            </div>
          </div>
          <!--form row-->
          <div class="form-elements">
            <div class="form-col">
              <label>Job Title:</label>
              <input type="text" placeholder="" name="jobTitle">
            </div>
            <div class="form-col right-col">
              <label>Company:*</label>
              <input type="text" placeholder="" name="company">
            </div>
          </div>
          <!--form row-->
          <div class="form-elements">
            <div class="form-col">
              <label>Phone Number:</label>
              <input type="text" placeholder="" name="phonenumber">
            </div>
            <div class="form-col right-col">
              <label>Reason for Contacting:</label>
              <input type="text" placeholder="" name="reasonofContact">
            </div>
          </div>
          <!--form row-->
          <div class="form-elements">
            <label>Message:*</label>
            <textarea class="textareatab" name="message"></textarea>
          </div>
          <div class="form-elements">
            <label>
              <input type="checkbox" name="joml" value="yes">
              Join Our Mailing List</label>
            <input type="submit" value="Submit" name="contactus" class="submit-button">
          </div>
          </form>
        </div>
      </div>
      <!--contact form-->
    </div>
  </div>

<?php endwhile; else : ?>
    <?php endif; ?>
    <?php get_footer(); ?>
 
<?php get_header() ?>
<!-- header banner -->
<?php $pageQuery = new WP_Query("pagename=home-page"); ?>
<?php if ( $pageQuery->have_posts() ) : while ( $pageQuery->have_posts() ) : $pageQuery->the_post(); ?>
  <div class="header">
    	<div class="head-title">
      		<h1> <?php the_field("banner_title") ?></h1>
      		<div class="head-cta"> <?php the_field("banner_link_title") ?> 
       			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-arrow-red.png"/> 
       		</div>
    	</div>
    		<div class="head-image"> 
    			<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
					<img src="<?php echo $url; ?>"/>
    		</div>
  </div>
	<!--// header banner -->
  <div class="seperator-red"></div>
  <div class="inner-container">
    	<div class="biz-block">
      		<h2> <?php the_field("business_title") ?></h2>
      		<p> <?php the_field("business_content") ?>  </p>
    	</div>
		<!-- service_list -->
     				<?php if( have_rows('business_images_text') ): ?>   
                           <ul class="service_list">
                                    <?php while( have_rows('business_images_text') ): the_row(); ?>
                                    <li>
                                    <?php $file=get_sub_field('business_image_icon'); ?>
                                    <img src="<?php echo $file['url']; ?>"/>
                                        <div class="tooltip">
                                            <div class="tip-copy">
                                                <h4><?php the_sub_field('business_image_title'); ?></h4>
                                                <p><?php the_sub_field('business_image_content'); ?></p>
                                            </div>
                                        </div>
                                </li>
                                
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
		
    
    <!--// service_list -->
    <a href="<?php  the_field("business_link") ?>" class="section-cta biz-cta">  See what we can do for your business  </a> </div>
  <div class="seperator-blue"></div>
  <div class="inner-container">
    <div class="personal-block">
      	<h2><?php the_field("professionals_title") ?></h2>
      	<p> <?php the_field("professional_content") ?>  </p>
      			<div class="graphic-row">
       				<?php if( have_rows('leadership_programs') ): ?>
               		 <?php while( have_rows('leadership_programs') ): the_row(); ?>
        				<div class="quote-block"> 
                        <span class="headshot">
                         <?php $file=get_sub_field('leadership_image'); ?>
								<img src="<?php echo $file['url']; ?>" style="width:134px; height:134px;"/>
                        </span>
                              <div class="quote">
                              <b><?php echo get_sub_field('leadership_title');?> </b>
                                <?php echo get_sub_field('leadership_content');?> 
                              </div>
        				</div>
                                
        <?php endwhile; else : ?>
					
					<?php endif; ?>
      			</div>
      
      <a href="<?php  the_field("professional_link") ?>" class="section-cta personal-cta"> How we work with professionals </a> </div>
  </div>
  <div class="seperator-aqua"></div>
  <div class="inner-container">
    <div class="alumni-block">
      <h2><?php the_field("network_title") ?></h2>
      <p> <?php the_field("network_content") ?> </p>
      <div class="graphic-row">
        <div>
          <div class="graph-ico">
            <div><canvas id="chart-area1" width="180" height="180"/></div>
            <div class="graph-label"><?php the_field("graph_title_one")?></div>
          </div>

          <div class="graph-ico">
            <div><canvas id="chart-area2" width="180" height="180"/></div>
            <div class="graph-label"><?php the_field("graph_title_two")?></div>
          </div>

          <div class="graph-ico">
            <div><canvas id="chart-area3" width="180" height="180"/></div>
            <div class="graph-label"><?php the_field("graph_title_three")?></div>
          </div>

        </div>
        <div class="graph-labels"> 
          
        </div>
      </div>
      <a href="<?php  the_field("network_link") ?>"><span class="section-cta alumni-cta">  See how our alumni make a difference</span></a> </div>
  </div>
<?php endwhile; else : ?>
 <?php endif; ?>
<?php get_footer() ?>
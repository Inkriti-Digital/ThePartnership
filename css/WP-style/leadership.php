<?php
/*
Template Name: Curriculum
*/
?>
<?php get_header(); ?>
<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="header">
  					<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
    <div class="head-image"> <img src="<?php echo $url; ?>"/> </div>
  </div>
  <div class="seperator-red seperatormini"></div>
  <div class="inner-container">
    <div class="biz-block">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
      <?php $term = get_term_by('slug', 'leadership-development-programs ', 'curriculum_category'); $name = $term->term_id; ?>
      <?php 
	     $args = array(
			'orderby'           => 'ID', 
			'order'             => 'DESC',
			'hide_empty'        => 0,
			'child_of'            => $name
		); 
	  ?>
      <?php $mylinks_categories = get_terms( 'curriculum_category', $args ); ?>
      <?php //print_r($mylinks_categories); ?>
      <!-- select options -->
      <div class="experience-selector">
        <label><?php the_field("select_box_text"); ?></label>
        <div class="experience-select">
          <select id="selectbox1">
             <?php 
			   foreach($mylinks_categories as $categories){
				
			  ?>
            <option value="<?php echo $categories->term_id ?>"><?php echo str_ireplace('program', '', $categories->name); ?></option>
			<?php
                }
            ?>
          </select>
        </div>
      </div>
      <!--// select options -->
    </div>
    <div class="page-body-block corp-block">
    <!-- not list out all category -->
    <?php 
	 foreach($mylinks_categories as $categories){
     // print_r($categories);
	  $alumni_number = get_field('alumni_number', $categories->taxonomy."_".$categories->term_id);
	  $linkedin_link = get_field('linkedin_link', $categories->taxonomy."_".$categories->term_id);
	  $sectors_include = get_field('sectors_include', $categories->taxonomy."_".$categories->term_id);
	  $calltoactionlink = get_field('call_to_action_link', $categories->taxonomy."_".$categories->term_id);
	  $calltoactiontext = get_field('call_to_action_text', $categories->taxonomy."_".$categories->term_id);
	  $Meet_an_alum_text = get_field('meet_an_alum_text', $categories->taxonomy."_".$categories->term_id);
	  $Meet_an_alum_link = get_field('meet_an_alum_link', $categories->taxonomy."_".$categories->term_id);
     ?>
      <div class="cirruculam_category" id="cirruculam_category_<?php echo $categories->term_id ?>">
      <span class="divider"></span>
      <div class="classdetails">
        <!-- class view -->
        <div class="alum-info classview" style="list-style:disc;">
          <h2><?php echo $categories->name ?></h2>
          <p><?php echo $categories->description ?></p>
            <?php
				$url = $categories->taxonomy."/".$categories->slug;
				//echo $url;
				$term_link = get_term_link( $categories );
			?>
          <?php if(!empty($calltoactionlink)){ ?>
          <a href="<?php echo esc_url( $calltoactionlink ) ?>" class="calltoaction"><?php echo $calltoactiontext;  ?><img src="<?php echo get_template_directory_uri() ?>/assets/img/linkarrow.png" alt=""/></a>
          <?php } ?>
          <?php if(!empty($Meet_an_alum_link)){ ?>
         <a href="<?php echo esc_url( $Meet_an_alum_link ) ?>" class="calltoaction"><?php echo $Meet_an_alum_text;  ?><img src="<?php echo get_template_directory_uri() ?>/assets/img/linkarrow.png" alt=""/></a>
          <?php } ?>
         </div>
        <!-- class info -->
        <div class="alumni-network">
          <h4>About the Alumni Network</h4>
          <div class="network-num"> <strong><?php echo $alumni_number; ?></strong> <span>alumni</span> </div>
          <div class="networkconnect">
          <?php if(!empty($linkedin_link)){ ?>
          <a href="<?php echo $linkedin_link; ?>">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/linkdin.png" alt=""> <span> connect <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-link.png" alt=""></span>
           </a> 
          <?php } ?>
          </div>
          <p><strong>Sectors include:</strong><span><?php echo $sectors_include; ?></span></p>
        </div>
      </div>
      </div>
      <?php
	 }
  ?>
    
    
    
    <!-- not list out all category -->
      <!--// curriculum-wrap -->
    </div>
  </div>
<?php endwhile; else : ?>
<?php endif; ?>
<?php  get_footer() ?>
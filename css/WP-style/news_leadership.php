<?php
/*
Template Name: Our Leadership
*/
get_header()
?>
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="header">
    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
    <div class="head-image"> <img src="<?php echo $url; ?>"/> </div>
  </div>
  <div class="seperator-red seperatormini"></div>
  <div class="inner-container">
    <div class="biz-block alumniblock">
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
 
    <div class="page-body-block" style="padding-top:0px;">
      <!--h3--><!--?php the_field("alumni_events_subheadline"); ?></h3-->
      <div class="divider"></div>
      <!-- Posts -->
      <div class="posts-wrap">
       <?php
	   	   $term =	$wp_query->queried_object; 
	   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	   $args = array (
						  "post_type" => array("leadership","news"),
						  "orderby" => "menu_order",
						  "order" => "ASC",
						  "posts_per_page" => "4",
						  "paged" => $paged,
						  'tax_query' => array(
											array(
												'taxonomy' => "leadership_category",
												'field'    => 'slug',
												'terms'    => 'leadership', 
											),
										),
						 ); 
		?>
        <?php $news = new Wp_Query($args); ?>
        <?php if ( $news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
            <div class="post-row">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
              <div class="post-img"> <img src="<?php echo $url; ?>"/> </div>
              <div class="post-content">
                <h3><?php the_title(); ?>
                <?php $company  = get_field('company_name'); ?>
                <?php $jobtitle  = get_field('job_title'); ?>
                <span><!--<?php the_field("first_name"); ?>,<?php the_field("last_name"); ?><br>--> <?php echo $jobtitle; ?><br/>
				      <?php if(!empty( $company ) || empty($jobtitle)){ echo ''; }elseif(empty( $company ) || !empty($jobtitle)){ echo ''; }elseif(empty( $company ) || empty($jobtitle)){ echo ''; }elseif(!empty( $company ) || !empty($jobtitle)){ echo ','; } ?>
					      <?php echo get_field("company_name"); ?>
                 </span></h3>
                </h3>
                            <div id="postDescript">
							 <?php the_excerpt(); ?>
                             </div>
 							 <div id="postMore">
 							 	<?php the_content(); ?>
 							 </div>
                             <?php $content = get_the_content(); ?>
                             <?php if(!empty($content)){ ?>
 							 <a class="readMore redlink" href="#">Read more ></a>
 							 <br/>
 							 <a class="readLess redlink" href="#">Read less</a>
                             <?php } ?>
              </div>
            </div>
            <div class="divider"></div>
        <!-- pagenation -->
        <?php endwhile; pagination($news); endif; ?>
      </div>
      <!--// Posts -->
    </div>
  </div>
<?php endwhile; endif; ?>
<?php 
get_footer(); 
?>
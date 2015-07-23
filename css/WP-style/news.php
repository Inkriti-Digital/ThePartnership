<?php
/*
Template Name: News
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
      <p><?php the_content(); ?></p>
    </div>
 
    <div class="page-body-block">
      <h3><?php the_field("alumni_events_subheadline"); ?></h3>
      <div class="divider"></div>
      <!-- Posts -->
      <div class="posts-wrap">
       <?php $args = array (
						  "post_type" => "news",
						  "orderby" => "ID",
						  "order" => "ASC",
						  "posts_per_page" => "4"
						 ); 
		?>
        <?php $news = new Wp_Query($args); ?>
        <?php if ( $news->have_posts() ) : while ( $news->have_posts() ) : $news->the_post(); ?>
            <div class="post-row">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
              <div class="post-img"> <img src="<?php echo $url; ?>"/> </div>
              <div class="post-content">
                <h3><?php the_title(); ?></h3>
                <?php $content = explode(".",get_the_content());  ?>
                <p id="postDescript">
							 <?php
								 for($i=0 ;$i<= 3 ; $i++){
									 if(!empty($content[$i])){
									 echo $content[$i].".";
									 }
								 }
							  ?>
                             </p>
 							 <p id="postMore">
 							 	<?php
									 for($i=3 ;$i<= count($content) ; $i++){
										 if(!empty($content[$i])){
										 echo $content[$i].".";
										 }
									 }
							    ?>
 							 </p>
 							 <a class="readMore redlink" href="#">Read more ></a>
 							 <br/>
 							 <a class="readLess redlink" href="#">Read less</a>
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
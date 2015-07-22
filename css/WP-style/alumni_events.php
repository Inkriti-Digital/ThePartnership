<?php
/*
Template Name: Alumni Events
*/
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- here image -->
<div class="header">
				<div class="head-image">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
					<img src="<?php echo $url ?>" alt="<?php echo get_the_title(); ?>"/>
				</div>
</div>
<!-- here image -->
<div class="seperator-red seperatormini"></div>
<!-- main content comes here -->
<div class="inner-container">
				<div class="biz-block alumniblock">
					<h2><?php the_title(); ?></h2>
					<p>
					<?php the_content(); ?>
					</p>
				</div>
     	
				<div class="page-body-block">
      <h3><?php the_field("alumni_events_subheadline"); ?></h3>
			<div class="divider"></div>
       <!-- Posts -->
			 <div class="posts-wrap">
              <!-- event loop comes here -->
              <?php $term = get_term_by('slug', 'alumni-events', 'tribe_events_cat'); $name = $term->term_id; //echo $name; ?>
              <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
              <?php $args = array( 'post_type' => 'tribe_events', 'posts_per_page' => '6' , 'paged' => $paged, 'orderby' => 'ID' , 'order' => 'DESC' ,'tax_query' => array(
											array(
												'taxonomy' => 'tribe_events_cat',
												'field'    => 'slug',
												'terms'    => 'alumni-events',
											),
										), ); ?>
               <?php print_r($pagenation_loop) ?>
			  <?php $eventsQuery = get_posts( $args ); ?>
              <?php //print_r($eventsQuery) ?>
			<?php	foreach ( $eventsQuery as $eventsQuerys ) { ?>
            <?php  setup_postdata($eventsQuerys); ?>
					<div class="post-row">
 					 	<div class="post-img">
                                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($eventsQuerys->ID));  ?>
 								<img src="<?php echo $url; ?>" style="width:98px;height:99px;"/>
 						</div>
 						<div class="post-content">
                           <?php
						   //start date
						    $_EventStartDate = get_post_meta($eventsQuerys->ID,"_EventStartDate") ;
						    $old_date = date($_EventStartDate[0]);              // returns Saturday, January 30 10 02:06:34
							$old_date_timestamp = strtotime($old_date);
							$new_start_date = date('l jS \of F Y h:i:s A', $old_date_timestamp); 
							//venu
							$venuId = get_post_meta($eventsQuerys->ID,"_EventVenueID");//_EventVenueID
							$venuePlace = get_post_meta($venuId[0],"_VenueVenue");
							// content split
							$content = explode(".",$eventsQuerys->post_content); 
							//echo print_r($content) ;
							$content200_1000000000 = substr($eventsQuerys->post_content, 200, 1000000000);
						   ?>
 						   <h3><?php echo get_the_title($eventsQuerys->ID); ?><span><?php echo  $new_start_date; ?><br>
						   <?php echo $venuePlace[0]; ?></span></h3>
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
              			
              <!-- event loop comes here -->               
			 <?php }?>
					<!-- pagenation -->
                    <?php 	$count_posts = wp_count_posts('tribe_events'); $published_posts = $count_posts->publish; //echo  $published_posts; ?>
                    <?php custom_pagination($args,$published_posts); ?>
             </div>
			 <!--// Posts -->
    </div>
	</div>	
<?php  endwhile; ?>
<?php endif; ?>	
<?php
get_footer();
?>
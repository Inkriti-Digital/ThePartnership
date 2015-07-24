<?php
/*
Template Name: Corporations
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
				<div class="biz-block">
					<h2><?php the_title()?></h2>
					<p>
						<?php the_content()?>
					</p>
				</div>
			</div>
			<div class="inner-seperator">
				<div class="red-block">
                  <?php if( have_rows('center_three_modules') ): ?>
               		 <?php while( have_rows('center_three_modules') ): the_row(); ?>
					<div class="three-col">
						<div class="percentage"><?php echo get_sub_field('percentage');?>%</div>
						<p>
                          <?php echo get_sub_field('three_module_content');?>
							
						</p>
                         <?php $file=get_sub_field('three_module_link'); ?>
							<span class="share-cta" onclick="popthisUp('')" style="cursor:pointer;">
								share
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/share-arrow.png"/>
							</span>
					</div>
				
                    <?php endwhile; else : ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="inner-container">
				<div class="page-body-block corp-block">
					<h3>Featured Clients</h3>

					<div>
                         <?php $args = array (
						  "post_type" => "professionals",
						  "category_name" => "for-corporations",
						  "orderby" => "ID",
						  "order" => "ASC",
						  "posts_per_page" => "4"
						 ); 
						 $x = 1;
						 ?>
                         <?php $featured_client = new Wp_Query($args); ?>
                    	 <?php if ( $featured_client->have_posts() ) : while ( $featured_client->have_posts() ) : $featured_client->the_post(); ?>
                           <?php 
						    $y =  $x++;
						   $even = ($y % 2 == 0);
                           $odd = ($y % 2 != 0);
						   ?>
                           <?php if($odd){ ?>
                           <span class="divider"></span>
                           <div class="alumni-row">
                               <div class="alum-pic left"><?php the_post_thumbnail(); ?></div>
                                    <div class="alum-info left push-left">
                                        <h2><?php the_title();?></h2>
                                        <span><?php the_field('custompost_title');?></span>
                                        <p><?php the_content();?></p>
                                    </div>
                            </div>
                           <?php }elseif($even){ ?>
                           <span class="divider"></span>
                           <div class="alumni-row">
                              <div class="clear-fix desktop"></div>
                              <div class="alum-pic right"><?php the_post_thumbnail(); ?></div>
                              <div class="alum-info left">
                                <h2><?php the_title();?></h2>
                                <span><?php the_field('custompost_title');?></span>
                                <p><?php the_content();?></p>
                              </div>
                            </div>
                           <?php }?>
                          <?php endwhile; endif; ?>
                    
                    <!-- below div is a odd number div -->
						

                       <!-- below div is a even number div -->
						


						
					</div>
				</div>


			</div>
    <?php endwhile; else : ?>
    <?php endif; ?>
    <?php get_footer(); ?>

    			<script>
				    $(document).ready(function () {
				    $('.main-nav ul:first-child li:first-child a').addClass('active-nav');
					});
			    </script>





 
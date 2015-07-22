<?php
/*
Template Name: alumni
*/
?>
<?php get_header();?>
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="header">
				<div class="head-image">
					<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
					<img src="<?php echo $url; ?>"/>
				</div>
			</div>

			<div class="seperator-aqua"></div>
			<div class="inner-container">
				<div class="biz-block">
					<h2><?php the_title()?></h2>
					<p>
                    <?php the_content()?>
						
					</p>
				</div>
			</div>
			<div class="inner-seperator">
				<div class="aqua-block">
                 <?php if( have_rows('alumni_three_column') ): ?>
               		 <?php while( have_rows('alumni_three_column') ): the_row(); ?>
					<div class="three-col">
						<h2><?php echo get_sub_field('alumni_three_column_title');?></h2>
						<p>
                        <?php echo get_sub_field('alumni_three_column_content');?>
							
						</p>
						<a href=" <?php echo get_sub_field('alumni_three_column_link');?>">
							<span class="section-cta biz-cta">
								 <?php echo get_sub_field('alumni_three_column_link_title');?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-white.png"/>
							</span>
						</a>
					</div>
					
                    <?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>

			<div class="inner-container">
				<div class="page-body-block">
					<h3>FEATURED ALUMNI</h3>

					<div>
                         <?php $args = array (
						  "post_type" => "professionals",
						  "category_name" => "for-alumni",
						  "orderby" => "ID",
						  "order" => "ASC"
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
                           		<div class="alum-pic left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corp-bio1.jpg" alt="Juan Torres"/></div>
								<div class="alum-info left push-left">
									<h2><?php the_title();?></h2>
									<span><?php the_field('custompost_title');?></span>
									<p><?php the_content();?></p>
								</div>
								<div class="clear-fix"></div>
							</div>
						
                           <?php }elseif($even){ ?>
						   <span class="divider"></span>
						   <div class="alumni-row">
	                           <div class="alum-info left">
								<h2><?php the_title();?></h2>
								<span><?php the_field('custompost_title');?></span>
								<p><?php the_content();?></p>
							</div>
							<div class="alum-pic left push-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/corp-bio2.jpg" alt="Kelly Porter"/></div>
							<div class="clear-fix"></div>
						</div>
						
                           
                           <?php }?>
                          <?php endwhile; endif; ?>
                    
                    <!-- below div is a odd number div -->
						

                       <!-- below div is a even number div -->
						


						
					</div>
				</div>
			</div>			
			<?php endwhile; else : ?>
 <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
 <?php endif; ?>
                       

<?php get_footer(); ?>
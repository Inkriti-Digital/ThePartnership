<?php
/*
Template Name: Professionals
 */
get_header();
?>
	
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="header">
				<div class="head-image">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));  ?>
					<img src="<?php echo $url; ?>"/>
					
				</div>
			</div>

			<div class="seperator-blue"></div>
			<div class="inner-container">
				<div class="pro-block">
					<h2><?php the_title()?></h2>
					<p>
						<?php the_content()?>
					</p>
				</div>
			</div>
			<div class="inner-seperator">
				<div class="blue-block">
					<?php if( have_rows('professional_three_modules') ): ?>
               		 <?php while( have_rows('professional_three_modules') ): the_row(); ?>
					<div class="three-col">
						<div class="percentage">  <?php echo get_sub_field('professional_three_modules_percentage');?>%</div>
						<p>
                          <?php echo get_sub_field('professional_three_modules_content');?>
							
						</p>
                         <?php $file=get_sub_field('professional_three_modules_link'); ?>
						
							<span class="share-cta" onclick="popthisUp('')" style="cursor:pointer;">
								share
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/share-arrow-blue.png"/>
							</span>
						
					</div>
				
                    <?php endwhile; else : ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="inner-container">
				<div class="page-body-block pro-block">
					<h3>FEATURED ALUMNI AND CLIENTS</h3>

					<div>
                         <?php $args = array (
						  "post_type" => "professionals",
						  "category_name" => "for-professionals",
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
			<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
<?php
/*
Template Name: Misc
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

			<div class="seperator-red"></div>
			<div class="inner-container">
				<div class="biz-block misc-block">
					<h2><?php the_title();?></h2>
					<p>
						<?php the_content();?>
					</p>
				</div>		
				<div class="page-body-block misc-block">
					<div class="main-copy">
						<p>
                         <?php 

// get an image field
$image = get_field('misc_content_headline_image');

// each image contains a custom field called 'link'
//$link = get_field('link', $image['ID']);

// render
?>
                            <img class="left" src="<?php echo $image['url']; ?>"/>
							<h2><?php the_field('misc_content_headline_title');?></h2>
							<?php the_field('misc_content_headline_content');?>
						</p>
					</div>
					<div class="clear-fix"></div>
                    <?php if( have_rows('misc_content') ): ?>
               		 <?php while( have_rows('misc_content') ): the_row(); ?>
					<div class="main-copy">
						<p>
							<h3> <?php echo get_sub_field('misc_content_titile');?></h3>
								<?php echo get_sub_field('misc_healine_content');?>
							</p>
							

					</div>
                     <?php endwhile; else : ?>
					<?php endif; ?>
				</div>
			</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

				<script>
				    $(document).ready(function () {
				    $('.main-nav ul:first-child li:nth-child(5) a').addClass('active-nav');
					});
			    </script>


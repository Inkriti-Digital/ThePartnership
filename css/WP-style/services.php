<?php
/*
Template Name: Services
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
					<h2><?php the_title() ?></h2>
					<?php the_content(); ?>
				</div>
            </div>		
<?php endwhile; endif; ?>				
<?php get_footer(); ?>

				<script>
				    $(document).ready(function () {
				    $('.main-nav ul:fourth-child li:nth-child(4) a').addClass('active-nav');
					});
			    </script>

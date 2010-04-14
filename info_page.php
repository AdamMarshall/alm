<?php
/*
Template Name: info_page
*/
?>

<?php get_header(); ?>

<div id="nav">
		<?php wp_page_menu( array('exclude' => 26 ) ); ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post">
	
	<div class="info">
		<div class="info_main">
			<?php the_content('Read more...?'); ?>
		</div>
		<div class="info_image">
			<img src="<?php $image = get_post_custom_values("image_url"); echo $image[0]; ?>" />
		</div>
		<div class="clear"></div>
	</div>	
	
</div>
   
<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>

    <?php get_footer(); ?>

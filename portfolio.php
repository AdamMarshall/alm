<?php
/*
Template Name: portfolio
*/
?>

<?php get_header(); ?>

<div id="nav">
		<?php wp_page_menu( array('exclude' => 26 ) ); ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post">
	<h3>Portfolio</h3>
	<div class="main">
		<?php the_content('Read more...?'); ?>
				
	</div>
</div>
   
<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>

    <?php get_footer(); ?>

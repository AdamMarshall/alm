<?php
/*
Default Template
*/
?>

<?php get_header(); ?>

<div id="nav">
		<?php wp_page_menu( array('exclude' => 26 ) ); ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post">
	<div class="main">
		<p><b>Default Template</b></p>
		<?php the_content('Read more...?'); ?>
	</div>
</div>
   
<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>

    <?php get_footer(); ?>

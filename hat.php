<?php
/*
Template Name: hat
*/
?>

<?php get_header(); ?>

<?php 
$id = $_GET['id'];
$prev = ($id == 1) ? "/portfolio" : "/portfolio/hat/?id=" . ($id-1);
$next = ($id == 10) ? "/portfolio" : "/portfolio/hat/?id=" . ($id+1);
?>

<div id="nav">
	<ul>		  
		<li class="page_item"><a href="<?php bloginfo('url'); echo $prev; ?>" title="Previous">Previous</a></li>
		<li class="page_item"><a href="<?php bloginfo('url'); ?>/portfolio/" title="Back to the Portfolio">Back</a></li>
		<li class="page_item"><a href="<?php bloginfo('url'); echo $next; ?>" title="Next">Next</a></li>
	</ul>	
</div>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post">

	<div class="main">
		<?php the_content('Read more...?'); ?>
				
	</div>
</div>
   
<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>

    <?php get_footer(); ?>

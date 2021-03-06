<?php
/*
Blog Template
*/
?>

<?php get_header(); ?>

<div id="nav">
		<?php wp_page_menu( array('exclude' => 26 ) ); ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">
	
	<div class="postHeader">
		<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</div>	
	<div class="main">
		<?php the_content('Read more...?'); ?>
	</div>
	<div class="meta">Written by <a href="mailto:<?php echo antispambot(get_the_author_email()); ?>">
		<?php the_author(); ?></a>, on <?php the_time('F jS, Y'); ?> 
		<?php _e("at"); ?> <?php the_time('g:i a'); ?> 
		<?php the_tags('tagged: ', ', ', ''); ?> - 
		<?php comments_popup_link('Leave the first comment!','1 Comment','% Comments'); ?> 
		<?php edit_post_link('(Edit this?)'); ?>
	</div>

</div>
    
    <?php if ( comments_open() ) comments_template(); ?>

<?php endwhile; else: ?>
<?php include (TEMPLATEPATH . '/404.php'); ?>
<?php endif; ?>

<div class="navigation_group">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

    <?php get_footer(); ?>

    
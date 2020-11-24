<?php wp_get_header();?>

<div id="pbody">

	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<div class="posttop"></div>			
<div class="ptitle"><h2 class="title">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>

				<div class="entry">

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	
</div>
<p class="postmetadata">Added <span class="date"><?php the_time('l, F j, Y') ?></span>
in <span class="cat"><?php the_category(', ') ?></span>
<span class="comm"><?php comments_popup_link('Add a Comment', '1 Comment', '% Comments'); ?></span></p>
<div class="postbot"></div>
	</div>


<div class="nobg">
<div id="replies">
	<?php comments_template(); ?>
</div></div>
	<?php endwhile; else: ?>
	    <?php include(TEMPLATEPATH."/404.php");?>
      <?php endif; ?>
	</div>
<?php get_sidebar();?>
</div>

<?php wp_get_footer(); ?>
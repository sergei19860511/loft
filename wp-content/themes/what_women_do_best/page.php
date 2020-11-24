<?php wp_get_header(); ?>

<div id="pbody">

	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
<div class="posttop"></div>
		<div class="ptitle"><h2 class="title">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
		</div>
<div class="postbot"></div>
		<?php endwhile; endif; ?>
	
	</div>
</div>
<?php get_sidebar();?>
</div>

<?php wp_get_footer(); ?>
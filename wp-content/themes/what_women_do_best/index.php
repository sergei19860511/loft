<?php wp_get_header(); ?>
<div id="pbody">
<div id="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="posttop"></div>				
<div class="ptitle"><h2 class="title">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

</div>


			<div class="entry">
<?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>
				    <a href="<?php the_permalink() ?>" rel="bookmark"><img style="float:left;margin:17px 10px 0px 0px;" src="<?php echo get_post_meta($post->ID, "thumbnail", true); ?>" alt="<?php the_title(); ?>" /></a>
				<?php else: ?>
				   	<a href="<?php the_permalink() ?>" rel="bookmark"><img style="float:right;margin:17px 0px 0px 10px;"  src="<?php bloginfo('template_url'); ?>/images/thumbnail.png" alt="<?php the_title(); ?>" /></a>
				<?php endif; ?>	
				<?php the_content_limit(750, "<b>&#187;View More</b>"); ?>		

</div>
<p class="postmetadata">Added <span class="date"><?php the_time('l, F j, Y') ?></span>
in <span class="cat"><?php the_category(', ') ?></span>
<span class="comm"><?php comments_popup_link('Add a Comment', '1 Comment', '% Comments'); ?></span></p>
<div class="postbot"></div>
</div>
		<?php endwhile; ?>
		<div class="navigation">

<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
			else { ?>

			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				<?php } ?>

		</div>
	<?php else : ?>
	    <?php include(TEMPLATEPATH."/404.php");?>
      	<?php endif; ?>
</div>
<?php get_sidebar();?>
</div>

<?php wp_get_footer(); ?>
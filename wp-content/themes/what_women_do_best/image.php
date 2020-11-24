<?php wp_get_header();?>
   <div id="pbody">

	<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
<div class="posttop"></div>
			<div class="ptitle">
            <h2 class="title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
            </div>

            		<div class="entry">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
				<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignright"><?php next_image_link() ?></div>
				</div>
				<br class="clear" /></div>
<p class="postmetadata">Added <span class="date"><?php the_time('l, F j, Y') ?></span>
in <span class="cat"><?php the_category(', ') ?></span>
<span class="comm"><?php comments_popup_link('Add a Comment', '1 Comment', '% Comments'); ?></span></p>	
<div class="postbot"></div>			
			
		</div>


	<div class="nobg">
<div id="replies">
	<?php comments_template(); ?></div></div>
	<?php endwhile; else: ?>
      	 <?php include(TEMPLATEPATH."/404.php");?>
<?php endif; ?>
</div>
<?php get_sidebar();?>
	</div>

<?php wp_get_footer(); ?>
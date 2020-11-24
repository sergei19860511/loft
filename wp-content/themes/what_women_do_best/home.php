<?php wp_get_header(); ?>
<div id="pbody">
 <div id="content">

  <?php $my_query = new WP_Query('showposts=10');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>

			<div class="posthometop">
			<div class="posthome">	
<h2 class="home">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			
<?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>
				    <a href="<?php the_permalink() ?>" rel="bookmark"><img style="width: 100px;float:left;margin:10px 10px 0px 0px;" src="<?php echo get_post_meta($post->ID, "thumbnail", true); ?>" alt="<?php the_title(); ?>" /></a>
				<?php else: ?>
				   	<a href="<?php the_permalink() ?>" rel="bookmark"><img style="width: 100px; float:left;margin:10px 10px 0px 0px;"  src="<?php bloginfo('template_url'); ?>/images/thumbnail.png" alt="<?php the_title(); ?>" /></a>
				<?php endif; ?>	
				<?php the_content_limit(500, "<b>&#187;View More</b>"); ?>	
</div>

<div class="posthomebot"></div></div>

		<?php endwhile; ?>


</div>

<?php get_sidebar();?>

</div>

<?php wp_get_footer(); ?>
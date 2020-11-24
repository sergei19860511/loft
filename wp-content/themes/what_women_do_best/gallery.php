

<script type="text/javascript">
stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	panelbehavior: {speed:500, wraparound:true, persist:true},
	defaultbuttons: {enable: true, moveby: 2, leftnav: ['<?php bloginfo('template_url'); ?>/images/arrow.gif', -30, 50], rightnav: ['<?php bloginfo('template_url'); ?>/images/arrow.gif', 2, 50]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['external'] //content setting ['inline'] or ['external', 'path_to_external_file']
})

	
</script>


<div id="myslides">
<div id="mygallery" class="stepcarousel">
<div class="belt">
<?php 
	$slidecat = get_option('cine_gcat'); 
	$slidecount = get_option('cine_gno');
	
	$my_query = new WP_Query('category_name= '. $slidecat .'&showposts='.$slidecount.'');
while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>


<div class="panel">

<?php if( get_post_meta($post->ID, "slide", true) ): ?>
				    <a href="<?php the_permalink() ?>" rel="bookmark"><img style="width:190px;" src="<?php echo get_post_meta($post->ID, "slide", true); ?>" alt="<?php the_title(); ?>" /></a>

				<?php else: ?>
				   	<a href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php bloginfo('template_url'); ?>/images/slide.png" alt="<?php the_title(); ?>" /></a>
				<?php endif; ?>	
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

<?php endwhile; ?>

</div>
</div>
</div>

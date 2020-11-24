<?php wp_get_header(); ?>
<div id="film"></div>
<div id="pbody">

	<div id="content">			

<div class="post">
<div class="posttop"></div>
<div class="ptitle">
<h2 class="title"> Not found...</h2></div>
<div class="entry">
<p>
		<h3 class="center">You are looking for something that isn't here.</h3>
<h4 class="center"> Try searching again...</h4></p>
		<p><center><?php include(TEMPLATEPATH."/src_form.php");?> </center> <h4 class="center">or take a look at the Archives.</h4> <?php include(TEMPLATEPATH."/archives.php");?> </p>
	</div>
<div class="postbot"></div>
</div>
</div>
<?php get_sidebar();?>
</div>
<div id="featbot"></div>
<?php wp_get_footer(); ?>
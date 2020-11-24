<?php
/*
Template Name: Links
*/
?>
<?php wp_get_header(); ?>
<div id="pbody">

	<div id="content">
<div class="post">
<div class="posttop"></div>
<div class="ptitle"><h2 class="title">Links:</h2></div>
<div class="entry">
<ul>
<?php wp_list_bookmarks(); ?>
</ul></div>
<div class="postbot"></div>
</div> 
</div>
<?php get_sidebar();?>
</div>
<?php wp_get_footer(); ?>
<?php
/*
Template Name: Archives
*/
?>
<div style=" padding:20px">
<h4>Archives by Month:</h4>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
<h4>Archives by Subject:</h4>
	<ul>
		 <?php wp_list_categories('sort_column=name&title_li=&depth=999'); ?>
	</ul>
</div>
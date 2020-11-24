<div id="sidebar">

<div id="src">
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" value="Search: type and press Enter" name="s" id="searchh" onfocus="if (this.value == 'Search: type and press Enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search: type and press Enter';}" />
		</form> </div>

<?php include (TEMPLATEPATH . '/ads.php'); ?>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

<li>
<h2>Pages</h2>

			<ul>
			<?php wp_list_pages('title_li=&depth=3&sort_column=menu_order'); ?>
			</ul>

		</li>
<li>
<h2>Categories</h2>
			<ul>
				<?php wp_list_categories('sort_column=name&title_li=&depth=2'); ?>
			</ul>


		</li>

<li>

<h2> Sponsors</h2>
<ul>

<center><?php $ad_250 = get_option('wwdb_ad_250'); echo stripslashes($ad_250); ?></center>
	
</ul>


</li>

<li>

			
<h2>Recent Posts</h2>
			<ul>
				<?php wp_get_archives('type=postbypost&limit=10'); ?>
			</ul> 

</li>


		<li>

<h2>Archives</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>

	
		<li>

		
<h2>Blogroll</h2>
			<ul>
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>


		</li>
		<li>

		
<h2>Meta</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				
				<?php wp_meta(); ?>
				<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
			</ul>


		</li>
			
		<?php endif; ?>
		
	</div>
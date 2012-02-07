<?php if (!defined('IN_GS')) {die('you cannot load this page directly.');} ?>
<aside>

	<div class="side_column_box">
		<h3>Links</h3>
		<div class="news_section">
			<?php get_component('links'); ?>
		</div>  
	</div>

	<div class="side_column_box">

		<h3>Search</h3>
		<?php get_component('news-search'); ?>
	</div>
	
</aside>
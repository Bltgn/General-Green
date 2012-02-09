<?php 
/**
 * sidebar.inc.php The side bar.
 * 
 * @desc A theme for the GetSimple 3.0 CMS based on the theme General from http://www.templatemo.com
 * @package General Green
 * @author Guillaume Olivetti
 * @version 0.1 
 */
if (!defined('IN_GS')) {die('you cannot load this page directly.');} ?>
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
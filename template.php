<?php if (!defined('IN_GS')) {die('you cannot load this page directly.');}
/**
 *
 * @package		General Green
 * @version		0.1
 * @desc		A theme for the GetSimple 3.0 CMS, from http://www.templatemo.com
 * @author		Guillaume Olivetti
 *
 */
include('header.inc.php');
?>
<div class="main_content">    
	<div id="main_column">
		<article>
			<heading>
				<h2><?php get_page_title(); ?></h2>
			</heading>
			<?php get_page_content(); ?>
		</article>
	</div>
	
	<?php include('sidebar.inc.php'); ?>

</div>

<?php include('footer.inc.php'); ?>

<?php
/**
 * template.php The main theme file
 * 
 * @desc A theme for the GetSimple 3.0 CMS based on the theme General from http://www.templatemo.com
 * @package General Green
 * @author Guillaume Olivetti
 * @version 0.1 
 */
if (!defined('IN_GS')) { die('you cannot load this page directly.'); }
?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php get_page_clean_title(); ?>-<?php get_site_name(); ?></title>
		<?php get_header(); ?>
		<meta name="robots" content="index, follow">
		<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css">
		
		<?php if(GEN_GREEN_HTML5_SHIV) : ?>
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php endif; ?>
	</head>

	<body id="<?php get_page_slug(); ?>">
		<div class="container">
			<nav>
				<ul>
					<?php get_navigation(return_page_slug()); ?>
				</ul>
			</nav>

			<header>
				<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
					<?php if(GEN_GREEN_HEADER_SUBTITLE !== '') :
						echo '<h2>'.GEN_GREEN_HEADER_SUBTITLE.'</h2>';
					endif; ?>

				<div id="search_box">
				</div>
			</header>

			<div class="main_content">    
				<section>
					<article>
						<h2><?php get_page_title(); ?></h2>
						<?php get_page_content(); ?>
					</article>
				</section>

			<?php include('sidebar.inc.php'); ?>

			</div>

			<?php
			// Hidden till more content is made
			if(GEN_GREEN_FOOTER_FULL) : ?>
			<footer>

				<div class="footer_box m_right">
					<div class="footer_bottom"></div>

					<h4>Lorem ipsum dolor</h4>

					<div class="footer_box_content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et quam vitae ipsum vulputate varius vitae semper nunc.</p>
						<div class="cleaner_h10"></div>
						<ul class="list_01">
							<li><a href="#">Proin nec molestie ipsum</a></li>
							<li><a href="#">Curabitur ut mattis urna</a></li>
							<li><a href="#">Etiam luctus arcu at leo</a></li>
							<li><a href="#">Integer sit amet tortor vel diam </a></li>
						</ul>

						<div class="button_01"><a href="#">View All</a></div>
					</div>            

				</div>

				<div class="footer_box m_right">
					<div class="footer_bottom"></div>

					<h4>Maecenas urna lorem</h4>

					<div class="footer_box_content">
						<p>Morbi dictum semper varius. Quisque nec purus erat, vitae sodales urna. Integer aliquam sapien vitae turpis .</p>
						<div class="cleaner_h10"></div>
						<ul class="list_01">
							<li><a href="#">Nullam porttitor tellus ut turpis</a></li>
							<li><a href="#">Mauris lobortis nisl id lorem</a></li>
							<li><a href="#">Vivamus at mi a sem aliquet</a></li>
							<li><a href="#">Etiam tempus tellus eget est</a></li>
						</ul>
						<div class="button_01"><a href="#">View All</a></div>                
					</div>            

				</div>

				<div class="footer_box">
					<div class="footer_bottom"></div>

					<h4>Donec eleifend</h4>

					<div class="footer_box_content">
						<p>Integer bibendum quam sagittis neque consectetur eleifend. Integer feugiat magna sit amet leo rhoncus elementum.</p>
						<div class="cleaner_h10"></div>
						<ul class="list_01">
							<li><a href="#">Proin nec molestie ipsum</a></li>
							<li><a href="#">Vivamus ornare ornare leo</a></li>
							<li><a href="#">Nulla porta vehicula pulvinar</a></li>
							<li><a href="#">Duis ac eros quam</a></li>
						</ul>
						<div class="button_01"><a href="#">View All</a></div>                
					</div>            

				</div>

			</footer>
			<?php endif; ?>

			<footer class="footer_bar">
				Copyright © 2012 <a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
			</footer>

<?php get_footer(); ?>

		</div>
	</body>
</html>
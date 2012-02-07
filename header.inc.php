<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		heqder.inc.php
* @Package:		General Green
* @Action:		A theme for the GetSimple 3.0 CMS
*
*****************************************************/ 
?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php get_page_clean_title(); ?>-<?php get_site_name(); ?></title>
		<?php get_header(); ?>
		<meta name="robots" content="index, follow">
		<link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet" type="text/css">
	</head>

	<body id="<?php get_page_slug(); ?>">
		<div class="container">
			<nav id="templatemo_menu">
				<ul>
					<?php get_navigation(return_page_slug()); ?>
				</ul>
			</nav>

			<header>

				<heading>
					<h1>
						<a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
					</h1>
					<h2><?php echo BOLTGUN_HEADER_SUBTITLE; ?></h2>
				</heading>

				<div id="search_box">
				</div>

			</header>

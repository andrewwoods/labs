<!doctype html>
<?php
$lang_attributes = ' lang="en-US" ';

$icons_dir = "/library/icons/";
?>
<!--[if lt IE 7]><html <?php echo $lang_attributes; ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php echo $lang_attributes; ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php echo $lang_attributes; ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php echo $lang_attributes; ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">

	<?php // Google Chrome Frame for IE ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Offline Application | Andrew Woods</title>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo $icons_dir; ?>apple-icon-touch.png">
	<link rel="icon" href="<?php echo $icons_dir; ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo $icons_dir; ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f16c00">
	<meta name="msapplication-TileImage" content="<?php echo $icons_dir; ?>win8-tile-icon.png">

	<!-- Stylesheets and JS Libraries go here -->
	<link rel="stylesheet" href="library/css/style.css">
	<script src="library/js/form.js"></script>
	<script src="library/js/search.js"></script>
	<script src="library/js/offline.js"></script>
</head>

<body class="home ">
<div id="skip-nav" class="skip-nav">
	<a href="#main">Skip to content</a>
	<a href="#sidebar1">Skip to sidebar</a>
	<a href="#footer">Skip to footer</a>
</div>

<div id="container">
	<header class="header" role="banner">
		<div id="inner-header" class="wrap clearfix">
			<div id="logo">Company Name</div>
		</div>
	</header>

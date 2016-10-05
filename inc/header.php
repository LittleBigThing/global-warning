<?php defined('APP') or die('Cheatin\'?'); ?>

<?php $title = $_SERVER['REQUEST_URI'] ? ucwords( str_replace( '.php', ' ', strip_tags( basename( $_SERVER['REQUEST_URI'] ) ) ) ) : ''; ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if ( $title ) echo $title . ' |'; ?> Global Warming - Our time&rsquo;s ticking...</title>
	<meta name="description" content="Become conscious of global warming and commit to fight it">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon-32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon-16.png" sizes="16x16">
	<link rel="apple-touch-icon" href="apple-touch-icon.png" sizes="180x180">
	<link rel="stylesheet" href="css/main.css">
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
	<![endif]-->
</head>
<body>
	<div id="page">
		<a class="sr foc" href="#cont">Skip to content</a>
		<header role="banner">
			<p class="s-title"><a href="/" id="title" rel="home">Global Warning</a></p>
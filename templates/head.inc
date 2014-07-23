<!DOCTYPE html>
<html class=no-js>
  <head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <title><?php echo $page->get("headline|title"); ?></title>
    <meta name="description" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="//brick.a.ssl.fastly.net/Libre+Baskerville:400,700,400i">
<link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/screen.css">


    <script src="<?php echo $config->urls->templates?>scripts/modernizr.js"></script>
  </head>

  <body>
    <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- <header id="header-primary" class="header-primary"></header>
 -->
    <header>

	<nav>
		<h1><a href="<?php echo $config->urls->root ?>">Camille</a></h1>
		<ul class=main>

			<?php
			$homepage = $pages->get("/"); 
			$children = $homepage->children;
			//$children->prepend($homepage); 

			foreach($children as $child) {
				$class = $child === $page->rootParent ? " class='active'" : '';
				echo "<li><a$class href='{$child->url}'>{$child->title}</a></li>";
			}
			?>
		</ul>
		<div>
			<a class=mobile href=#></a>
		</div>
		<ul class=social>
			<li><a href="<?php echo $pages->get("/")->newsletter_link ?>"><span class=icon-social-envelope></span></a></li>
			<li><a href="<?php echo $pages->get("/")->twitter ?>"><span class=icon-social-twitter></span></a></li>
			<li><a href="<?php echo $pages->get("/")->facebook ?>"><span class=icon-social-facebook></span></a></li>
			<li><a href="<?php echo $pages->get("/")->youtube ?>"><span class=icon-social-youtube></span></a></li>
		</ul>
	</nav>

</header>
    
    <div id="container">
      <div id="guts">
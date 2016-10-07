<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<title>321 Gallery</title>
<link rel="stylesheet" type="text/css" href="normalize.css" />
<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

</head>

<body>
<div id="bgcontain">
	<div class="bg1">&nbsp;</div>
	<div class="bg2">&nbsp;</div>
</div>

<!-- NAVIGATION -->
<div id="nav">
	<div class="navhalf">
		<a href="/" class="linkitalic">CURRENT</a>
		<!-- hides child pages -->
		<?php $output = wp_list_pages( array(
    	'depth'    => 1,
    	'title_li' => '' . __( '', 'textdomain' ) . '</h2>'
		) );?>
	</div>
</div>

<div id="container">
	<section class="photos"> 
		<img src='<?php echo catch_that_image() ?>'>
	</section>

	<section class="text">
		<?php 
		$my_query = new WP_Query( 'category_name=homepage&posts_per_page=1' );
		while ( $my_query->have_posts() ) : $my_query->the_post();
		$do_not_duplicate = $post->ID; ?>
		<?php echo show_post_content() ?>
		<?php endwhile; ?>
	</section>
</div><!-- END Container -->

<!-- FOOTER -->
<div id="footer">
	<div id="footerhalf">
		<p>321 WASHINGTON AVE<br/>
		GARDEN LEVEL<br/>
		BROOKLYN NY, 11205<br/>
		OPEN SATURDAYS 12&ndash;5 PM<br/>
		<a href="mailto:321@321gallery.org" class="linkitalic">321@321GALLERY.ORG</a></p>
	</div>
</div>

</body>
</html>
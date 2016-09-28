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

</head>

<body>
<div id="iheader">
		<img src="images/321Gallery-h.png" class="iheader">
</div>


<div id="bgcontain">
	<div class="bg1">&nbsp;</div>
	<div class="bg2">&nbsp;</div>
</div>


<!-- NAVIGATION -->
<div id="nav">
	<div class="navhalf">
		<a href="/" class="linkitalic">CURRENT</a><?php wp_list_pages( '&title_li='); ?>
	</div>
</div>

<div id="container">
	<section class="photos">

	</section>

	<section class="text">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.center.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.swipe.js"></script>
<script src="http://malsup.github.io/ios6fix.js"></script>
</html>
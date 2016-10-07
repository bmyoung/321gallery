<?php 
function show_post_content() {
	if ( have_posts() ) : while ( have_posts() ) : the_post();
  	$content = get_the_content();
	$content = preg_replace("/<img[^>]+\>/i", "", $content); 		  
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]>', $content);
	echo $content;
	endwhile; endif; 
}?>

<!-- shows content -->

<?php 
  function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  return $first_img;
}?>

<!-- pulls image out of post and hides it from content -->




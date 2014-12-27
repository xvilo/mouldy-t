<?php
	/**
	* The template for displaying all pages
	*
	* This is the template that displays all pages by default.
	* Please note that this is the WordPress construct of pages and that
	* other 'pages' on your WordPress site will use a different template.
	*
	* @package WordPress
	* @subpackage Twenty_Fourteen
	* @since Twenty Fourteen 1.0
	*/

	get_header();
?>

<div class="container">
	<?php
	if (have_posts()):

    while (have_posts()):
    the_post();
	the_content();
    edit_post_link('Edit', '', '<strong>|</strong>');
	endwhile;
		
	else: ?>
		
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php include(TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
</div>
	<?php
	get_footer();
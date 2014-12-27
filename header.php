<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(''); ?></title>
    
    <?php wp_head(); ?>
    
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 
  </head>
  <body>
  <header>
	  <nav id="the-sticky-div">
		  <div class="container">
				<img class="logo" src="http://mouldy-t.nl/wp-content/uploads/2014/12/logo.jpg" alt="Mouldy-T Logo">
			  <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
		  </div>
	  </nav>
  </header>
  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php magneet_show_header(get_the_ID()); ?>"><div class="container"><h1><?php echo get_the_title() ?> </h1></div></div>
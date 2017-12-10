<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
	<header>
		<div class="container">
			<div class="logo">
				<h1>
					<a href="<?php echo home_url(); ?>">
						<!-- <img src="<?php echo get_template_directory_uri() ?>/assets/img/tastyburger-inline.svg" /> -->
						la gamelle
					</a>
				</h1>
			</div>
			<nav>
				<?php wp_nav_menu( array( 'menu' =>'primary', 'container' => false) ); ?>
			</nav>
			<div class="clear"></div>
		</div>
	</header>

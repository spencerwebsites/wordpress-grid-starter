<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header id="site-header" role="banner" class="wrapper">

			<?php if ( has_nav_menu( 'secondarymenu' ) ) : ?>

			<nav class="secondary-menu" role="navigation" aria-label="secondary navigation">

				<?php

				wp_nav_menu( array(
					'theme_location'	=> 'secondarymenu',
					'menu_id'        	=> 'secondarymenu',
					'container' 	 	=> '',
					'link_before' 		=> '<span class="link-text">',
       				'link_after' 		=> '</span>',
					'fallback_cb'    	=> false,
				) );

				?>

			</nav>

			<?php endif; ?>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link">

				<?php
				
				if ( has_custom_logo() ) :

					if ( is_home() || is_front_page() ):

						echo '<h1 class="bloginfo">' . get_custom_logo() . '</h1>';

					else :

						echo '<span class="bloginfo">' . get_custom_logo() . '</span>';

					endif;

				else :

					if ( is_home() || is_front_page() ):

						echo '<h1 class="bloginfo">' . get_bloginfo( 'name' ) . '</h1>';

					else :

						echo '<span class="bloginfo">' . get_bloginfo( 'name' ) . '</span>';

					endif;

				endif;
				
				?>

			</a>

			<?php if ( has_nav_menu( 'mainmenu' ) ) : ?>

				<nav class="main-menu" role="navigation" aria-label="main navigation">

					<?php

					wp_nav_menu( array(
						'theme_location'	=> 'mainmenu',
						'menu_id'        	=> 'mainmenu',
						'container' 	 	=> '',
						'link_before' 		=> '<span class="link-text">',
						'link_after' 		=> '</span>',
						'fallback_cb'    	=> false,
					) );

					?>

				</nav>

			<?php endif; ?>

		</header><!-- #site-header -->

		

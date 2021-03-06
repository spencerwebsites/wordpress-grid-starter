<?php

/**
 * The template for displaying single posts and pages.
 */

get_header();

?>

<main id="site-content" role="main" class="wrapper">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer(); ?>
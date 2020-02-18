<?php
/**
 * Displays the post header
 */

$entry_header_classes = '';

if ( is_singular() ) {
	$entry_header_classes .= ' header-footer-group';
}

?>

<header class="entry-header<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="entry-header-inner section-inner medium">

		<?php

		if ( is_singular() ) {

            the_title( '<h1 class="entry-title">', '</h1>' );
            
		} else {

            the_title( '<h2 class="entry-title heading-size-1"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
            
		}

		$intro_text_width = '';

		if ( is_singular() ) {

            $intro_text_width = ' small';
            
		} else {

            $intro_text_width = ' thin';
            
		}

		if ( has_excerpt() && is_singular() ) {

			?>

			<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
                
                <?php the_excerpt(); ?>

            </div>

			<?php
        }
        
		?>

	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->

<?php
/**
 * The template for displaying all single post or CPT entry.
 *
 * @package WPBBP
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<div id="main-content">
			<?php

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single' );
			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
get_footer();

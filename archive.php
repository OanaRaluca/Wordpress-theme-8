<?php


get_header(); ?>

<section id="primary" class="span8">

	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'the-bootstrap' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					else :
						_e( 'Blog Archives', 'the-bootstrap' );
					endif; ?>
				</h1>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}
			the_bootstrap_content_nav();
		else :
			get_template_part( '/partials/content', 'not-found' );
		endif;
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file archive.php */
/* Location: ./wp-content/themes/the-bootstrap/archive.php */

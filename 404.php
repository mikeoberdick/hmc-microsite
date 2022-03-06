<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper" id="error-404-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main">

					<h1>404</h1>
					<h2>Oops! Looks like you might be lost.</h2>
					<div class="links d-flex justify-content-around">
						<a href="/"><button role = "button" class = "btn white-button">Go Home</button></a>
						<a href="/services/"><button role = "button" class = "btn white-button">View Services</button></a>
						<a href="/contact-us"><button role = "button" class = "btn white-button">Contact Us</button></a>
					</div><!-- .links -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
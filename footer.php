<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php get_template_part( 'snippets/newsletter'); ?> 
<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<div id="wrapperFooter">
	<div class="container pt-4">
		<div class="row mb-3">
			<div class="col-md-10">
				<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => '',
							'container_id'    => 'footerMenuContainer',
							'menu_class'      => 'd-inline-flex list-unstyled mb-0',
							'fallback_cb'     => '',
							'menu_id'         => 'footerMenu',
							'depth'           => 1,
							'after'			  => '<span> |</span>',
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
			</div><!-- .col-md-10 -->
			<div class="col-md-2 d-flex justify-content-end align-items-center">
				<ul id = "socialMenu" class = "list-unstyled d-inline-flex justify-content-end">
					<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href=""><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></a></li>	

					<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href=""><i class="fa fa-lg fa-linkedin" aria-hidden="true"></i></a></li>

					<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="social-link"><a target="_blank" href=""><i class="fa fa-lg fa-youtube" aria-hidden="true"></i></a></li>
				</ul>
			</div><!-- .col-md-2 -->
		</div><!-- .row -->
		<div class="row mb-3">
			<div id="footerInfo" class = "col-sm-12">
				<div class = "left">
					<?php $img = get_field('footer_logo', 'options'); ?>
					<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div><!-- .left -->
				<div class="center">
					<p><?php echo get_field('address_line_1', 'options') . ', ' . get_field('address_line_2', 'options'); ?></p>
					<?php $phone = preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>
					<a href="tel:<?php echo $phone ?>"><?php the_field('phone_number', 'option'); ?></a>
					<div class = "wysiwyg"><?php the_field('hours', 'options'); ?></div>
				</div><!-- .center -->
				<div class="right">
					<?php $img = get_field('certification', 'options'); ?>
					<img src = "<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
				</div><!-- .right -->
			</div><!-- #footerInfo -->
		</div><!-- .row -->
	</div><!-- .container -->
	<footer id="colophon" class="site-footer text-center small">
		<p id="copyrightAndTerms">
			&copy; <?php echo date('Y') . ' ' . get_bloginfo( 'name' ) . '. All rights reserved. ' ?><a href="/terms-and-conditions">Terms & Conditions</a>
		</p>
		<p class = "mb-0">Website Designed & Developed by <a target = "_blank" href="https://pixelstrikecreative.com">Pixelstrike Creative</a></p>
	</footer><!-- #colophon -->
</div><!-- #wrapperFooter -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<?php if (is_page_template('templates/homepage.php')) : ?>
<script>
	jQuery(document).ready(function() {
  		jQuery('#heroSlider').slick({
  			arrows: false,
  			dots: true,
  			appendDots: jQuery('#heroDots'),
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    fade: true,
		    cssEase: 'ease-in-out'
  		});
	});
</script>
<?php endif; ?>

</body>

</html>
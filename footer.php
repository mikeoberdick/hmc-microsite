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
<a href="#hero" title="Scroll To Top" id="scroll_totop" style="opacity: 1; visibility: inherit;">
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15.983px" height="11.837px" viewBox="0 0 15.983 11.837" enable-background="new 0 0 15.983 11.837" xml:space="preserve"><path class="thb-arrow-head" d="M1.486,5.924l4.845-4.865c0.24-0.243,0.24-0.634,0-0.876c-0.242-0.243-0.634-0.243-0.874,0L0.18,5.481
c-0.24,0.242-0.24,0.634,0,0.876l5.278,5.299c0.24,0.241,0.632,0.241,0.874,0c0.24-0.241,0.24-0.634,0-0.876L1.486,5.924z"></path><path class="thb-arrow-line" d="M15.982,5.92c0,0.328-0.264,0.593-0.592,0.593H0.592C0.264,6.513,0,6.248,0,5.92c0-0.327,0.264-0.591,0.592-0.591h14.799
C15.719,5.329,15.982,5.593,15.982,5.92z"></path></svg>
</a>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
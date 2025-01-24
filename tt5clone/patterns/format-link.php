<?php
/**
 * Title: Link format
 * Slug: tt5clone-meetup-mataro/format-link
 * Categories: tt5clone_meetup_mataro_post-format
 * Description: A link post format with a description and an emphasized link for key content.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since tt5clone-meetup-mataro 1.0
 */

?>
<!-- wp:group {"className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-section-3" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
	<p style="font-style:normal;font-weight:700"><?php esc_html_e( 'The Stories Book, a fine collection of moments in time featuring photographs from Louis Fleckenstein, Paul Strand and Asahachi Kōno, is available for pre-order', 'tt5clone-meetup-mataro' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"fontSize":"medium","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group has-medium-font-size">
		<!-- wp:paragraph -->
		<p><a href="#"><?php esc_html_e( 'https://example.com', 'tt5clone-meetup-mataro' ); ?></a></p>
		<!-- /wp:paragraph -->
		</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

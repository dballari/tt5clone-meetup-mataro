<?php
/**
 * Title: Services, 3 columns
 * Slug: tt5clone-meetup-mataro/services-3-col
 * Categories: call-to-action, banner, services
 * Description: Three columns with images and text to showcase services.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since tt5clone-meetup-mataro 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Our services', 'tt5clone-meetup-mataro' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/campanula-alliariifolia-flower.webp" alt="<?php esc_attr_e( 'Image for service', 'tt5clone-meetup-mataro' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Collect', 'tt5clone-meetup-mataro' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'tt5clone-meetup-mataro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/delphinium-flowers.webp" alt="<?php esc_attr_e( 'Image for service', 'tt5clone-meetup-mataro' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Assemble', 'tt5clone-meetup-mataro' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'tt5clone-meetup-mataro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
			<figure class="wp-block-image size-full" style="margin-bottom:24px">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star-thristle-flower.webp" alt="<?php esc_attr_e( 'Image for service', 'tt5clone-meetup-mataro' ); ?>" style="aspect-ratio:4/3;object-fit:cover"/>
			</figure>
			<!-- /wp:image -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Deliver', 'tt5clone-meetup-mataro' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Like flowers that bloom in unexpected places, every story unfolds with beauty and resilience', 'tt5clone-meetup-mataro' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

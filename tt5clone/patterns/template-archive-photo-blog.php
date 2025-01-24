<?php
/**
 * Title: Photo blog archive
 * Slug: tt5clone-meetup-mataro/template-archive-photo-blog
 * Template Types: archive
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since tt5clone-meetup-mataro 1.0
 */

?>

<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:query-title {"type":"archive","textAlign":"center"} /-->
	<!-- wp:term-description {"textAlign":"center"} /-->
	<!-- wp:pattern {"slug":"tt5clone-meetup-mataro/template-query-loop-photo-blog"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->

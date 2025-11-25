<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<div class="page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	<?php endif; ?>
<main id="content" <?php post_class( 'site-main' ); ?>>
<div class="post-page-design">


	<div class="page-content">
	    <div class="f-image"> 	<?php 
			// ✅ Add featured image right below title
			if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail">
					<?php the_post_thumbnail( 'full' ); // You can use 'full', 'medium', etc. ?>
				</div>
			<?php endif; ?></div>
		<?php the_content(); ?>

		<?php wp_link_pages(); ?>

		<?php if ( has_tag() ) : ?>
			<div class="post-tags">
				<?php the_tags( '<span class="tag-links">' . esc_html__( 'Tagged ', 'hello-elementor' ), ', ', '</span>' ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
	<?php // Optional: remove this line if you don't want comment section ?>
	<?php // comments_template(); ?>

</main>

<?php
endwhile;

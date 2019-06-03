<?php

/**
 * Articles-grid Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Create id attribute allowing for custom "anchor" value.
$id = 'articles-grid-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'articles-grid';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

	<div class="container">

		<div class="articles-grid">
			<?php if ( have_rows( 'articles_grid' ) ) : ?>
				<?php while ( have_rows( 'articles_grid' ) ) : the_row(); ?>
					<div class="item">
						<?php $image = get_sub_field( 'image' ); ?>
						<?php if ( $image ) { ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php } ?>
						<h2><?php the_sub_field( 'title' ); ?></h2>
						<p><?php the_sub_field( 'description' ); ?></p>
						<a href="<?php the_sub_field( 'link' ); ?>">More</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>

	</div>

</div>
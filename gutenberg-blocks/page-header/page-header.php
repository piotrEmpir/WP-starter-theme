<?php

/**
 * Page header Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


// Create id attribute allowing for custom "anchor" value.
$id = 'page-header-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'page-header';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}



?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

	<div class="inner">
		<div class="container">
			<h1 style="color: <?php the_field('color'); ?>">
				<?php the_field('title'); ?>
			</h1>
		</div>
	</div>

	<?php $image = get_field( 'image' ); ?>

	<style>
		#<?php echo esc_attr($id); ?> .inner{
			background-image: url(<?php echo $image['url']; ?>);
		}
	</style>

</div>
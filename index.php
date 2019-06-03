<?php get_header(); ?>

<section class="main">

	<div class="container cols">
		<main>
			<?php
			if ( have_posts() ) :
			    while ( have_posts() ) : the_post();
			    ?>
					<article id="post-<?php the_ID();?>" <?php post_class('single_post content') ?>>
					<?php

						if(has_post_thumbnail()){
							the_post_thumbnail();
							the_post_thumbnail('mobile-thumbnail');
						}

					?>

			        <h2>
			        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </h2>
			        <?php the_content(); ?>
			    	</article>

				<?php
				endwhile; ?>


				<nav class="pagination">
					<?php
						if(function_exists('wp_pagenavi'))  wp_pagenavi();
						else posts_nav_link();
					?>
				</nav>

			<?php
			else :
			    _e( 'Sorry, no posts matched your criteria.', 'emp_wpst' );
			endif;
			?>
		</main>

		<?php get_sidebar(); ?>
	</div>

</section>

<?php get_footer(); ?>
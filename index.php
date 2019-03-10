<?php get_header(); ?>




<div class="container"><main>
	<?php
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post();
	    ?>

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

		<?php
		endwhile;

		posts_nav_link();

	else :
	    _e( 'Sorry, no posts matched your criteria.', 'emp_wpst' );
	endif;
	?>
	</main>


	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
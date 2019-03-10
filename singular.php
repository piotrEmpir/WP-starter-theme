<?php get_header(); ?>

<div class="container"><main>
	<?php
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post();
	    ?>

	        <article>
	        	<h1><?php the_title(); ?></h1>

				<?php

				if(has_post_thumbnail()){
					the_post_thumbnail();
					the_post_thumbnail('mobile-thumbnail');
				}

				?>

	        	<?php the_content(); ?>
	        </article>

		<?php
		endwhile;
		?>

		<nav>
			<?php previous_post_link(); ?>
			<?php next_post_link(); ?>
		</nav>
	<?php
	else :
	    _e( 'Sorry, no posts matched your criteria.', 'emp_wpst' );
	endif;
	?>
	</main>


	<?php get_sidebar(); ?></div>
<?php get_footer(); ?>
<?php get_header(); ?>

<section class="container">
	<?php
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post();
	    ?>

	        <article id="post-<?php the_ID();?>" <?php post_class('single_post') ?>>
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


	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
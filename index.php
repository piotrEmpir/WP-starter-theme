<?php get_header(); ?>

<section class="container">

	<?php
	if ( have_posts() ) :
	    while ( have_posts() ) : the_post();
	    ?>
			<article id="post-<?php the_ID();?>" <?php post_class('single_post') ?>>
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
		endwhile;

		posts_nav_link();

	else :
	    _e( 'Sorry, no posts matched your criteria.', 'emp_wpst' );
	endif;
	?>


	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
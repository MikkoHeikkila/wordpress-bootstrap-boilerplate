<?php get_header(); ?>

<div class="row">

	<div class="col-md-8">

		<?php if(have_posts()) : ?>
  
		   <?php while(have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_title('<h2>','</h2>'); ?>
			 		<?php the_content(); ?>

				</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>

</div>

<?php get_footer(); ?>
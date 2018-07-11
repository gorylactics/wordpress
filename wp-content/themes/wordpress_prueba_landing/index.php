<?php get_header(); ?>

<?php get_template_part('carousel'); ?>

<!-- the loop   -->
	<?php if(have_posts()): ?>
		<?php while(have_posts()): ?>
			<?php the_post(); ?>
		<div class="container">
			<div class="post">
				<h1 class="post__title"><?php the_title(); ?></h1>
				<div class="post__content"><?php the_content(); ?></div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
<!-- /the loop   -->

<?php get_footer(); ?>


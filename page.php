<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div>
		<h3><?php the_title(); ?></h2>
		<div>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			<?php edit_post_link('(e)', '<p>', '</p>'); ?>
		</div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>

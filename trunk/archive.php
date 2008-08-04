<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="indexcontent">

<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>				
	<h4 class="pagetitle">Archive for the '<?php echo single_cat_title(); ?>' Category</h4>
	
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h4 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h4>
	
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h4 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h4>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h4 class="pagetitle">Archive for <?php the_time('Y'); ?></h4>
	
	<?php /* If this is a search */ } elseif (is_search()) { ?>
	<h4 class="pagetitle">Search Results</h4>
	
	<?php /* If a tag page */ } elseif (is_tag()) { ?>
	<h4 class="pagetitle">Archive for the '<?php single_tag_title(); ?>' Tag</h4>
	
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h4 class="pagetitle">Author Archive</h4>

	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h3>Blog Archives</h3>

	<?php } ?>

		<?php while (have_posts()) : the_post(); ?>				
			<div class="archive">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<span><?php the_time('l, F jS, Y') ?></span>
				
				<div>
				 <?php the_stripped_content(); ?>
				</div>
		
				<p>
					Posted in <?php the_category(', ') ?> | 
					<?php edit_post_link('Edit','',' |'); ?>
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
					<?php the_tags('| Tags: ', ', ', ''); ?>
				</p> 
			</div>
	
		<?php endwhile; ?>
	<p>
		<span><?php posts_nav_link('','','&laquo; Previous Entries') ?></span>
		<span><?php posts_nav_link('','Next Entries &raquo;','') ?></span>
	</p>
	
<?php else : ?>

	<h3 class="center">Not Found</h3>


<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

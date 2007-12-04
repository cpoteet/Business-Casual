<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="indexcontent">


	<?php if (have_posts()) : ?>

		<h3>Search Results For "<?php echo wp_specialchars($s); ?>"</h3>

		<?php while (have_posts()) : the_post(); ?>				
			<div>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<span><?php the_time('l, F jS, Y') ?></span>
				
				<div>
				 <?php the_stripped_content(); ?>
				</div>
		
				<p>
					Posted in <?php the_category(', ') ?><strong>|</strong>
					<?php edit_post_link('Edit','','<strong>|</strong>'); ?>
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</p> 
				<hr />				
				<?php /* trackback_rdf(); */ ?>
			</div>
	
		<?php endwhile; ?>

		<div>
			<span><?php posts_nav_link('','','&laquo; Previous Entries') ?></span>
			<span><?php posts_nav_link('','Next Entries &raquo;','') ?></span>
		</div>
	
	<?php else : ?>

  <div>
    <h3>No Luck Stallion!</h3>
    <p>Try one of the links on the top or sidebar to find what you're looking for.</p>
    
  </div>
  
  <?php endif; ?>

</div>


<?php get_footer(); ?>

<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	

	

		<h3 class="single"><?php the_title(); ?></h3>
		<span> <img src="<?php bloginfo('template_directory'); ?>/images/date.gif" alt="Posted on <?php the_time('F jS, Y') ?>" /> <?php the_time('F jS, Y') ?> by <?php the_author_posts_link(); ?></span>
		<div>
			<?php the_content(); ?>
			<p id="meta">
				 <img src="<?php bloginfo('template_directory'); ?>/images/tag.gif" /> <?php the_category(', ') ?><br />
				<?php edit_post_link('Edit','',''); ?> You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed. 
				
				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Both Comments and Pings are open ?>
					<a href="<?php trackback_url(display); ?>">Trackback</a> from your own site.
				
				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
					// Only Pings are Open ?>
					Responses are currently closed, but you can <a href="<?php trackback_url(display); ?> ">trackback</a> from your own site.
				
				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Comments are open, Pings are not ?>
					You can skip to the end and leave a response. Pinging is currently not allowed.
	
				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
					// Neither Comments, nor Pings are open ?>
					Both comments and pings are currently closed.			
				
				<?php } /* edit_post_link('Edit this entry.','',''); */ ?>					
			</p>



		
	<?php comments_template(); ?>
	
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	
<?php endif; ?>
    </div>
<?php get_footer(); ?>

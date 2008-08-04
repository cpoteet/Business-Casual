<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="indexcontent">

 <?php $feature_post = get_posts( 'numberposts=1' ); ?>
 <?php if( $feature_post ) : ?>
  
 <div id="feature" class="post">
 <?php foreach( $feature_post as $post ) : setup_postdata( $post ); ?>
 <?php $feature_post_id = $post->ID; ?>
 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
 <div class="entry">
 <?php the_stripped_content(); ?>
 
 </div>
 <?php endforeach; ?>
 </div>
  
 <?php endif; ?>

<h3>Previous Posts</h3>

 <ul id="previousposts">
  
 <?php if (have_posts()) : ?>
  
 <?php while (have_posts()) : the_post(); ?>
  
 <?php if( $post->ID == $feature_post_id ) continue; ?>
  

 <li>
 <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
 <div class="date"><?php the_time('F jS, Y'); ?></div>
 </li>

  
 <?php endwhile; ?>
  
   </ul> 
 <?php else : ?>
  
 <div class="error">
 <h2>Not Found</h2>
 <p>Sorry, but you are looking for something that isn't here.</p>
 <?php include (TEMPLATEPATH . "/searchform.php"); ?>

  
 <?php endif; ?>

<?php get_footer(); ?>

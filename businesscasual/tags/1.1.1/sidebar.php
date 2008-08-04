
<div id="sidebar">

			

		<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>


		

		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>				
			<?php /* get_links_list(); */ ?>
			
			<h4><?php _e('Meta'); ?></h4>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>

		<?php } ?>
		<?php endif; ?>

	
	</div>


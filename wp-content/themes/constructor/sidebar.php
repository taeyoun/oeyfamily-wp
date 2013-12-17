<?php
/**
 * @package WordPress
 * @subpackage Constructor
 */
?>
<aside id="sidebar">
	<ul>
	    <?php 	    
	    // switch statement for widget place
	    switch (true) {
	        case (is_archive() && dynamic_sidebar('sidebar-categories')):
	            break;
http://oeyfamily.com/wp-admin/widgets.php	        case (is_page() && dynamic_sidebar('sidebar-pages')):
	            break;
	        case (is_single() && dynamic_sidebar('sidebar-posts')):
	            break;
            case (dynamic_sidebar('sidebar')):
	            break;
	        default:
	            ?>
	            <?php if (!is_404()) : ?>
        	    <li>
        			<?php get_search_form(); ?>
        		</li>
        		<?php endif; ?>
        		
        		<?php 
				$args = array(
					'depth'        => 0,
					'show_date'    => '',
					'date_format'  => get_option('date_format'),
					'child_of'     => '',
					'exclude'      => '41,50,59',
					'include'      => '',
					'title_li'     => '<h3>'.__('Cooking', 'constructor').'</h3>',
					'echo'         => 1,
					'authors'      => '',
					'sort_column'  => 'menu_order, post_title',
					'link_before'  => '',
					'link_after'   => '',
					'walker'       => '',
					'post_type'    => 'page',
        				'post_status'  => 'publish' );
				
				wp_list_pages($args); 
				//wp_list_pages('title_li=<h3>'.__('Cooking', 'constructor').'</h3>' );

				$args = array(
					'depth'        => 0,
					'show_date'    => '',
					'date_format'  => get_option('date_format'),
					'child_of'     => '',
					'exclude'      => '',
					'include'      => '41',
					'title_li'     => '<h3>'.__('Family Picture', 'constructor').'</h3>',
					'echo'         => 1,
					'authors'      => '',
					'sort_column'  => 'menu_order, post_title',
					'link_before'  => '',
					'link_after'   => '',
					'walker'       => '',
					'post_type'    => 'page',
        				'post_status'  => 'publish' );

				wp_list_pages($args);
				
				$args = array(
					'depth'        => 0,
					'show_date'    => '',
					'date_format'  => get_option('date_format'),
					'child_of'     => '',
					'exclude'      => '',
					'include'      => '50,59',
					'title_li'     => '<h3>'.__('Art&Craft', 'constructor').'</h3>',
					'echo'         => 1,
					'authors'      => '',
					'sort_column'  => 'menu_order, post_title',
					'link_before'  => '',
					'link_after'   => '',
					'walker'       => '',
					'post_type'    => 'page',
        				'post_status'  => 'publish' );

				wp_list_pages($args);

			?>
        
        		<?php wp_list_categories('show_count=1&title_li=<h3>'.__('Posts', 'constructor').'</h3>'); ?>

			
        		
                <li><h3><?php _e('Tags', 'constructor')?></h3>
            	    <?php if (function_exists('wp_tag_cloud')) { wp_tag_cloud('smallest=8&largest=18&number=40'); } ?>
        	   </li>
        
        		<?php /* If this is the frontpage */ if ( is_home() || is_page() ) : ?>
    			<li><h3><?php _e('Meta', 'constructor') ?></h3>
        			<ul>
        				<?php wp_register(); ?>
        				<li><?php wp_loginout(); ?></li>
        				<?php wp_meta(); ?>
        			</ul>
    			</li>
        		<?php endif; ?>
		
	            <?php
	            break;
	    }
	    ?>
	</ul>
</aside>
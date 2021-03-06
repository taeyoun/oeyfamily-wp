<?php
/**
 * @package WordPress
 * @subpackage Constructor
 */
?>
<?php get_header(); ?>
<div id="content" class="box shadow opacity <?php the_constructor_layout_class() ?>">
    <div id="container" >
        <article <?php post_class(); ?>>
            <h1 class="opacity box center"><a href="#" title="<?php _e('Error 404 - Not Found', 'constructor'); ?>"><?php _e('Error 404 - Not Found', 'constructor'); ?></a></h1>
            <p><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'constructor'); ?></p>
            <p><?php get_search_form() ?></p>
        </article>
    </div><!-- id='container' -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
    <?php get_constructor_sidebar(); ?>
</div><!-- id='content' -->
<?php get_footer(); ?>
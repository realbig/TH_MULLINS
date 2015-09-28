<?php
/**
 * Template Name: Landing Page
 *
 * The archives page template displays a conprehensive archive of the current
 * content of your website on a single page. 
 *
 * @package WooFramework
 * @subpackage Template
 */
 
 global $woo_options; 
 get_header();
?> 
    <div id="content" class="page col-full landing">
        <?php gravity_form(1, false, false, false, '', false); ?>
    	<?php //woo_main_before(); ?>
    
		<section id="main" class="col-left">
			
			<article <?php post_class(); ?>>
			    <?php $mr_title = get_the_title(); ?>
			    <header>
			    	<h1><?php echo do_shortcode( $mr_title ); ?></h1>
			    </header>
			    
			    <section class="entry fix">
		            
		            <?php woo_loop_before(); ?>
		            
		            <?php
		            	if ( have_posts() ) { the_post();
		            		the_content();
		            	}
		            ?>
				    
				    <?php woo_loop_after(); ?> 												  

				</section><!-- /.entry -->
			    			
			</article><!-- /.post -->                 
                
        </section><!-- /#main -->
        <span class="visit-site">Or <a href="<?php site_url(); ?>">proceed to our website</a> to learn more about what we do</span>
        <?php woo_main_after(); ?>
    </div><!-- /#content -->
		
<?php get_footer(); ?>
<?php
/**
 * Template Name: Feedback Page
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
    <div id="content" class="page col-full">
    
    	<?php woo_main_before(); ?>
    
		<section id="main" class="col-left">
			
			<article <?php post_class(); ?>>
			    
			    <header>
			    	<h1><?php the_title(); ?></h1>
			    </header>
			    
			    <section class="entry fix">
		            
		            <?php woo_loop_before(); ?>
		            
		            <?php
		            	if ( have_posts() ) { the_post();
		            		the_content();
		            	}
		            ?>																	  
				    <ul class="testimonials">											  
				        <?php
				        	query_posts( 'showposts=30&post_type=feedback' );
				        	if ( have_posts() ) {
				        		while ( have_posts() ) { the_post();
				        ?>
				            <?php $wp_query->is_home = false; 
				            $feedback_author = get_post_meta( $post->ID, 'feedback_author', true); ?>	  
				            <li><h2><?php the_title(); ?></h2>
				            	<?php the_time( get_option( 'date_format' ) ); ?>
				            	<p><?php the_content(); ?></p>
				            	<h4><?php echo $feedback_author; ?></h4>
				            </li>
				        <?php
				        		}
				        	}
				        	wp_reset_query();
				        ?>					  
				    </ul>	
				    
				    <?php woo_loop_after(); ?> 												  

				</section><!-- /.entry -->
			    			
			</article><!-- /.post -->                 
                
        </section><!-- /#main -->
        
        <?php woo_main_after(); ?>

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>
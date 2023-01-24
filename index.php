<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package human_appeal
 */

get_header();
?>


<!-- post page styleing now -->
    <section class="post-page">
        <div class="container">
            <div class="row">
            	<?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_format()) ?>
           		<?php endwhile; ?>
            </div>
            <div class="row">
            	  <div class="col-12">
                    <div class="pagination">
                    	<?php the_posts_pagination([
                    		'screen_reader_text'	=> '',
                    		'type'					=> 'list',
                    		'prev_text'				=> __('<i class="fa-sharp fa-solid fa-arrow-left"></i>','human-appeal'),
                    		'next_text'				=> __('<i class="fa-sharp fa-solid fa-arrow-right"></i>','human-appeal'),
                    	]); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post page styleing End now -->
    
  <?php get_footer(); ?>
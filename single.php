<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package human_appeal
 */

get_header();
?>
    <!-- post page styleing now -->
    <section class="post-single">
        <div class="container">
            <div class="row">
            	<?php while( have_posts()) : the_post(); ?>
                <div class="col">
                    <div class="single-post">
                        <div class="single-img">
                          	<?php the_post_thumbnail(); ?>
                        </div>
                        <div class="single-info">
                            <h2 class="mt-3 mb-2"><?php the_title(); ?></h2>
                            <strong>Date : <span>13/01/2023</span>, Time : <span> 12 : 00 PM </span></strong>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <div class="row">
            	<div class="col-lg-6">
            		<div class="single-page-com">
            			<?php comments_template() ?>
            		</div>
            	</div>
            </div>
        </div>
    </section>

    <!-- post page styleing End now -->
    


<?php
get_footer();


<!-- blog page by default content here -->
<div class="col-md-4">
    <div class="post-item">
        <div class="post-img">
        	<?php if(has_post_thumbnail()): ?>
          		<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
           	<?php endif; ?>
        </div>
        <div class="post-info">
            <h4><?php the_title(); ?></h4>
            <strong>Author : <?php the_author(); ?>, <?php the_time('D m, Y'); ?>, Time : <?php The_time('h:m:s'); ?></strong>
            <p><?php echo wp_trim_words(get_the_content(), 20, null) ?></p>
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>
</div>
<?php get_header(); ?>
<div class="container text-light">
    <h2>Newers & Insights</h2>
    <div class="row">
        <?php
        $query = new WP_Query(array('posts_per_page' => 10));
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4">
                    <div class="card mb-4 text-light">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="card-body text-light">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer(); ?>

<?php
/* Template Name: Services */
get_header(); ?>
<div class="container py-5 text-light">
    <h1 class="text-center">Our Services</h1>
    <div class="row">
        <?php
        $services = new WP_Query(array('post_type' => 'services'));
        if ($services->have_posts()) :
            while ($services->have_posts()) : $services->the_post(); ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
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

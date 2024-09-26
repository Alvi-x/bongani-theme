<?php get_header(); ?>
<div class="container text-light text-center">
    
    <section class="hero-blog">
    <h1 class="display-5 fw-semibold text-center">Newers & Insights</h1>
    </section>

    <section class="blog">
        <h3>Blog</h3>
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/blog.png" width="100%" alt="Kernel-Afrika-logo"></p>
    </section>

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

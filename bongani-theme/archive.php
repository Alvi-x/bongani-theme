<?php get_header(); ?>
<div class="container py-5 text-light">
    <h1 class="text-center">Newbies and Insights</h1>
    <div class="row">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
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
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>

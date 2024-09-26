<?php get_header(); ?>
<div class="container">
    <section class="hero text-center py-5" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/hero-image.jpg');">
        <p>welcome to</p>
        <h1>Your Security is Our Priority</h1>
        <p>Trust us to keep your data safe with our expert services and cutting-edge technology.</p>
    </section>

    <section class="partners py-5">
        <h2 class="text-center">Product Partners</h2>
        <div class="row">
            <!-- Use a dynamic loop or static content for partners -->
        </div>
    </section>

    <section class="services py-5">
        <h2 class="text-center">Our Services</h2>
        <div class="row">
            <!-- Dynamically display services using WordPress loop -->
        </div>
    </section>

    <section class="global-reach py-5">
        <h2 class="text-center">Global Reach</h2>
        <div class="map">
            <!-- Place the map image here -->
        </div>
    </section>
</div>
<?php get_footer(); ?>

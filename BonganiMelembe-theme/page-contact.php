<?php
/* Template Name: Contact */
get_header(); ?>
<div class="container py-5 text-light">
    <h1 class="text-center">Contact Us Now</h1>
    <div class="row">
        <div class="col-md-6 text-light">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control text-light" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control text-light" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control text-light" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <!-- Embed Google Maps iframe -->
        </div>
    </div>
</div>
<?php get_footer(); ?>

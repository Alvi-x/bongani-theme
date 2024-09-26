			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">
			<div class="container text-light">
				<hr class="m-5">
				<div class="row mx-5">
					<div class="col-md-4">
						<p><img src="<?php echo get_template_directory_uri(); ?>/assets/Kernel-Afrika-logo_1_350x.png" width="150" alt="Kernel-Afrika-logo"></p>
						<p>At Kernel Afrika, we are experts in cyber security, and through our association with global partners, we offer you the newest technology in cyber security products and services.</p>
					</div>
					<div class="col-md-2 col-sm-6 ml-2">
						<h5>About</h5>
						<ul class="list-unstyled">
							<li>Our Competition</li>
							<li>Channel</li>
							<li>Scale</li>
							<li>Watch Demo</li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-6">
						<h5>Products</h5>
						<ul class="list-unstyled">
							<li>Energy Logserver</li>
							<li>Yubico</li>
							<li>Elcomsoft</li>
							<li>Fudo</li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-6">
						<h5>Resources</h5>
						<ul class="list-unstyled">
							<li>Partners</li>
							<li>Developers</li>
							<li>Community</li>
							<li>Security</li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-6">
						<h5>Address</h5>
						<ul class="list-unstyled">
							<li>South Africa</li>
							<li>United Arab Emirates</li>
							<li>Ukraine</li>
						</ul>
					</div>
					<hr class="m-5">
					<div>
					<div class="row mx-5">
						<div class="col-md-6">
							<p><span class="copyright text-primary">Kernel-Afrika </span><?php printf( esc_html__( '&copy; %1$s Copyright Reserved', 'custom-wordpress-theme-for-flint-studio-technical-assessment' ), wp_date( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
						</div>
						<div class="col-md-6 mb-3 text-end">
							<a href="https://www.linkedin.com/company/your-company-link" target="_blank">
								<i class="fab fa-linkedin fa-2x"></i>
							</a>
						</div>
					</div>

					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'container'       => 'nav',
									'container_class' => 'col-md-6',
									//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
									'theme_location'  => 'footer-menu',
									'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
								)
							);
						endif;

						if ( is_active_sidebar( 'third_widget_area' ) ) :
					?>
						<div class="col-md-12">
							<?php
								dynamic_sidebar( 'third_widget_area' );

								if ( current_user_can( 'manage_options' ) ) :
							?>
								<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge bg-secondary"><?php esc_html_e( 'Edit', 'custom-wordpress-theme-for-flint-studio-technical-assessment' ); ?></a></span><!-- Show Edit Widget link -->
							<?php
								endif;
							?>
						</div>
					<?php
						endif;
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>

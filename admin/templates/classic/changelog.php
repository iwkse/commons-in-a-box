
		<div class="wrap about-wrap">
			<h1><?php printf( __( 'Welcome to Commons In A Box %s', 'commons-in-a-box' ), cbox_get_version() ); ?></h1>

			<div class="about-text" style="min-height:90px;"><?php printf( __( 'Thank you for updating to the latest version!', 'commons-in-a-box' ), cbox_get_version() ); ?></div>

			<div class="cbox-badge">
				<img src="<?php echo esc_url( cbox_get_package_prop( 'badge_url' ) ); ?>" srcset="<?php echo esc_url( cbox_get_package_prop( 'badge_url_2x' ) ); ?> 2x" alt="<?php esc_attr_e( 'Badge', 'commons-in-a-box' ); ?>" />
			</div>

			<h2 class="nav-tab-wrapper">
				<a href="<?php echo self_admin_url( 'admin.php?page=cbox&whatsnew=1' ); ?>" class="nav-tab nav-tab-active">
					<?php _e( 'What&#8217;s New', 'commons-in-a-box' ); ?>
				</a>
				<a href="http://commonsinabox.org/project-team" class="nav-tab" target="_blank">
					<?php _e( 'Credits', 'commons-in-a-box' ); ?>
				</a>
			</h2>

			<div class="changelog">
				<h3><?php _e( 'Under the Hood', 'commons-in-a-box' ); ?></h3>

				<div class="feature-section col two-col">

					<div class="last-feature">
						<li><?php esc_html_e( 'Compatibility with WordPress 5.8+ and BuddyPress 9.0+.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Fixed bug that could cause duplicate bbPress forums to be created for a group.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Fixed bug that prevented Pending forum topics from being viewed on the front end.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Add an admin email notification when a forum post is marked as Pending.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Improved behavior when restoring a forum topic from trash/spam.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Improve bbPress redirect behavior after CBOX installation.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Improved labels in theme options panel.', 'commons-in-a-box' ); ?></li>
					</div>
				</div>
			</div>

			<div class="changelog">
				<h3><?php esc_html_e( 'Plugin Updates', 'commons-in-a-box' ); ?></h3>

				<div class="feature-section">
					<ul>
						<li>BP Reply By Email 1.0-RC10</li>
						<li>BuddyPress 9.0.0</li>
						<li>BuddyPress Docs 2.1.6</li>
						<li>BuddyPress Docs Wiki 1.0.11</li>
						<li>External Group Blogs 1.6.2</li>
					</ul>
				</div>
			</div>

			<div class="changelog">
				<h3><?php esc_html_e( 'Theme Updates', 'commons-in-a-box' ); ?></h3>

				<div class="feature-section">
					<ul>
						<li><?php esc_html_e( 'Compatibility with BuddyPress 8.0.0 "selectable signu profile fields" feature.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Add highlighting to unread group forum threads.', 'commons-in-a-box' ); ?></li>
						<li><?php esc_html_e( 'Compatibility with BP bulk notifications management.', 'commons-in-a-box' ); ?></li>
					</ul>
				</div>
			</div>

			<div class="return-to-dashboard">
				<?php printf( __( '<a href="%s">Return to the CBOX dashboard &rarr;</a>', 'commons-in-a-box' ), self_admin_url( 'admin.php?page=cbox' ) ); ?>
			</div>

		</div>

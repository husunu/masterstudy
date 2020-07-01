<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

$theme = stm_get_theme_info();
$theme_name = $theme['name'];
?>
<div class="wrap about-wrap stm-admin-wrap  stm-admin-support-screen">
	<?php stm_get_admin_tabs('support'); ?>
	<div class="stm-admin-important-notice">

		<p class="about-description"><?php printf(__( '%s comes with 6 months of free support for every license you purchase. Support can be extended through subscriptions via ThemeForest.', 'masterstudy' ), $theme_name); ?></p>
		<p><a href="<?php echo stm_theme_support_url() . 'support/'; ?>" class="button button-large button-primary stm-admin-button stm-admin-large-button" target="_blank" rel="noopener noreferrer"><?php esc_attr_e( 'Create A Support Account', 'masterstudy' ); ?></a></p>
	</div>

	<div class="stm-admin-row">
		<div class="stm-admin-two-third">

			<div class="stm-admin-row">

				<div class="stm-admin-one-half">
					<div class="stm-admin-one-half-inner">
						<h3>
							<span>
								<img src="<?php echo stm_get_admin_images_url('ticket.svg'); ?>" />
							</span>
							<?php esc_html_e( 'Ticket System', 'masterstudy' ); ?>
						</h3>
						<p>
							<?php esc_html_e( 'We offer excellent 24/7 support through our advanced ticket system. To access the ticket system dashboard, please register with your purchase code.', 'masterstudy' ); ?>
						</p>
						<a href="<?php echo stm_theme_support_url() . 'support/'; ?>" target="_blank">
							<?php esc_html_e( 'Submit a ticket', 'masterstudy' ); ?>
						</a>
					</div>
				</div>

				<div class="stm-admin-one-half">
					<div class="stm-admin-one-half-inner">
						<h3>
							<span>
								<img src="<?php echo stm_get_admin_images_url('docs.svg'); ?>" />
							</span>
							<?php _e( 'Documentation', 'masterstudy' ); ?>
						</h3>
						<p>
							<?php printf(__( 'Our online documentaiton is a useful resource for learning the every aspect and features of %s.', 'masterstudy' ), $theme_name); ?>
						</p>
						<a href="<?php echo stm_theme_support_url() . 'manuals/masterstudy#'; ?>" target="_blank">
							<?php esc_html_e( 'Learn more', 'masterstudy' ); ?>
						</a>
					</div>
				</div>
			</div>

			<div class="stm-admin-row">

				<div class="stm-admin-one-half">
					<div class="stm-admin-one-half-inner">
						<h3>
							<span>
								<img src="<?php echo stm_get_admin_images_url('tutorials.svg'); ?>" />
							</span>
							<?php _e( 'Video Tutorials', 'masterstudy' ); ?>
						</h3>
						<p>
							<?php printf(__( 'We recommend you to watch video tutorials before you start the theme customization. Our video tutorials can teach you the different aspects of using %s.', 'masterstudy' ), $theme_name); ?>
						</p>
						<a href="https://youtu.be/QjQdVuxXieI" target="_blank">
							<?php esc_html_e( 'Watch Videos', 'masterstudy' ); ?>
						</a>
					</div>
				</div>

				<div class="stm-admin-one-half">
					<div class="stm-admin-one-half-inner">
						<h3>
							<span>
								<img src="<?php echo stm_get_admin_images_url('forum.svg'); ?>" />
							</span>
							<?php _e( 'Community Forum', 'masterstudy' ); ?>
						</h3>
						<p>
							<?php printf(__( 'Our forum is the best place for user to user interactions. Ask another %s user or share your experience with the community to help others.', 'masterstudy' ), $theme_name); ?>
						</p>
						<a href="<?php echo stm_theme_support_url() . 'forums/'; ?>" target="_blank">
							<?php esc_html_e( 'Visit Our Forum', 'masterstudy' ); ?>
						</a>
					</div>
				</div>

			</div>

		</div>

		<div class="stm-admin-one-third">
			<a href="https://stylemix.net/?utm_source=dashboard&utm_medium=banner&utm_campaign=masterstudy" target="_blank">
				<img src="<?php echo stm_get_admin_images_url('banner-1.png'); ?>" />
			</a>
		</div>
	</div>

</div>
<?php
$atts = vc_map_get_attributes($this->getShortcode(), $atts);
extract($atts);

$base_color = stm_option('secondary_color', '#48a7d4');
stm_module_styles('recent_courses', $style, array());
stm_module_scripts('recent_courses', 'style_1');

if (class_exists('STM_LMS_Templates')):

	$terms = get_terms('stm_lms_course_taxonomy', array(
		'hide_empty' => true,
		'parent'     => 0
	));

	$args = array(
		'per_row'      => 6,
		'include_link' => true
	);

	if (!empty($posts_per_page)) $args['posts_per_page'] = $posts_per_page;

	$nav_color = 'secondary_color';
	if ($style == 'style_2') $nav_color = 'primary_color';

	?>

    <div class="stm_lms_recent_courses"
         data-offset="1"
         data-template="courses/grid"
         data-args='<?php echo json_encode($args); ?>'>

        <div class="stm_lms_recent_courses__terms heading_font">
            <div class="stm_lms_recent_courses__term <?php echo esc_attr($nav_color); ?> active">
				<?php esc_html_e('All Categories', 'masterstudy'); ?>
            </div>
			<?php foreach ($terms as $term): ?>
                <div class="stm_lms_recent_courses__term <?php echo esc_attr($nav_color); ?>"
                     data-term="<?php echo intval($term->term_id); ?>">
					<?php echo wp_kses_post($term->name); ?>
                </div>
			<?php endforeach; ?>
        </div>


		<?php STM_LMS_Templates::show_lms_template('courses/grid', array('args' => $args)); ?>

        <div class="stm_lms_recent_courses__all text-center">
            <a href="<?php echo esc_url(STM_LMS_Course::courses_page_url()); ?>" class="btn btn-default"
               target="_blank">
				<?php esc_html_e('Show all', 'masterstudy'); ?>
            </a>
        </div>


    </div>
<?php endif;
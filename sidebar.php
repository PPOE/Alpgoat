<?php $options = get_option('scapegoat_theme_options'); ?>
<section id="sidebar" role="complementary">
	<h2 id="sidebar-title" class="visuallyhidden"><?php _e('Sidebar','scapegoat'); ?></h2>
	<?php if (function_exists('submenu') && $options['submenu-show']) { submenu(); } ?>
	<?php dynamic_sidebar('Main-Sidebar'); ?>
	<div class="clear"></div>
</section>
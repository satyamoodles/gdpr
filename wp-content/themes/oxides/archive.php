<?php
$blog_archive_pages_classes = oxides_edge_blog_archive_pages_classes(oxides_edge_get_default_blog_list());
?>
<?php get_header(); ?>
<?php get_template_part( 'title' ); ?>
<div class="<?php echo esc_attr($blog_archive_pages_classes['holder']); ?>">
	<?php do_action('oxides_edge_after_container_open'); ?>
	<div class="<?php echo esc_attr($blog_archive_pages_classes['inner']); ?>">
		<?php oxides_edge_get_blog(oxides_edge_get_default_blog_list()); ?>
	</div>
	<?php do_action('oxides_edge_before_container_close'); ?>
</div>
<?php get_footer(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php oxides_edge_wp_title(); ?>
    <?php
    /**
     * @see oxides_edge_header_meta() - hooked with 10
     * @see edgt_user_scalable - hooked with 10
     */
    ?>
	<?php do_action('oxides_edge_header_meta'); ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="top_header">
    <span class="contact_info">
            <i class="fa fa-phone"></i> 0124 436 8395
    </span>
    <span class="contact_info">
            <i class="fa fa-envelope"></i> info@oodlesstechnologies.com
    </span>
<?php echo do_shortcode( '[language_translate]' ); ?>
</div>
<?php oxides_edge_get_side_area(); ?>

<div class="edgtf-wrapper">
    <div class="edgtf-wrapper-inner">
        <?php oxides_edge_get_header(); ?>

        <?php if(oxides_edge_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='edgtf-back-to-top'  href='#'>
                <span class="edgtf-icon-stack">
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                </span>
            </a>
        <?php } ?>
        <?php oxides_edge_get_full_screen_menu(); ?>

        <div class="edgtf-content" <?php oxides_edge_content_elem_style_attr(); ?>>
            <div class="edgtf-content-inner">
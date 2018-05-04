<?php if($footer_top_border != '') {
	//Footer top border
	if($footer_top_border_in_grid !== '') { ?>
		<div class="edgtf-footer-ingrid-border-holder-outer">
	<?php } ?>
	<div class="edgtf-footer-top-border-holder <?php echo esc_attr($footer_top_border_in_grid); ?>" <?php oxides_edge_inline_style($footer_top_border); ?>></div>
	<?php if($footer_top_border_in_grid !== '') { ?>
		</div>
	<?php }
} ?>
<div class="edgtf-footer-top-holder" <?php echo oxides_edge_inline_style(oxides_edge_get_footer_side_padding()); ?>>
	<div class="edgtf-footer-top <?php echo esc_attr($footer_top_classes) ?>">
		<?php if($footer_in_grid) { ?>

		<div class="edgtf-container">
			<div class="edgtf-container-inner">

		<?php }

		switch ($footer_top_columns) {
			case 6:
				oxides_edge_get_footer_sidebar_25_25_50();
				break;
			case 5:
				oxides_edge_get_footer_sidebar_50_25_25();
				break;
			case 4:
				oxides_edge_get_footer_sidebar_four_columns();
				break;
			case 3:
				oxides_edge_get_footer_sidebar_three_columns();
				break;
			case 2:
				oxides_edge_get_footer_sidebar_two_columns();
				break;
			case 1:
				oxides_edge_get_footer_sidebar_one_column();
				break;
		}

		if($footer_in_grid) { ?>
			</div>
		</div>
	<?php } ?>
	</div>
</div>

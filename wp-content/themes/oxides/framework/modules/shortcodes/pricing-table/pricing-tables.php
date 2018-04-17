<?php
namespace EdgeOxidesfModules\PricingTables;

use EdgeOxidesfModules\Shortcodes\Lib\ShortcodeInterface;

class PricingTables implements ShortcodeInterface{
	private $base;
	function __construct() {
		$this->base = 'edgtf_pricing_tables';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {

		vc_map( array(
				'name' => esc_html__('Edge Pricing Tables', 'oxides'),
				'base' => $this->base,
				'as_parent' => array('only' => 'edgtf_pricing_table'),
				'content_element' => true,
				'category' => 'by EDGE',
				'icon' => 'icon-wpb-pricing-tables extended-custom-icon',
				'show_settings_on_create' => true,
				'params' => array(
					array(
						'type' => 'dropdown',
						'holder' => 'div',
						'class' => '',
						'heading' => 'Columns',
						'param_name' => 'columns',
						'value' => array(
							'One'       => 'edgtf-one-column',
							'Two'       => 'edgtf-two-columns',
							'Three'     => 'edgtf-three-columns',
							'Four'      => 'edgtf-four-columns',
						),
						'save_always' => true,
						'description' => ''
					)
				),
				'js_view' => 'VcColumnView'
		) );

	}

	public function render($atts, $content = null) {
		$args = array(
			'columns' => 'edgtf-two-columns'
		);
		
		$params = shortcode_atts($args, $atts);
		extract($params);
		
		$html = '<div class="edgtf-pricing-tables clearfix '.$columns.'">';
		$html .= oxides_edge_remove_wpautop($content);
		$html .= '</div>';

		return $html;
	}

}

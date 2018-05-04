<?php

/*** Gallery Post Format ***/

$gallery_post_format_meta_box = oxides_edge_add_meta_box(
	array(
		'scope' =>	array('post'),
		'title' => 'Gallery Post Format',
		'name' 	=> 'post-format-gallery-meta'
	)
);

oxides_edge_add_multiple_images_field(
	array(
		'name'        => 'edgtf_post_gallery_images_meta',
		'label'       => 'Gallery Images',
		'description' => 'Choose your gallery images',
		'parent'      => $gallery_post_format_meta_box,
	)
);

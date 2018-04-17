<?php

$seo_meta_box = oxides_edge_add_meta_box(
    array(
        'scope' => array('page', 'portfolio-item', 'post'),
        'title' => 'SEO',
        'name' => 'seo-meta'
    )
);


    oxides_edge_add_meta_box_field(
        array(
            'name' => 'edgtf_meta_title_meta',
            'type' => 'text',
            'default_value' => '',
            'label' => 'Meta Title',
            'description' => 'Enter custom title for this page',
            'parent' => $seo_meta_box
        )
    );

    oxides_edge_add_meta_box_field(
        array(
            'name' => 'edgtf_meta_keywords_meta',
            'type' => 'text',
            'default_value' => '',
            'label' => 'Meta Keywords',
            'description' => 'Add relevant keywords separated with commas',
            'parent' => $seo_meta_box
        )
    );

    oxides_edge_add_meta_box_field(
        array(
            'name'        => 'edgtf_meta_description_meta',
            'type'        => 'text',
            'label'       => 'Meta Description',
            'description' => 'Enter meta description for this page',
            'parent'      => $seo_meta_box
        )
    );
<?php if(oxides_edge_options()->getOptionValue('enable_social_share') == 'yes' && oxides_edge_options()->getOptionValue('enable_social_share_on_portfolio-item') == 'yes') : ?>
    <div class="edgtf-portfolio-social">
        <?php echo oxides_edge_get_social_share_html() ?>
    </div>
<?php endif; ?>
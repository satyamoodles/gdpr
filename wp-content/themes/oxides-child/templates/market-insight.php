<?php
/*
Template Name: Market Insight
*/
get_header();
?>
<div class="page-header mk_insight">
    <h3><?php echo the_title();?></h3>      
  </div>
<div class="container">

    
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <?php 
                $blogsperpage = get_query_var('paged');

                $market_posts = get_posts(array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'category'      => 0,
                    'paged'=>$blogsperpage
                ));
                $query = new WP_Query($market_posts);
               
                while($query -> have_posts()): $query ->the_post(); 
                    $date = strtotime($query->post_date);
                    
                    $actual_format = date('F-d-Y',$date);

                    $shotcodes_tags = array( 'vc_row', 'vc_column', 'vc_column', 'vc_column_text', 'vc_message' );

                    $replace_to = preg_replace( '/\[(\/?(' . implode( '|', $shotcodes_tags ) . ').*?(?=\]))\]/', ' ', $post->post_content );

                ?>
                <div class="col-md-4">
                    <div class="gdpr_blogs">
                        <div class="single_blog">
                            <div class="blog_img">
                                <img src="<?php echo get_the_post_thumbnail_url($query->ID);?>" alt="<?php echo $post->post_title; ?>">
                            </div>
                            <div class="blog_date_title">
                                <h3 class="title_gdpr_blog"><a href="<?php echo get_permalink($query->ID); ?>"><?php echo the_title(); ?></a></h3>
                                <h4 class="date_blog"><?php echo $actual_format; ?></h4>
                                
                            </div>
                            <div class="blog_data">
                            <?php echo mb_strimwidth($replace_to,0,120).'....';?>
                            </div>
                            <div class="read_more_blog">
                                <a href="<?php echo get_permalink($query->ID); ?>"> Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            <div class="row">
                
                            <ul class="pagination">
                                <li><?php echo paginate_links(array('total'=>$query->max_num_pages));?></a></li>
                            </ul>
                        
                </div>
            
            

        </div>
        <div class="col-md-3">
            <?php
                // A second sidebar for widgets, just because.
                if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
                    <aside class="edgtf-sidebar">    
                        <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                    </aside>  

            <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>
<?php
/* Template Name: Blogs
*/

get_header();?>


<div id="content" class="body-color">
    <section class="main-background">
        <div class="Insights">
        <h1 class="Insight-text">Get deep insights <br/ >into the ERP landscape</h1>
        </div>
    </section>
    <div class="container blog-pading">
        <div class="row maket-ins">
            <div class="col-lg-12">
            <?php
                                $blogsperpage=get_query_var('paged');
                                $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 9,
                                'paged'=>$blogsperpage
                             );
                        $query = new WP_Query($args);
                        if($query -> have_posts()){    
                             while($query -> have_posts()): $query ->the_post(); ?>      
                            
                                        
                <div class="col-md-4 market-inst-bottom">

                      <a href="<?php echo the_permalink(); ?>"  >
                    <div class="profile-card text-center">
                    <?php
                                    if ( ( function_exists('has_post_thumbnail') ) && ( has_post_thumbnail() ) ) 
                                    { 
                                           $post_thumbnail_id = get_post_thumbnail_id();
                                        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                                        ?>                       
                                            <img title="image title" alt="thumb image" class="img-responsive" src="<?php echo $post_thumbnail_url; ?>">                                    
                                    <?php } else {
                                            ?>
                                           <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/erp_assets/images/wallet.png" > 
                                        <?php 
                                    }
                                    ?>  
                         
                        <div class="profile-info clearfix">
                            <div class="insight-text"> <h2 class="hvr-underline-from-center"><?php echo the_title(); ?></h2></div>
                                <div class="market-text-blog">
                                <?php
                                                $string = strip_tags(get_the_content());
            
                                                if (strlen($string) > 130) {
        
                                                    // truncate string
                                                    $stringCut = substr($string, 0, 130);
            
                                                    // make sure it ends in a word so assassinate doesn't become ass...
                                                    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'..';
                                                  
                                                }
                                               
                                                    echo $string;
                                            
                                               
            
                                            ?> 
                                </div>
                                <div class="makt-button">
                                <a href="<?php echo the_permalink(); ?>"  class="read-mor">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endwhile;  }  ?>                     
                </div> 
             
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row pag">
                    <ul class="pagination">
                        <li><?php echo paginate_links(array('total'=>$query->max_num_pages));?></a></li>
                    </ul>
                </div>
            </div>
        </div>
 </div>
 </section>


<?php get_footer(); ?>
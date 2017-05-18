<?php get_header(); ?>
        <main id="main-content">
            <div class="container">
                <div class="category-page">
                    <div class="col-lg-8 mct">
                    <?php $queried_object = get_queried_object();
                      $idcat = $queried_object->term_id;
                      $parent = $queried_object->parent;
                      $catchid = get_category_children($idcat);                  
                     
                     ?>     
                      <?php if ( have_posts() ) :   ?>    
                        <h1 class="title-h1"><?php echo $current_category = single_cat_title("", false); ?></h1>
                        <div class="list-gr">
                        <?php  while ( have_posts() ) : the_post();   ?>
                            <div class="gr-box">
                               
                                 <a class="img-post col-lg-5" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('img-sm'); ?></a>
                                <div class="info-post col-lg-7">
                                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="meta-post">
                                        <span class="view"><i class="glyphicon glyphicon-eye-open"></i> <?php echo getPostViews(get_the_ID()); ?> </span><span class="date"> <i class="glyphicon glyphicon-calendar"></i> <?php echo get_the_date(); ?></span>
                                        </div>
                                    <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                                </div>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn btn-success">Xem thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                            <div class="clear"></div>
                            </div>
                        <?php endwhile; ?>         
                           
                            <div class="pagi-ct">                           
                           <?php wt_amaza_pagination(); ?>
                           <div class="clear"></div>
                          </div>
                          <div class="clear"></div>
                     
                     <?php else : ?>
                        <p><?php _e( 'Nội dung hiện tại đang được cập nhập.' ); ?></p>
                    <?php endif; ?>            
                        </div>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div><!--end container-->
        </main>
<?php  get_footer(); ?>

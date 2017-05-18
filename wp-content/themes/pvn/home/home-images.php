<div class="thuvienanh-box row">
                      <h2><span>Ảnh Phượt Đẹp</span></h2>
                      <ul class="tva-content row">
                       <?php 
            $args = array( 'post_type' => 'post','posts_per_page' => 5,'post_status'=> 'publish',
                 'tax_query' => array(
                    array(                
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array( 
                            'post-format-image',

                        ),
                        'operator' => 'IN'
                    )
                )             );
                        $the_query = new WP_Query( $args ); ?>

                        <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                         <li class="col-md-2">
                             <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('img-sml'); ?></a>
                             <h4>
                                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                             </h4>
                         </li>
                         <?php endwhile; ?>
               
                <?php wp_reset_postdata(); ?>
                     <?php endif; ?>                        
                          <li class="col-md-2">
                             <a href="<?php echo get_category_link(6); ?> " title="ảnh phượt">
                                <img src="<?php echo THEME_IMG_URI; ?>/anh.jpg" alt="">  
                             </a>                             
                            <span><a href="<?php echo get_category_link(6); ?> "  title="ảnh phượt">Xem thêm</a></span>
                             
                         </li>                   
                      </ul>
                </div>
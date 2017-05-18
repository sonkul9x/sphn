 <div class="archive-box">                    
    <h2><span>Tin tức mới nhất</span></h2>
    <div class="archive-content row">
    <?php    query_posts( array( 'post_type' => 'post','posts_per_page' => 7,'post_status'=> 'publish','orderby' => 'date','order' => 'desc',
            'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                   'post-format-video',
                   'post-format-image'
                
            ),
            'operator' => 'NOT IN'
        )
    )  
    )); ?> 
      <?php if ( have_posts() ) : ?>
           <?php $i=0; while ( have_posts() ) : the_post();$i++; ?>
        
        <?php if($i < 4){ ?>
            <div class="col-xs-12 col-ms-4 col-md-4 col-lg-4 post-lag">
            <div class="post-ctn">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('img-sm'); ?></a>
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
            </div>
        </div><!--end post-ctn-->
        <?php    }else{ ?>
            <div class="col-xs-12 col-ms-3 col-md-3 col-lg-3 post-small">
                <div class="post-ctn">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('img-sml'); ?></a>
                    <h4><a href="#"><?php the_title(); ?></a></h4>
                    
                </div>
            </div><!--end post-ctn-->

        <?php    } ?>
         <?php   endwhile; // end while ?>         
           <?php  endif; // end if
                                wp_reset_query(); ?> 
         
        <div class="clear"></div>
        
       <a class="readmore btn-success btn" href="#">Xem thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
        
    </div>
</div><!--END ACHIVE BOX-->
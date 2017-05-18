<div class="video-hot">                 
        <div class="video-content col-lg-8">
             <h2><span>Video Phượt</span></h2>
             <?php 
            $args = array( 'post_type' => 'post','posts_per_page' => 5,'post_status'=> 'publish',
                 'tax_query' => array(
        array(                
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 
                'post-format-video',

            ),
            'operator' => 'IN'
        )
    )             );
            $the_query = new WP_Query( $args ); ?>

            <?php if ( $the_query->have_posts() ) : ?>
        
                <!-- pagination here -->

                <!-- the loop -->
                <?php $j=0; while ( $the_query->have_posts() ) : $the_query->the_post(); $j++; ?>

                <?php $url = get_field('link_video');
                  preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);
                                 
                 if($j==1){  ?>
                <div class="col-lg-8 video-lag">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="https://i1.ytimg.com/vi/<?php  if (!empty($matches)) {
                        echo $matches[1];
                      } ?>/hqdefault.jpg" alt="<?php the_title(); ?>"></a>
                    <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                </div>
                <?php }elseif($j == 2){ ?>
                       <div class="col-lg-4 vd-sm">
                        <div class="video-small row">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="col-lg-6"><img src="https://i1.ytimg.com/vi/<?php  if (!empty($matches)) {
                        echo $matches[1];
                      } ?>/default.jpg" alt="<?php the_title(); ?>"></a>
                            <h4 class="col-lg-6"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                <?php }elseif($j == 3 || $j == 4 || $j == 5){ ?>
                <div class="video-small row">
                    <a class="col-lg-6" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="https://i1.ytimg.com/vi/<?php  if (!empty($matches)) {
                        echo $matches[1];
                      } ?>/default.jpg" alt="<?php the_title(); ?>"></a>
                    <h4 class="col-lg-6"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                </div>
                
                  <?php   } ?>
                
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>            
            </div>                    
        </div>
<div class="col-lg-4 diadiem-box">
         <h2><span>Địa điểm đi Phượt</span></h2>
         <ul class="list-group">
          <?php  query_posts( array( 'post_type' => 'post','posts_per_page' => 9,'post_status'=> 'publish','orderby' => 'date','order' => 'rand','cat' => 7)); ?>
            <?php if ( have_posts() ) : ?>
                 <?php  while ( have_posts() ) : the_post(); ?>
             <li class="list-group-item"><span class="glyphicon glyphicon-send"></span><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                  <?php  endwhile; // end while ?>     
            <?php  endif; wp_reset_query(); ?>               
          
         </ul>
    </div>
    
</div>
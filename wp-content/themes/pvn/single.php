<?php get_Header(); ?>
        <main id="main-content">
            <div class="container">
                <div class="single-page">
                    <div class="col-lg-8 mct">
                    <?php if ( have_posts() ) : ?>
                    <?php  while ( have_posts() ) : the_post(); ?>
                        <?php setPostViews(get_the_ID()); ?>                 
                    
                        <h1 class="title-h1"><?php the_title(); ?></h1>
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb('
                            <div class="breamcrum">','</div>
                            ');
                            }
                            ?>
                        <div class="ct-content">  
                         <?php $url = get_field('link_video');
                         if(isset($url) && !empty($url)){
                            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches); ?>
                        <iframe width="100%" height="425" src="https://www.youtube.com/embed/<?php  if (!empty($matches)) { echo $matches[1];} ?>" frameborder="0" allowfullscreen></iframe>
                        <?php } ?>
					         <?php the_content(); ?>	
                        </div>
                        <div class="row sk_socials text-left">					
		                    <div class="fb-share pull-left"><div class="fb-like" 
                                data-href="<?php the_permalink(); ?>" 
                                data-layout="standard" 
                                data-action="like" 
                                data-show-faces="true"  data-share="true">
                              </div></div>
		                    <div class="tw-share pull-left"><a class="twitter-share-button" href="<?php the_permalink(); ?>">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
		                    <div class="gg-share pull-left"><script src="https://apis.google.com/js/platform.js" async defer></script><div class="g-plusone" data-href="<?php the_permalink(); ?>" data-size="medium"></div></div>				                    
		                    <div class="clear"></div>               
	           		 </div>
                        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"  data-colorscheme="dark"></div>
                     <?php             
                                    endwhile; // end while ?>
                                     <?php  endif; // end if
                                wp_reset_query(); ?> 
                   
                   
                        <div class="bvlq-box row">
                    <?php $category = get_the_category();
                         $firstCategory = $category[0]->term_id;$id = get_the_ID();           
                       query_posts( array( 'post_type' => 'post','posts_per_page' => 6,'post_status'=> 'publish','orderby' => 'date','order' => 'rand','cat' => $firstCategory,'post__not_in'=>array($id))); ?>          
                          <?php if ( have_posts() ) : ?>
                        <h4>Bài viết liên quan</h4>
                        <ul>
                                <?php  while ( have_posts() ) : the_post(); ?>
                            <li class="col-lg-2">
                                 <?php $url = get_field('link_video');
                                 if(isset($url) && !empty($url)){
                            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches); ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="https://i1.ytimg.com/vi/<?php  if (!empty($matches)) {
                        echo $matches[1];} ?>/default.jpg" alt="<?php the_title(); ?>"></a>
                                <?php }else{ ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                    <?php 
                                    } ?>
                                <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h5>
                            </li>
                             <?php             
                                    endwhile; // end while ?>                            
                        </ul>
                        <?php  endif; // end if
                                wp_reset_query(); ?> 
                    </div>
                     </div><!--post relative box-->
                      <?php get_sidebar(); ?>
                    </div>

                </div>
            </div><!--end container-->
        </main>
<?php get_footer(); ?>
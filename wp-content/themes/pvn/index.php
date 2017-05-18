<?php get_header(); ?>
        <main id="main-content">
            <div class="container">
                <div class="row" id="search">
                    <?php get_search_form(); ?>
                </div>
               <?php get_template_part('home/home','cat'); ?>
               <?php get_template_part('home/home','archive' ); ?>
                <?php get_template_part('home/home','video' ); ?>
                <div class="clear"></div>
                <?php get_template_part('home/home','images' ); ?>
            </div><!--end container-->
        </main>
<?php get_footer(); ?>
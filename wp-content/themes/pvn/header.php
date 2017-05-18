<!DOCTYPE html>
<html lang="lang=" vi " prefix="og: http://ogp.me/ns# "">

<head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto+Condensed:300,400,700" rel="stylesheet"> 
    <?php wp_head(); ?> 
        
</head>

<body class="home blog">
    <div class="container-fluid">
        <header id="header">
            <div class="row top-header">
                <div class="container">
                    <a class="col-xs-12 col-sm-6" href="#"><img src="<?php echo THEME_IMG_URI; ?>/logo.png" alt=""></a>
                    <p class="col-xs-12 col-sm-6">Nói một cách đơn giản Phượt là một hình thức du lịch bụi. Là những chuyến đi, những cuộc hành trình đầy bụi bặm không có lịch trình không có kế hoạch cụ thể, chẳng có người dẫn đường, cũng chẳng có bất kỳ dịch vụ rườm rà nào, chỉ là đi bằng sự tò mò, niềm đam mê khám phá.</p>
                 </div>
            </div>
            <div class="row menu-header">         
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">MENU</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php bloginfo('home'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
                        </div>
                          <?php /* Primary navigation */
                                 wp_nav_menu( array(
                                   'theme_location' => 'main-menu', //Menu location của bạn
                                   'depth' => 2, //Số cấp menu đa cấp
                                   'container' => 'div', //Thẻ bao quanh cặp thẻ ul
                                   'container_class'=>'collapse navbar-collapse navbar-ex1-collapse', //class của thẻ bao quanh cặp thẻ ul
                                   'menu_class' => 'nav navbar-nav', //class của thẻ ul
                                   'walker' => new wp_bootstrap_navwalker()) //Cái này để nguyên, không thay đổi
                            );
                            ?>
                    </div>
                </nav>
            </div>          
        </header>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); wp_title('title');?></title>
    <?php wp_head();?>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

</head>

<body>

<div id="all">

    <header>

        <!-- *** TOP ***
_________________________________________________________ -->
        <div id="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 contact">
                        <p class="hidden-sm hidden-xs">Contact us on WhatsApp: <?php echo get_option('whatsup');?> or <?php echo get_option('email');?>.</p>
                        <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                    <div class="col-xs-7">

                    </div>

                </div>
            </div>
        </div>
</div>

<!-- *** TOP END *** -->

<!-- *** NAVBAR ***
_________________________________________________________ -->

<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">

        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo home_url();?>">
                    <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                    <img src="<?php bloginfo('template_url');?>/img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only"> go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-right">

                    <?php wp_nav_menu(array(
                        'theme_location' => 'header_menu',
                        'container' => '',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'menu_id'=> 'top-menu'

                    ));?>

                </ul>

            </div>
            <!--/.nav-collapse -->
            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>


    </div>
    <!-- /#navbar -->

</div>

<!-- *** NAVBAR END *** -->

</header>

<!-- *** LOGIN MODAL ***
_________________________________________________________ -->

<!-- *** LOGIN MODAL END *** -->
<?php $slider = new WP_Query(array('post_type' => 'slider', 'order' => 'ASC'));?>

<?php if( $slider->have_posts() ):?>
<section class="no-mb">
                <?php  while ( $slider->have_posts() ) : $slider->the_post(); ?>
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                    <div class="jumbotron" style="background: url('<?php echo $thumb['0'];?>') center center cover;">

                        <div class="dark-mask"></div>

                        <div class="container">
                            <div class="row mb-small">
                                <div class="col-sm-12 text-center">
                                    <h1><?php the_title();?></h1>
                                    <h2><?php the_content();?></h2>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-6 col-sm-push-3 clearfix">
                                    <a href="<?php echo  "#".get_post_meta( $post->ID, 'PRECIOS' ,true )  ;?>" class="scroll-to btn btn-template-transparent-black text-left" data-animate-hover="pulse"><?php echo  get_post_meta( $post->ID, 'PRECIOS' ,true )  ;?></a>
                                    <a href="<?php echo  "#".get_post_meta( $post->ID, 'CONTÁCTENOS' ,true )  ;?>" class="scroll-to btn btn-template-transparent-black text-right" data-animate-hover="pulse"><?php echo  get_post_meta( $post->ID, 'CONTÁCTENOS' ,true )  ;?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
</section>
<?php else: ?>
    <h1>Plase for slider</h1>
<?php endif;?>




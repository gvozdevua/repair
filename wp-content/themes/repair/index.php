<?php get_header();?>


<?php
$id =  3;
$posts_numbers = new WP_Query(array('cat' => $id,
    'meta_key' => 'ASC',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'));
?>
<?php if( $posts_numbers->have_posts() ):  ?>
    <section id="<?php echo mb_strtolower(get_cat_slug($id));?>" class="bar background-gray no-mb padding-big text-center-sm">
        <div class="container">
            <div class="row showcase">
    <?php while ( $posts_numbers->have_posts() ) : $posts_numbers->the_post();?>
        <div class="col-md-3 col-sm-6">
            <div class="item">
                <div class="icon"><i class="fa <?php echo get_post_meta( $post->ID, 'icon' ,true )  ;?>"></i>
                </div>
                <h4><span class="counter"><?echo the_content();?></span><br>

                    <?echo the_title();?></h4>
            </div>
        </div>
    <?php endwhile;?>
        </div>
        </div>

    </section>
<?php else: ?>
    <p>Добавьте к страницам \записям произвольное поле с необходимым заголовком для вывода на главную страницу</p>
    <p>Второе произвольное поле 'order'  - будт использовано для сортировки</p>
<?php endif;?>
<!--    POR QUE CON NOSOTROS?-->
<?php
    $id =  4;
    $posts_numbers = new WP_Query(array('cat' => $id,
    'meta_key' => 'ASC',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'));
    ?>
<?php if( $posts_numbers->have_posts() ):  ?>
    <section class="bar background-dark no-mb about-us" id="<?php echo mb_strtolower(get_cat_slug($id));?>">
        <div class="container">
            <div class="heading text-center">
                <h2 class="white-text"><?php echo get_cat_name( $id ) ?></h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 column zerif-rtl-big-title"><div class="big-intro" data-scrollreveal="enter left after 0s over 1s"><?php echo category_description($id );?></div></div>       <div class="col-lg-6 col-md-6 column zerif-rtl-skills ">

                    <ul class="skills" data-scrollreveal="enter right after 0s over 1s">
                <?php while ( $posts_numbers->have_posts() ) : $posts_numbers->the_post();?>
                    <li class="skill skill_1">
                        <div class="section-legend"><label for="garantia"><?echo the_title();?></label></div><p>
                            <?echo the_content();?></p>
                    </li>
                <?php endwhile;?>
                    </ul>
                </div>
            </div>

        </div>
    </section>
<?php else: ?>
    <p>Добавьте к страницам \записям произвольное поле с необходимым заголовком для вывода на главную страницу</p>
    <p>Второе произвольное поле 'order'  - будт использовано для сортировки</p>
<?php endif;?>





<?php
$id =  5;
$posts_numbers = new WP_Query(array('cat' => $id,
    'meta_key' => 'ASC',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'));
?>
<?php if( $posts_numbers->have_posts() ):  ?>
    <section id="<?php echo mb_strtolower(get_cat_slug($id));?>" class="bar background-pentagon no-mb testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2><?php echo get_cat_name( $id ) ?></h2>
                    </div>
                    <p class="lead"><?php echo category_description($id );?></p>
                    <!-- *** TESTIMONIALS CAROUSEL ***
_________________________________________________________ -->

                    <ul class="owl-carousel testimonials same-height-row">
                        <?php while ( $posts_numbers->have_posts() ) : $posts_numbers->the_post();?>

                            <li class="item">
                                <div class="testimonial same-height-always">
                                    <div class="text">
                                        <p><?echo the_content();?></p>
                                    </div>
                                    <div class="bottom">
                                        <div class="icon"><i class="fa fa-quote-left"></i>
                                        </div>
                                        <div class="name-picture">
                                            <?php the_post_thumbnail($posts_numbers->ID, array(60, 60));?>
<!--                                            <img class="" alt="" src="--><?//echo the_post_thumbnail();?><!--">-->
                                            <h5><?echo the_title();?></h5>
                                            <!-- <p>CEO, TransTech</p> -->
                                        </div>
                                    </div>
                                </div>
                            </li>

                        <?php endwhile;?>
                    </ul>
                    <!-- /.owl-carousel -->

                    <!-- *** TESTIMONIALS CAROUSEL END *** -->
                </div>

            </div>
        </div>
    </section>
<?php else: ?>
    <p>Добавьте к страницам \записям произвольное поле с необходимым заголовком для вывода на главную страницу</p>
    <p>Второе произвольное поле 'order'  - будт использовано для сортировки</p>
<?php endif;?>


<?php
$id_prc =  6;
$posts_price = new WP_Query(array('cat' => $id_prc,
    'meta_key' => 'ASC',
    'orderby' => 'meta_value_num',
    'order' => 'ASC'));
?>
<?php if( $posts_price->have_posts() ):  ?>
    <section id="<?php echo mb_strtolower(get_cat_slug($id_prc));?>" class="bar background-white no-mb" >
        <div class="container" data-animate="fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2><?php echo get_cat_name( $id_prc ) ?></h2>
                    </div>

                    <p class="lead"><?php echo category_description($id_prc );?></p>

                    <div class="row packages price">
                        <?php while ( $posts_price->have_posts() ) : $posts_price->the_post();?>
                        <?php if(get_post_meta( $post->ID, 'best' ,true )) :?>
                            <div class="col-md-2 nopadding">
                                <div class="best-value">
                                <div class="package best-value">

                                    <div class="package-header">
                                        <h5><?echo the_title();?></h5>
                                        <div class="meta-text">
                                            <?php echo get_post_meta( $post->ID, 'best' ,true );?>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="price-container">
                                            <h4><span class="currency"><?php echo get_post_meta( $post->ID, 'value' ,true );?></span><?php echo get_post_meta( $post->ID, 'price' ,true )  ;?></h4>
                                        </div>
                                    </div>
                                    <?echo the_content();?>
                                </div>
                            </div>
                            </div>
                        <?php else:?>
                            <div class="col-md-2 nopadding">

                                    <div class="package ">

                                        <div class="package-header light-gray">
                                            <h5><?echo the_title();?></h5>
                                        </div>
                                        <div class="price">
                                            <div class="price-container">
                                                <h4><span class="currency"><?php echo get_post_meta( $post->ID, 'value' ,true );?></span><?php echo get_post_meta( $post->ID, 'price' ,true )  ;?></h4>
                                            </div>
                                        </div>
                                        <?echo the_content();?>
                                    </div>
                                </div>
                        <?php endif;?>

                        <?php endwhile;?>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <p>Добавьте к страницам \записям произвольное поле с необходимым заголовком для вывода на главную страницу</p>
    <p>Второе произвольное поле 'order'  - будт использовано для сортировки</p>
<?php endif;?>

<?php
$id_prc =  7;
$posts_price = new WP_Query(array('cat' => $id_prc));

?>
<?php if( $posts_price->have_posts() ):  ?>
    <?php while ( $posts_price->have_posts() ) : $posts_price->the_post();?>
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <style>
            .bar.background-image-fixed-2 {
                background: url("<?php echo $thumb['0'];?>") center top no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
        <section id="<?php echo mb_strtolower(get_cat_slug($id_prc));?>" class="bar background-image-fixed-2 no-mb color-white text-center " >
            <div class="dark-mask"></div>
        <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="icon icon-lg"><i class="fa <?php echo get_post_meta( $post->ID, 'icon' ,true );?>"></i>
            </div>

            <h1><?echo the_title();?></h1>
            <p class="lead"><?echo the_content();?></p>
            <p class="text-center">
                <?php if(get_post_meta( $post->ID, 'btn' ,true )):?>
                <a href="#<?php echo get_post_meta( $post->ID, 'btn' ,true );?>" class="btn btn-template-transparent-black btn-lg"><?php echo get_post_meta( $post->ID, 'btn' ,true );?></a>
                <?php endif;?>
            </p>
        </div>
        </div>
        </div>
        </section>
    <?php endwhile;?>

    <?php else: ?>
    <p>Добавьте к страницам \записям произвольное поле с необходимым заголовком для вывода на главную страницу</p>
    <p>Второе произвольное поле 'order'  - будт использовано для сортировки</p>
    <?php endif;?>


<?php if( have_posts() ):?>
    <?php
    $front_id = get_option('page_on_front');
    $post_front = get_post($front_id);
    $title = $post_front->post_title;
    $title = apply_filters('the_title', $title);
    $title = str_replace(']]>', ']]>', $title);
    ?>
<section class="bar background-white no-mb text-center" id="<?php echo mb_strtolower($title);?>">
<div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="heading">
<!--                                <h2>CONTÁCTENOS</h2>-->

                                <h2><?echo $title;?></h2>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2 text-left">
                            <?php  while ( have_posts() ) : the_post(); ?>

                                <?php the_content();?>

                            <?php endwhile;?>
                        </div>
                        </div>
                    </div>
                </section>
<?php else: ?>
    <h1>Установите страницу на гравную</h1>
<?php endif;?>

<div class=" clearfix">
    <?php
    $my_id = 73;
    $post_id_5369 = get_post($my_id);
    $content = $post_id_5369->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
    echo $content;
    ?>
</div>

        <!-- *** GET IT ***
_________________________________________________________ -->
<?php
$id_prc =  8;
$posts_price = new WP_Query(array('cat' => $id_prc));

?>
<?php if( $posts_price->have_posts() ):  ?>

    <div id="get-it">
    <div class="container">

    <?php while ( $posts_price->have_posts() ) : $posts_price->the_post();?>
        <div class="col-md-8 col-sm-12">
            <h3><?php the_title();?></h3>
        </div>
        <div class="col-md-4 col-sm-12">
            <h3><i class="fa <?php echo get_post_meta( $post->ID, 'icon' ,true );?>" aria-hidden="true"></i><?php echo get_option('whatsup');?></h3>
        </div>
    <?php endwhile;?>
    </div>
    </div>

<?php else: ?>
    <p>Добавьте к страницам \записям произвольное поле с необходимым заголовком для вывода на главную страницу</p>
    <p>Второе произвольное поле 'order'  - будт использовано для сортировки</p>
<?php endif;?>




        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->


<?php get_footer();?>
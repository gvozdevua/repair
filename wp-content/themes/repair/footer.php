
<footer id="footer">
    <div class="container">
        <div class="col-md-3 col-sm-6">
            <?php if(!dynamic_sidebar('about_me')):?>
            <?php endif;?>

            <hr>


            <hr class="hidden-md hidden-lg hidden-sm">

        </div>

        <div class="col-md-3 col-sm-6">
            <?php
            $id =  get_cat_ID('TESTINOMIO');
            $posts_numbers = new WP_Query(array('cat' => $id,
                'meta_key' => 'ASC',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'posts_per_page' => 3));
            ?>
            <?php if( $posts_numbers->have_posts() ):  ?>
                <h4><?php echo get_cat_name($id);?></h4>
            <div class="blog-entries">
            <?php while ( $posts_numbers->have_posts() ) : $posts_numbers->the_post();?>
                <div class="item same-height-row clearfix">
                    <div class="image same-height-always">
                        <a href="#">
                            <?php
                            $attr = array(
                                'src' => $src,
                                'class' => "img-responsive",
                                'alt' => trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )),
                            );

                            $thumb = get_the_post_thumbnail($posts_numbers->ID, array(60, 60), $attr);

                            echo ($thumb);
                            ?>

                        </a>
                    </div>
                    <div class="name same-height-always">
                        <h5><a href="#"><?echo the_content();?></a></h5>
                    </div>
                </div>
            <?php endwhile;?>
                <hr class="hidden-md hidden-lg">
            </div>
            </div>
            <?php else: ?>
                <p>Добавьте к страницам \записям произвольное поле с необходимым заголовком для вывода на главную страницу</p>
                <p>Второе произвольное поле 'order'  - будт использовано для сортировки</p>
            <?php endif;?>

        <div class="col-md-3 col-sm-6">

            <?php if(!dynamic_sidebar('office')):?>
            <?php endif;?>
            <hr class="hidden-md hidden-lg hidden-sm">

        </div>



        <div class="col-md-3 col-sm-6">
            <?php if(!dynamic_sidebar('contact')):?>
            <?php endif;?>

                <br>Email: <?php echo get_option('email');?>
                <br>WatsUp: <?php echo get_option('whatsup');?>

        </div>
    </div>
</footer>
<!-- /#footer -->

<!-- *** FOOTER END *** -->

<!-- *** COPYRIGHT ***
_________________________________________________________ -->

<div id="copyright">
    <div class="container">
        <div class="col-md-12">
            <p class="pull-left">&copy; 2017 ExmoFix. All righs reserved</p>

            </p>

        </div>
    </div>
</div>
<!-- /#copyright -->

<!-- *** COPYRIGHT END *** -->



</div>

<?wp_footer()?>
</body>

</html>
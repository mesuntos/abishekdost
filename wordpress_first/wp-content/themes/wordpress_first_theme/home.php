<?php /* Template Name: Home Template */?>
<?php get_header(); ?>
<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">

                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                            <span>HI, MY NAME IS <?php echo of_get_option('name'); ?> & I AM A</span><br>
                            <span class="cd-words-wrapper">
                                    <b class="is-visible"><?php echo of_get_option('title'); ?></b>
                                <!--                                    <b>DEVELOPER</b>-->
                                <!--                                    <b>FATHER</b>-->
                                </span>
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        <?php echo of_get_option('head_desc'); ?>
                    </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works" >View Works</a>

                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->
<!--
==================================================
Slider Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <?php $wp_query = new WP_Query(); $wp_query->query('showposts=1'.'&cat=6');

            while ($wp_query->have_posts()) : $wp_query->the_post();?>
            <div class="col-md-6 col-sm-6">

                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">


                   <?php
                    echo '<div class="entry-content">';?>
                    <h2><?php the_title();?></h2>
                    <?php the_content('<span class="read_more">read more</span>');
                    echo '</div>';
                     ?>



                </div>


            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">

                     <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
            </div>
            <?php endwhile; ?>

        </div>
    </div>
</section> <!-- /#about -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Latest Works</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                <?php echo of_get_option('latest_work_desc'); ?>
            </p>
        </div>
        <div class="row">
            <?php $wp_query = new WP_Query(); $wp_query->query('showposts=6'.'&cat=7');

            while ($wp_query->have_posts()) : $wp_query->the_post();?>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="<?php the_post_thumbnail_url();?>" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php the_post_thumbnail_url();?>">Demo</a>
                                <a target="_blank" href="single-portfolio.html">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                <?php the_title();?>
                            </a>
                        </h4>
                        <p>
                            <?php the_content();?>
                        </p>
                    </figcaption>
                </figure>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section> <!-- #works -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Offer From Me</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                <?php echo of_get_option('offer_desc'); ?>
            </p>
        </div>

        <div class="row">
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-flask-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"> <?php echo of_get_option('offer_title_1'); ?></h4>
                        <p> <?php echo of_get_option('offer_detail_1'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo of_get_option('offer_title_2'); ?></h4>
                        <p><?php echo of_get_option('offer_detail_2'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo of_get_option('offer_title_3'); ?></h4>
                        <p><?php echo of_get_option('offer_detail_3'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-americanfootball-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo of_get_option('offer_title_4'); ?></h4>
                        <p><?php echo of_get_option('offer_detail_4'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-keypad-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo of_get_option('offer_title_5'); ?></h4>
                        <p><?php echo of_get_option('offer_detail_5'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo of_get_option('offer_title_6'); ?></h4>
                        <p><?php echo of_get_option('offer_detail_6'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->

<!--
==================================================
Call To Action Section Start
================================================== -->
<?php get_footer();
?>


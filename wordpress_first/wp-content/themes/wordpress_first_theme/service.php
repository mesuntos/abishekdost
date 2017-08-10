<?php /* Template Name: Service Template */?>
<?php get_header();
?>
<!--
      ==================================================
          Global Page Section Start
      ================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Service</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->


<!--
==================================================
    Service Page Section  Start
================================================== -->
<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">What We Love To Do</h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo of_get_option('what_we_do'); ?></p>
                    <div class="row service-parts">
                        <?php $wp_query = new WP_Query(); $wp_query->query('showposts=4'.'&cat=14');

                        while ($wp_query->have_posts()) : $wp_query->the_post();?>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                <i class="ion-ios-paper-outline"></i>
                                <h4><?php the_title();?></h4>
                                <p><?php the_content();?></p>
                            </div>
                        </div>
                        <?php endwhile;?>
                        </div>

                    </div>
                </div>
            <div class="col-md-6">
                <div class="block">
                    <img class="img-responsive" src="<?php echo of_get_option('service-img'); ?>" alt="">
                </div>
            </div>
            </div>

        </div>
    </div>
</section>


<!--
==================================================
    Works Section Start
================================================== -->
<section class="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Some Of Our Features Works</h2>
        <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo of_get_option('feature_works');?></p>
        <div class="row">
            <?php $wp_query = new WP_Query(); $wp_query->query('showposts=4'.'&cat=7');

            while ($wp_query->have_posts()) : $wp_query->the_post();?>
            <div class="col-sm-3">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="<?php the_post_thumbnail_url();?>" class="img-responsive" alt="this is a title" >
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php the_post_thumbnail_url();?>">Demo</a>
                                <a target="_blank" href="">Details</a>
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


            <?php endwhile;?>

        </div>
    </div>
</section>
<!--
==================================================
    Clients Section Start
================================================== -->
<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s"> <?php echo of_get_option('happy_clients_desc');?></p>
                <div id="clients-logo" class="owl-carousel">
                    <?php $wp_query = new WP_Query(); $wp_query->query('showposts=10'.'&cat=12');

                    while ($wp_query->have_posts()) : $wp_query->the_post();?>
                    <div>
                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();
?>



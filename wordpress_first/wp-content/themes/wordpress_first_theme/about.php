<?php /* Template Name: About Template */ ?>
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
                    <h2>About Company</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
==================================================
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">

            <?php $wp_query= new WP_Query();
            $wp_query->query('showposts=1'.'&cat=9');
            while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><?php the_title(); ?></h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                       <?php the_content();?>
                    </p>

                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>


<!--
==================================================
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <?php
            $wp_query=new WP_Query();
            $wp_query->query('showposts=3'.'&cat=10');
            while ($wp_query->have_posts()): $wp_query->the_post();
            ?>
            <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>


<!--
==================================================
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center">Meet The Team</h2>
            <?php
            $wp_query= new WP_Query();
            $wp_query->query('showposts=4'.'&cat=11');
            while($wp_query->have_posts()): $wp_query->the_post();
                ?>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="<?php the_post_thumbnail_url();?>" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name"><?php the_title();?></h3>
                    <p class="team_designation"> <?php the_category(); ?></p>
                    <p class="team_text"><?php the_content(); ?></p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>



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
                <h2 class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                <p class="subtitle-des text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s"><?php echo of_get_option('happy_clients_desc'); ?></p>
                <div id="clients-logo" class="owl-carousel">
                    <?php
                    $wp_query= new WP_Query();
                    $wp_query->query('showposts=5'.'&cat=12');
                    while($wp_query->have_posts()): $wp_query->the_post();
                    ?>
                    <div>
                        <img src="<?php  the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <?php endwhile;?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();
?>

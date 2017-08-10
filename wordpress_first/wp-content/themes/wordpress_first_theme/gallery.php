<?php /* Template Name: Gallery Template */?>
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
                    <h2>Gallery</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="row">
<?php $wp_query = new WP_Query(); $wp_query->query('showposts=6'.'&cat=13');

while ($wp_query->have_posts()) : $wp_query->the_post();?>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="  <?php the_post_thumbnail_url();?>" class="img-responsive" alt="this is a title">

                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php the_post_thumbnail_url();?>">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>

        <?php endwhile;?>
        </div>
    </div>
</section>

<?php get_footer();
?>
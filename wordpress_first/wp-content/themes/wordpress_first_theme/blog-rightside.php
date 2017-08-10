<?php /* Template Name: Blog-right-side Template */?>
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
                    <h2>Blog With Right Sidebar</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section><!--/#Page header-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php $wp_query = new WP_Query(); $wp_query->query('showposts=3'.'&cat=16');

while ($wp_query->have_posts()) : $wp_query->the_post();?>
                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="post-fullwidth.html"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" alt="" /></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                            <a href="post-fullwidth.html"><?php the_title();?></a>
                        </h2>
                        <div class="blog-meta">
                            <span><?php the_date(); ?></span>
                            <span>by <a href=""><?php the_author(); ?> </a></span>
                            <span><a href="">business</a>,<a href="">people</a></span>
                        </div>
                        <p> <?php the_excerpt();?></p>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>

                </article>


                <?php endwhile; ?>
            </div>
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="search widget">
                        <form action="" method="get" class="searchform" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"> <i class="ion-search"></i> </button>
                                            </span>
                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <div class="author widget">
                        <img class="img-responsive" src="<?php echo of_get_option('cover_img');?>">
                        <div class="author-body text-center">
                            <div class="author-img">
                                <img src="<?php echo of_get_option('profile_img');?>">
                            </div>
                            <div class="author-bio">
                                <h3><?php echo of_get_option('bloger_name');?></h3>
                                <p><?php echo of_get_option('bloger_desc');?></p>
                            </div>
                        </div>
                    </div>
                    <div class="categories widget">
                        <h3 class="widget-head">Categories</h3>
                        <ul>
                            <li>
                                <a href="">Audio</a> <span class="badge">1</span>
                            </li>
                            <li>
                                <a href="">Gallery</a> <span class="badge">2</span>
                            </li>
                            <li>
                                <a href="">Image</a> <span class="badge">4</span>
                            </li>
                            <li>
                                <a href="">Standard</a> <span class="badge">2</span>
                            </li>
                            <li>
                                <a href="">Status</a> <span class="badge">3</span>
                            </li>
                        </ul>
                    </div>

                    <div class="recent-post widget">
                        <h3>Recent Posts</h3>

                        <ul>
                            <li>
                                <a href="#">Corporate meeting turns into a photoshooting.</a><br>
                                <time>16 May, 2015</time>
                            </li>
                            <li>
                                <a href="#">Statistics,analysis. The key to succes.</a><br>
                                <time>15 May, 2015</time>
                            </li>
                            <li>
                                <a href="#">Blog post without image, only text.</a><br>
                                <time>14 May, 2015</time>
                            </li>
                            <li>
                                <a href="#">Blog post with audio player. Share your creations.</a><br>
                                <time>14 May, 2015</time>
                            </li>
                            <li>
                                <a href="#">Blog post with classic Youtbube player.</a><br>
                                <time>12 May, 2015</time>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
</section>
<?php get_footer();?>
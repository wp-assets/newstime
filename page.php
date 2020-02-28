<?php 
// Theme Header
get_header();
?>
<!-- Slider Template -->
<?php get_template_part('template-part/main-slider', 'slider');?>

    <!-- News Headline Container -->
    <div class="news-bar white-bg">
        <div class="container">
            <div class="row">

                <!-- news -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 r-full-width">
                    <div class="headline-wrap">

                        <span class="badge">just in</span>

                        <!-- news ticker -->
                        <div id="ticker">
                            <div class="clip">
                                <div class="today">
                                    <ul>

                                    <?php if(have_posts()) : while(have_posts()): the_post();?>
                                        <li><?php the_title(); ?></li>
                                    <?php endwhile; endif;?>
                                    <?php wp_reset_query();?>
                                    </ul>
                                </div>
                              </div>
                        </div>
                        <!-- news ticker -->

                        <!-- ticker spinner -->
                        <div class="alert-spinner">
                            <div class="double-bounce1"></div>
                            <div class="double-bounce2"></div>
                        </div>
                        <!-- ticker spinner -->

                    </div>
                </div>
                <!-- news -->

                <!-- time clock -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 r-full-width">  
                    <div class="time-clock">                  
                        <div id="clock"></div>
                    </div>
                </div>
                <!-- time clock -->

                <!-- Wheather forecast -->
                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                    <div class="weather-holder">
                        <img src="images/cloud.png" alt="">
                        <span class="weather-state">Cloudy USA, Natha</span>
                        <span class="temp"><i class="fa fa-plus"></i> 18<sup>0</sup> C</span>
                    </div>
                </div>
                <!-- Wheather forecast -->
                
            </div>
        </div>
    </div>
    <!-- News Headline Container -->


    <!-- Main Content -->
    <main class="main-wrap" id="post-detail"> 
        <div class="theme-padding">
            <div class="container">
                <div class="row">

                    <div class="col-md-9 col-sm-8">
                        <div class="content">
                            <?php while(have_posts()): the_post();?>
                            <?php the_title();?>
                            <?php the_content();?>
                            <?php endwhile; ?>

                        </div>
                    </div>

                    <!-- Sidebar -->
<?php get_template_part('template-part/sidebar-right'); ?>
                    <!-- Sidebar -->

                </div>
            </div>
            <!-- Content -->
        </div>       
    </main>
    <!-- main content -->

    <!-- Footer Starts -->
<?php get_footer(); ?>?>   
                            </div>
                            <!-- blog detail -->

                        </div>
                    </div>

                    <!-- Sidebar -->
<?php get_template_part('template-part/sidebar-right'); ?>
                    <!-- Sidebar -->

                </div>
            </div>
            <!-- Content -->
        </div>       
    </main>
    <!-- main content -->

    <!-- Footer Starts -->
<?php get_footer(); ?>
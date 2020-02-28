<?php
// Theme Header
get_header();
?>
<!-- Slider Template -->
<?php get_template_part('template-part/main-slider', 'slider');?>
<?php $options = get_option( 'theme_options' );?>
<?php echo $logo = $options['logo'];?></br>
<?php echo $logo_des = $options['opt-textarea'];?>
    <!-- News Headline Container -->
    <div class="news-bar white-bg">
        <div class="container">
            <div class="row">

                <!-- news -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 r-full-width">
                <!-- Main News Tikar Template -->
                    <?php get_template_part('template-part/newstiker');?>
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
                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/cloud.png" alt="">
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
    <main class="wrapper"> 
        <div class="theme-padding">
            <div class="container">

                <!-- latest  news slider -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-widget mb-60">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>what's hot right now</h2>
                            </div>
                            <!-- Heading -->

                            <!-- post slider -->
                            <div class="white-bg p-30 light-shadow slider-post" id="sliderPost"> 
                                <div id="post-slider-1">

                                    <!-- post -->
                                <?php
                                // Post Query by Category Name
                                $args = array(
                                    'post_type'=>'post',
                                    'category_name'=>'National',
                                    'post_status'=>'publish',
                                    'posts_per_page'=>10

                                    );
                                $My_Qry = new WP_Query($args);
                                if($My_Qry-> have_posts()){ while($My_Qry-> have_posts()): $My_Qry-> the_post(); ?>
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <?php the_post_thumbnail('post_thumb', array( 'class' => 'post_thumbnl' )); ?>
                                            <span class="post-badge"><?php the_category();?></span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php the_permalink();?>" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="fa fa-user"></i><?php the_author(); ?></li>
                                                <li><i class="fa fa-clock-o"></i><?php the_time('g:i A'); ?></li>
                                                <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                <?php endwhile; } ?>
                                <?php wp_reset_query();?>
                                </div>
                            </div>
                            <!-- post slider -->

                        </div>
                    </div>
                </div>
                <!-- Slider Widget -->

                <!-- Main Content Row -->
                <div class="row">
                <!-- Page Left Sidebar Content -->
                    <?php echo get_template_part('template-part/sidebar-left');?>

                    <!-- Content -->
                    <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8 r-full-width">
                        <!-- Detail Post Widget -->
                        <div class="post-widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- Secondary Heading -->
                                    <div class="primary-heading">
                                        <h2>technology</h2>
                                    </div>
                                    <!-- Secondary Heading -->

                                    <!-- Post -->
                                    <div class="post style-2 white-bg light-shadow">


                                      <!-- Category Big Post -->
                                        <?php global $post; 
                                        $args = array(
                                            'post_type'        => 'post',
                                            'post_status'      => 'publish',
                                            'category_name'    => 'technology',
                                            'posts_per_page'   => 1,
                                            'order'            => 'DESC');

                                        $cate_info = get_posts($args);
                                        foreach ($cate_info as $post): setup_postdata($post);
                                        ?>

                                        <!-- Post Img -->
                                        <div class="post-thumb">
                                            <?php the_post_thumbnail('cate_post'); ?>
                                            <span class="post-badge"><?php the_category(); ?></span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php the_permalink(); ?>" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Img -->                                        
                                        <?php endforeach; ?>
                                        <?php wp_reset_query(); ?>

                                        <!-- Post Detil -->
                                        <div class="post-content cat-listing">

                                          <!-- Category Big Thumbnail Post -->
                                            <?php global $post; 
                                            $args = array(
                                                'post_type'        => 'post',
                                                'post_status'      => 'publish',
                                                'category_name'    => 'technology',
                                                'posts_per_page'   => 1,
                                                'order'            => 'DESC');

                                            $small_info = get_posts($args);
                                            foreach ($small_info as $post): setup_postdata($post);

                                            ?>
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p><?php the_excerpt(); ?></p>

                                            <?php endforeach; ?>
                                            <?php wp_reset_query(); ?>

                                            <ul class="post-wrap-list">
                                            <!-- Category list Post -->
                                            <?php global $post; 
                                            $i=0;
                                            $args = array(
                                                'post_type'        => 'post',
                                                'post_status'      => 'publish',
                                                'category_name'    => 'technology',
                                                'posts_per_page'   => 3,
                                                'order'            => 'DESC');

                                            $small_info = get_posts($args);
                                            foreach ($small_info as $post): setup_postdata($post);
                                            $i++;
                                            ?>                                            
                                                <!-- thumb small post -->
                                                <?php if($i != 1):?>
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <?php the_post_thumbnail('cate_post_small');?>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i><?php the_date();?></li>
                                                            <li><i class="fa fa-comments-o"></i><?php comments_popup_link('No Comments', '1 Comment', '% Comments');?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <?php endif; ?>
                                                <!-- thumb small post -->
                                            <?php endforeach; ?>
                                            <?php wp_reset_query(); ?>
                                            </ul>

                                        </div>
                                        <!-- Post Detail -->

                                    </div>
                                    <!-- Post -->

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- Secondary Heading -->
                                    <div class="primary-heading">
                                        <h2>world news</h2>
                                    </div>
                                    <!-- Secondary Heading -->

                                    <!-- Post -->
                                    <div class="post style-2 white-bg light-shadow">
                                        <!-- Category Big Post -->
                                        <?php global $post; 
                                        $args = array(
                                            'post_type'        => 'post',
                                            'post_status'      => 'publish',
                                            'category_name'    => 'lifestyle',
                                            'posts_per_page'   => 1,
                                            'order'            => 'DESC');

                                        $cate2_info = get_posts($args);
                                        foreach ($cate2_info as $post): setup_postdata($post);
                                        ?>
                                        <!-- Post Img -->
                                        <div class="post-thumb">
                                            <?php the_post_thumbnail('cate_post'); ?>
                                            <span class="post-badge"><?php the_category(); ?></span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="<?php the_permalink(); ?>" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Img -->
                                        <?php endforeach; ?>
                                        <?php wp_reset_query(); ?>
                                        <!-- Post Detil -->
                                        <div class="post-content cat-listing">
                                        <!-- Category Post Details -->
                                        <?php global $post; 
                                        $args = array(
                                            'post_type'        => 'post',
                                            'post_status'      => 'publish',
                                            'category_name'    => 'lifestyle',
                                            'posts_per_page'   => 1,
                                            'order'            => 'DESC');

                                        $cate2_info = get_posts($args);
                                        foreach ($cate2_info as $post): setup_postdata($post);
                                        ?>                                        
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p><?php the_excerpt(); ?></p>
                                        <?php endforeach; ?>
                                        <?php wp_reset_query(); ?>

                                            <ul class="post-wrap-list">
                                        <!-- Post Detil -->
                                        <!-- Category Post Details -->
                                        <?php global $post; 
                                        $i=0;
                                        $args = array(
                                            'post_type'        => 'post',
                                            'post_status'      => 'publish',
                                            'category_name'    => 'lifestyle',
                                            'posts_per_page'   => 3,
                                            'order'            => 'DESC');

                                        $cate2_info = get_posts($args);
                                        foreach ($cate2_info as $post): setup_postdata($post);
                                        $i++;
                                        ?>  
                                                <!-- small thumb post -->
                                                <?php if($i != 1): ?>

                                                <li  class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <?php the_post_thumbnail('cate_post_small');?>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i><?php the_time('g:i A');?></li>
                                                            <li><i class="fa fa-comments-o"></i><?php comments_popup_link('No Comments', '1 Comment', '% Comments');?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php wp_reset_query(); ?>                                                <!-- small thumb post -->

                                            </ul>
                                        </div>
                                        <!-- Post Detail -->

                                    </div>
                                    <!-- Post -->
                                        
                                </div>
                            </div>                            
                        </div>
                        <!-- Detail Post Widget -->
                        <!-- list posts -->


                        <!-- Detail list post -->
                        <div class="post-widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- main heading -->
                                    <div class="primary-heading">
                                        <h2>FOOD</h2>
                                    </div>
                                    <!-- main heading -->

                                    <!-- list of features -->
                                    <div class="post style-2 featured-single-post white-bg light-shadow">

                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/large-post/img-01.jpg" alt="detail">
                                            <span class="post-badge">FOOD</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-content">
                                            <h4><a href="listing-page-6.html">When the inteligence community is exposed in usa worlds special</a></h4>
                                            <ul class="post-features"> 
                                                <li>CJ asks: Will we keep by begging?</li>
                                                <li>If Constitution abrogated, country.</li>
                                                <li>Duty on 313 imported to go 72 hours.</li>
                                                <li>PTI petition dismissed, no rigging found.</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- list of features -->

                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <!-- main heading -->
                                    <div class="primary-heading">
                                        <h2>health</h2>
                                    </div>
                                    <!-- main heading -->

                                    <!-- list of features -->
                                    <div class="post style-2 featured-single-post white-bg light-shadow">

                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/large-post/img-02.jpg" alt="detail">
                                            <span class="post-badge">health</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="post-content">
                                            <h4><a href="listing-page-6.html">When the inteligence community is exposed in usa worlds special</a></h4>
                                            <ul class="post-features"> 
                                                <li>CJ asks: Will we keep by begging?</li>
                                                <li>If Constitution abrogated, country.</li>
                                                <li>Duty on 313 imported to go 72 hours.</li>
                                                <li>PTI petition dismissed, no rigging found.</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- list of features -->

                                </div>
                            </div>
                        </div>
                        <!-- Detail list post -->

                        <!-- add Banner -->
                        <div class="add-banner text-center post-widget p-0">
                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/add-3.jpg" alt="">
                        </div>
                        <!-- add Banner -->

                        <!-- post thumbs detail widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>fashion</h2>
                            </div>
                            <!-- Heading -->

                            <!-- post details -->
                            <div class="post-detail-wrap white-bg light-shadow p-30">
                                <div class="row">

                                    <!-- long post -->
                                    <div class="col-lg-6 col-sm-6 col-xs-12 smb-30">
                                        <div class="post style-1">

                                            <!-- Post Img -->
                                            <div class="post-thumb">
                                                <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-detail/img-04.jpg" alt="detail">
                                                <span class="post-badge">fashion</span>
                                                <div class="thumb-hover">
                                                    <div class="position-center-center">
                                                        <a href="#" class="fa fa-link"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Img -->

                                            <!-- Post Detail -->
                                            <div class="post-content">
                                                <h4><a href="post-detail.html">Girl yoyo Music listing with dj.</a></h4>
                                                 <ul class="post-meta">
                                                    <li><i class="icon-user"></i>jessica alex</li>
                                                    <li><i class="icon-clock"></i>10 Min ago</li>
                                                    <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                    <li><i class="icon-speech-bubble"></i>20</li>
                                                </ul>
                                                <p>Android Wear watches feature always-on displays, so you will always see important info like time, calls, and ailert... 
                                                <a href="post-detail.html" class="read-more">read more</a></p>
                                            </div>
                                            <!-- Post Detail -->

                                        </div>
                                    </div>
                                    <!-- long post -->

                                    <!-- Post List -->
                                    <div class="col-lg-6 col-sm-6 col-xs-12">
                                        <ul class="post-wrap-list">
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-detail/nav/img-01.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                     <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-detail/nav/img-02.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-detail/nav/img-03.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="post-wrap big-post">
                                                <div class="post-thumb">
                                                    <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-detail/nav/img-04.jpg" alt="post">
                                                </div>
                                                <div class="post-content">
                                                    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    <ul class="post-meta">
                                                        <li><i class="icon-user"></i>jessica</li>
                                                        <li><i class="icon-clock"></i>2 Min ago</li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul> 
                                    </div>
                                    <!-- Post List -->

                                </div>
                            </div>
                            <!-- post details -->

                        </div>
                        <!-- post thumbs detail widget -->

                        <!-- Gallery Widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>gallery style</h2>
                            </div>
                            <!-- Heading -->

                            <div class="gallery-widget">

                                <!-- gallery slides -->
                                <ul class="gallery-slider" id="gallery-slider"> 
                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-01.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-02.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-03.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-04.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-05.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-06.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-01.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-02.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-03.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-04.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-05.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/img-06.jpg" alt="">
                                            <div class="thumb-over">
                                                <span class="tag"><i class="fa fa-camera"></i>16 photos</span>
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</a></h4>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <!-- gallery slides -->

                                <!-- gallery thumbs -->
                                <ul id="gallery-slider-thumb" class="gallery-slider-thumb">
                                    <li data-slideIndex="0"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-01.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="1"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-02.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="2"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-03.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="3"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-04.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="4"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-05.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="5"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-06.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="0"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-01.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="1"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-02.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="2"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-03.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="3"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-04.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="4"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-05.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                    <li data-slideIndex="5"><a href="#">
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/gallery/thumbs/img-06.jpg" alt="">
                                        </div>                                
                                    </a></li>
                                
                                </ul>
                                <!-- gallery thumbs -->

                            </div>

                        </div>
                        <!-- Gallery Widget -->

                        <!-- Slider Widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>most viewed posts</h2>
                            </div>
                            <!-- Heading -->

                            <!-- post slider -->
                            <div class="light-shadow white-bg p-30 slider-post"> 
                                <div id="post-slider-2">
                                    
                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                   <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->


                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                   <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                   <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/post-1/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>

                            </div>
                            <!-- post slider -->

                        </div>
                        <!-- Slider Widget -->

                        <!-- archieve widget -->
                        <div class="post-widget">

                            <!-- Heading -->
                            <div class="primary-heading">
                                <h2>archieve posts</h2>
                            </div>
                            <!-- Heading -->

                            <!-- archieve -->
                            <div class="light-shadow white-bg"> 
                                <div class="archieve-tabs">
                                
                                    <!-- Tabs Nav -->
                                    <div class="cate-tab-navs">
                                        <ul class="nav-justified">
                                            <li class="active">
                                                <a href="#january" data-toggle="tab">january</a>
                                            </li>
                                            <li>
                                                <a href="#february" data-toggle="tab">february</a>
                                            </li>
                                            <li>
                                                <a href="#march" data-toggle="tab">march</a>
                                            </li>
                                            <li>
                                                <a href="#april" data-toggle="tab">april</a>
                                            </li>
                                            <li>
                                                <a href="#may" data-toggle="tab">may</a>
                                            </li>
                                            <li>
                                                <a href="#june" data-toggle="tab">june</a>
                                            </li>
                                            <li>
                                                <a href="#july" data-toggle="tab">july</a>
                                            </li>
                                            <li>
                                                <a href="#august" data-toggle="tab">august</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tabs Nav -->
      
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="january">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/health/img-01.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                        <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="february">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/health/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="march">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/lifestyle/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="april">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/lifestyle/img-01.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="may">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/sports/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="june">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/sports/img-01.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                        <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="july">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/fashion/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                        <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="august">
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6 col-xs-12 left-border">
                                                    <div class="post">
                                                        <div class="post-thumb">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-06.jpg" alt="">
                                                            <span class="post-badge"><i class="fa fa-camera"></i>16</span>
                                                            <div class="thumb-over">
                                                                <p><a href="#">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor</a></p>
                                                            </div>
                                                        </div>

                                                         <ul class="post-meta">
                                                            <li><i class="icon-user"></i>jessica alex</li>
                                                            <li><i class="icon-clock"></i>10 Min ago</li>
                                                            <li><i class="fa fa-thumbs-o-up"></i>20</li>
                                                            <li><i class="icon-speech-bubble"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12">
                                                    <div class="archieve-list">
                                                         <ul>
                                                            <li><a href="#">James blake fires the officer who did.</a></li>
                                                            <li><a href="#">prison incident follows earlier bollow.</a></li>
                                                            <li><a href="#">common persons mistakes should  ignore.</a></li>
                                                            <li><a href="#">6.6 magnitude earth quake hits gulf.</a></li>
                                                            <li><a href="#">hurbagh loses his mind on sideline.</a></li>
                                                            <li><a href="#">hinted at murder before cellmate.</a></li>
                                                            <li><a href="#">sports is being latest trend in news.</a></li>
                                                        </ul> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <!-- Tab panes -->

                                </div>
                            </div>
                            <!-- archieve -->

                        </div>
                        <!-- archieve widget -->

                        <!-- add banner -->
                        <div class="add-banner text-center m-0 p-0">
                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/add-3.jpg" alt="">
                        </div>
                        <!-- add banner -->

                    </div>
                    <!-- Content -->
                    <!-- Page Right Sidebar -->
                    <?php echo get_template_part('template-part/sidebar-right');?>
                </div>   
                <!-- Main Content Row -->

            </div>
        </div>  

        <!-- categories posts -->
        <div class="post-widget m-0 white-bg">
            <div class="cate-tab-navs">
                <div class="container">
                    <ul class="nav-justified">
                        <li class="active"><a data-target="#politics" data-toggle="tab">politics</a></li>
                        <li><a data-target="#technology" data-toggle="tab">technology</a></li>
                        <li><a data-target="#fashion" data-toggle="tab">fashion</a></li>
                        <li><a data-target="#international" data-toggle="tab">international</a></li>
                        <li><a data-target="#admin" data-toggle="tab">admin pick</a></li>
                        <li><a data-target="#top" data-toggle="tab">top posts</a></li>
                    </ul>
                </div>
            </div>
            <div class="cate-tab-content theme-padding">
                <div class="container">
                    <div class="tab-content">
                        <div class="tab-pane active fade in" id="politics">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-01.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="technology">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/technology/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/technology/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/technology/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/technology/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fashion">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/fashion/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/fashion/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/fashion/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/fashion/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="international">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-07.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/fashion/img-06.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="admin">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/sports/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/sports/img-07.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/technology/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/lifestyle/img-08.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top">
                            <div class="row slider-post">
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/technology/img-04.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->

                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/lifestyle/img-05.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/technology/img-02.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                                <div class="col-sm-3 col-xs-6">

                                    <!-- post -->
                                    <div class="post style-1">

                                        <!-- post img -->
                                        <div class="post-thumb"> 
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/health/img-03.jpg" alt="">
                                            <span class="post-badge">post</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>                                                
                                        </div>
                                        <!-- post img -->

                                        <!-- post details -->
                                        <div class="post-content">
                                            <h4><a href="post-detail.html">Full Responsive amazing design pixel perfect</a></h4>
                                            <ul class="post-meta m-0">
                                                <li><i class="icon-user"></i>jessica</li>
                                                <li><i class="icon-clock"></i>2 Min ago</li>
                                            </ul>
                                        </div>
                                        <!-- post details -->

                                    </div>
                                    <!-- post -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
        <!-- categories posts -->

    </main>
    <!-- main content -->

    <!-- Footer Starts -->
<?php get_footer(); ?>
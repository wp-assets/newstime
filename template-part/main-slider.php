   <!-- Banner slider -->
    <div class="banner-slider">
        
        <!-- slider main slides -->
        <div id="ninja-slider" class="ninja-slider">
            <div class="slider-inner">
                <ul>
                <!-- Dynamoic Slider Post -->
                <?php global $post; 

                    $args = array(
                        'posts_per_page'   => -1,
                        'post_type'        => 'slider-item',
                        'page'             => $paged,
                        'order'            => 'DESC'
                        );

                    $all_info = get_posts($args);

                    foreach ($all_info as $post): setup_postdata($post);

                    $bannerImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID, 'Banner_Image'));
                ?>
                    <li>
                        <a class="ns-img" href="<?php echo $bannerImageUrl[0];?>"></a>
                        <!-- caption -->
                        <div class="caption-holder">
                            <div class="container p-relative">
                                <div class="caption">
                                    <span><?php the_category(); ?></span>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                                    <div class="post-meta">
                                        <span><i class="icon-user"></i><?php the_author(); ?></span>
                                        <span><i class="icon-clock"></i>10 Min ago</span>
                                        <span><i class="fa fa-thumbs-o-up"></i>20</span>
                                        <span><i class="icon-speech-bubble"></i><?php comments_popup_link('No Comment', '1 Comment', '% Comments');?></span>
                                    </div>
                                    <p><?php the_excerpt();?></p>
                                </div>
                            </div>
                        </div>
                        <!-- caption -->
                    </li>
                <?php endforeach; ?>
                <!-- Dynamoic Slider Post -->
                </ul>
                <div class="fs-icon" title="Expand/Close"></div>
            </div>
        </div>
        <!-- slider main slides -->
        
        <!-- Banner Thumnail -->
        <div class="banner-thumbnail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6 pull-right">
                        <div id="thumbnail-slider">
                            <div class="inner">
                                <ul class="post-wrap-list">

                                    <!-- Dynamoic Slider Post -->
                                    <?php global $post; 

                                        $args = array(
                                            'posts_per_page'   => -1,
                                            'post_type'        => 'slider-item',
                                            'page'             => $paged,
                                            'order'            => 'DESC'
                                            );

                                        $all_info = get_posts($args);

                                        foreach ($all_info as $post): setup_postdata($post);

                                        $bannerThumbnail_URL = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID, 'Banner_thumb'));
                                    ?>
                                    <li class="active">
                                        <div class="post-wrap small-post">

                                            <div class="post-thumb">
                                                <img src="<?php echo $bannerThumbnail_URL[0] ?>" alt="post">
                                            </div>
                                            <div class="post-content">
                                                <ul class="post-meta">
                                                    <li><i class="icon-clock"></i>10 Min ago</li>
                                                    <li><i class="icon-speech-bubble"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                    <!-- Dynamoic Slider Post -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        <!-- Banner Thumnail -->

    </div>
    <!-- Banner slider -->

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

                                        <!-- Category Main Post -->
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
                                            <?php the_post_thumbnail('cate_post', array(''=>''));?>
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

                                      <!-- Category Main Post -->
                                        <?php global $post; 
                                        $i=0;
                                        $args = array(
                                            'post_type'        => 'post',
                                            'post_status'      => 'publish',
                                            'category_name'    => 'technology',
                                            'posts_per_page'   => 4,
                                            'order'            => 'DESC');

                                        $cate_info = get_posts($args);
                                        foreach ($cate_info as $post): setup_postdata($post);
                                        $i++; 
                                        ?>

                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p><?php the_excerpt(); ?></p>
                                            <ul class="post-wrap-list">

                                                <!-- thumb small post -->
                                                <?php if($i !=1):?>
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <?php the_post_thumbnail('cate_post2');?>
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i><?php the_date(); ?></li>
                                                            <li><i class="fa fa-comments-o"></i><?php comments_popup_link('No Comments', '1 Comment', '% Comments');?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            
                                                <!-- thumb small post -->

  

                                            </ul>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <?php wp_reset_query(); ?>
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

                                        <!-- Post Img -->
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/img-01.jpg" alt="detail">
                                            <span class="post-badge">world</span>
                                            <div class="thumb-hover">
                                                <div class="position-center-center">
                                                    <a href="#" class="fa fa-link"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Img -->

                                        <!-- Post Detil -->
                                        <div class="post-content cat-listing">
                                            <h4><a href="listing-page-3.html">Turkey's Erdogan to drop lawsuits against people who insulted him</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul class="post-wrap-list">

                                                <!-- small thumb post -->
                                                <li  class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/thumbs/img-01.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="#">Turkey's Erdogan to drop lawsuits against</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                            <li><i class="fa fa-comments-o"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- small thumb post -->

                                                <!-- small thumb post -->
                                                <li class="post-wrap big-post">
                                                    <div class="post-thumb">
                                                        <img src="<?php echo esc_url(get_template_directory_uri() );?>/images/world/thumbs/img-02.jpg" alt="post">
                                                    </div>
                                                    <div class="post-content">
                                                        <h4><a href="#">Turkey's Erdogan to drop lawsuits against</a></h4>
                                                        <ul class="post-meta">
                                                            <li><i class="fa fa-clock-o"></i>25 dec, 2016</li>
                                                            <li><i class="fa fa-comments-o"></i>20</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <!-- small thumb post -->

                                            </ul>
                                        </div>
                                        <!-- Post Detail -->

                                    </div>
                                    <!-- Post -->
                                        
                                </div>
                            </div>                            
                        </div>
                        <!-- Detail Post Widget -->
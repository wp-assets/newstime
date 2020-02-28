                    <div class="headline-wrap">

                        <span class="badge">just in</span>

                        <!-- news ticker -->
                        <div id="ticker">
                            <div class="clip">
                                <div class="today">
                                    <ul>

                                    <?php if(have_posts()) : while(have_posts()): the_post();?>
                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
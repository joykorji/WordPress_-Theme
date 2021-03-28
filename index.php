<?php get_header(); ?> 

<div class="container home-page">
    <div class="row">

        <?php 

            if(have_posts( )) {
                while(have_posts( )){


                    the_post( ); ?>

                    <div class="col-sm-6">
                        <div class="main-post">
                            <h3 class="post-title">
                                <a href="<?php the_permalink() ?>"> <?php the_title() ?></a>
                            </h3>

                            <span class="post-author"><i class="fa fa-user fa-fw "></i> <?php the_author_posts_link( )?>, </span>
                            <span class="post-date"><i class="fa fa-calendar fa-fw "></i> <?php the_time('F j, Y') ?>, </span>
                            <span class="post-comments"><i class="fa fa-comments-o fa-fw "></i><?php comments_popup_link( '0', 'one comment', '% comments' , 'comment-url') ?> </span>
                            <?php the_post_thumbnail( '', ['class' => 'img-responsive img-thumbnail', 'title' => 'post Image']) ?>
                            <div class="post-content">
                                <?php the_excerpt( )  ?>
                </div>
                            
                            <hr>
                            <p class="post-categories"> 
                            <i class="fa fa-tags fa-fw "></i>
                               <?php the_category(',' ) ?>
                            </p>

                            <p class="post-tags">
                                <?php 
                                    if(has_tag()){
                                        the_tags();
                                    }
                                    else{
                                        echo 'Tags: not available';
                                    }
                                ?>
                            </p>

                           
                        </div>

                    </div>

                    <?php
                   
                }
            }
            echo '<div class="clearfix"></div>';

         //   echo '<div class="post-pagination" > ';

        //    previous_posts_link('<< Previous');
        //    next_posts_link('Next >>');

         //   echo '</div>';


            ?>
            <div class="pagination-numbers">
                <?php echo numbering_pagination(); ?>
            </div>
            

        

    </div>
</div>


<!-- 
       
              
                <img class="img-responsive img-thumbnail" src="http://placehold.it/600x200/300" alt="">
                <p class="post-content"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta consequuntur id, odit architecto ducimus adipisci aliquam voluptatibus blanditiis amet nemo omnis, eveniet debitis at numquam fugiat in eos aspernatur tempora est labore quidem. Nobis veniam inventore placeat, totam quo minima.</p>
                <hr>
                <p class="categories"> 
                <i class="fa fa-tags fa-fw "></i>
                html, test, wordpress
                </p>
            </div>
        </div>
     -->






<?php get_footer(); ?> 



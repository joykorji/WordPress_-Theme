<?php get_header(); ?> 

<div class="container post-page">
   

        <?php 

            if(have_posts( )) {
                while(have_posts( )){
                    

                    the_post( ); ?>

                        <div class="main-post single-post">
                            <?php edit_post_link( 'Edit <i class="fa fa-pencil"> </i> ' ) ?>
                            <h3 class="post-title">
                                <a href="<?php the_permalink() ?>"> <?php the_title() ?></a>
                            </h3>

                            
                            <span class="post-date"><i class="fa fa-calendar fa-fw "></i> <?php the_time('F j, Y') ?>, </span>
                            <span class="post-comments"><i class="fa fa-comments-o fa-fw "></i><?php comments_popup_link( '0', 'one comment', '% comments' , 'comment-url') ?> </span>
                            <?php the_post_thumbnail( '', ['class' => 'img-responsive img-thumbnail', 'title' => 'post Image']) ?>
                            <div class="post-content">
                                <?php the_content( )  ?>
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


                    <?php
                   
                }
            }

            

            
         wp_reset_postdata();
            
            ?>

            




            <div class="row row-effect">
            
                <div class="col-md-2">

                        <?php  

                            $avatar_arguments  = array(
                                'class' => 'img-responsive img-thumbnail center-block'
                            );
                            echo get_avatar( get_the_author_meta('ID'), 128, '', 'User avatar', $avatar_arguments) ;
                            
                            
                            ?>
                </div>

                <div class="col-md-10 author-info">

            

                    <h4>
                        <?php the_author_meta( 'first_name') ?>

                        <?php the_author_meta( 'last_name') ?>

                        ( <span class="nickname"> <?php the_author_meta( 'nickname') ?> </span> ) 

                    </h4>

                    <?php    if (get_the_author_meta('description')){  ?> 
                            
                                    <p>
                                        <?php the_author_meta('description') ?> 
                                    </p>
                    <?php    } else{
                            echo 'there is no Biography';
                    }       ?>  
                    <hr>
                </div>

                
                
                <div>
                        <p class="author-stats">
                            Number of Posts Count: <span class="posts-count"> <?php echo count_user_posts(get_the_author_meta('ID')) ?></span>
                        </p>
                        <p>  
                            User Profile Link: <?php the_author_posts_link() ?> 
                        </p>

                </div> 


            </div>
            <?php  
    



            echo '<hr class="comment-seperator">';

            echo '<div class="post-pagination" > ';

            previous_post_link('%link', '<i class="fa fa-chevron-left fa-lg" aria-hidden="true"></i> %title');
            next_post_link('%link', '%title <i class="fa fa-chevron-right fa-lg" aria-hidden="true"></i> ');

            echo '</div>';

            echo '<hr class="comment-seperator">';

            comments_template();

        ?>

    
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



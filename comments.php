<?php 

    if(comments_open( )){

        // echo '<h3>' . comments_number('0 comments','1 comment', '% comments') . '</h3>';

        echo '<ul class="list-unstyled comments-list">';

        $comments_arguments = array(
            'max_depth'   => 3,
            'type'        => 'comment',
            'avatar_size' => 64


         );

        wp_list_comments($comments_arguments );

        echo "</ul>";

        echo '<hr class="comment-separator">';

        $commnetsform_arguments = array(
            'title_reply'   =>  'Add Your Comment',
            'title_reply_to'=>  'Add a Reply To [%s]',
            'class_submit'  =>  'btn btn-primary btn-md',
            'comment_notes_before' => ''

        );
        

        comment_form($commnetsform_arguments);

    } else {
        echo 'comments are disapple sorry';
    }






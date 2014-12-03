<?php
/*
    @package Skeletos
*/
?>

<div id="comments">
<?php
if (post_password_required()) {
    echo '<p>This post is password protected. Enter the password to view any comments</p>';
    /* Stop the rest of comments.php from being processed,
     * but don't kill the script entirely -- we still have
     * to fully load the template.
     */
    return;
} //end if

if (have_comments()) { ?>
    <h6 class="heading2"><?php comments_number('No Comments', '1 Comment', '% Comments');?></h6>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { // are there comments to navigate through ?>
    <nav class="clearfix">
        <h6 class="heading4">Comment navigation</h6>
        <p class="right"><?php next_comments_link('Newer Comments &rarr;'); ?></p>
        <p class="left"><?php previous_comments_link('&larr; Older Comments'); ?></p>
    </nav>
    <?php } // check for comment navigation ?>

    <ol class="ss-list-comments">
        <?php wp_list_comments(array('callback' => 'ss_comment')); ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { // are there comments to navigate through ?>
    <nav class="clearfix">
        <h6 class="heading4">Comment navigation</h6>
        <p class="right"><?php next_comments_link('Newer Comments &rarr;'); ?></p>
        <p class="left"><?php previous_comments_link('&larr; Older Comments'); ?></p>
    </nav>
    <?php } // check for comment navigation

} elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) {
    echo '<p>Comments are closed</p>';
} //end if

$fields = array(
    'author' => '<label for="author">Name' . ($req ? '<span class="required">*</span>' : '') . '</label>' .
                '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" tabindex="1"' . ($req ? ' required="required" aria-required="true" ' : '') . '/>',
    'email'  => '<label for="email">Email' . ($req ? '<span class="required">*</span>' : '') . '</label>' .
                '<input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" tabindex="2"' . ($req ? ' required="required" aria-required="true" ' : '') . '/>',
    'url'    => '<label for="url">Website</label>' .
                '<input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" tabindex="3" />'
);

$defaults = array(
    'fields' => apply_filters('comment_form_default_fields', $fields),
    'comment_field' =>  '<label for="comment">Comment<span class="required">*</span></label>' .
                        '<textarea id="comment" name="comment" tabindex="4"  required="required" aria-required="true"></textarea>',
    'comment_notes_after' => '',
    'id_form' => 'commentform',
    'id_submit' => 'submit',
    'title_reply' => 'Leave a Comment',
    'title_reply_to' => 'Leave a Comment to %s',
    'cancel_reply_link' => 'Cancel reply',
    'label_submit' => 'Post Comment'
);

comment_form($defaults);

?>

</div><!--/end #comments -->

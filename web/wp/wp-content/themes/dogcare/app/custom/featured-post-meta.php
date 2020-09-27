<?php
function add_publish_meta_options($post_obj) {

    global $post;
    $value = get_post_meta($post_obj->ID, 'featured_page_meta', true); 


    if('page'==$post->post_type) {
        echo  '<div class="misc-pub-section misc-pub-section-last">'
            .'<label><input type="checkbox"' . (!empty($value) ? ' checked="checked" ' : null) . ' value="1" name="featured_page_meta" /> Stick to the front page</label>'
            .'</div>';
    }
}

add_action('post_submitbox_misc_actions', 'add_publish_meta_options');

function extra_publish_meta_options_save($post_id, $post, $update) {

      $post_type = 'page';
      if ( $post_type != $post->post_type ) {
        return;
      }
     
      if ( wp_is_post_revision( $post_id ) ) {
        return;
      }

    update_post_meta($post_id, 'featured_page_meta', $_POST['featured_page_meta']);


}

add_action( 'save_post', 'extra_publish_meta_options_save', 10 , 3);
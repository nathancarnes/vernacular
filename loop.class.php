<?php
class VernacularLoop{
  public function random_posts($count = 3, $post_type = 'post'){
    $query = new WP_Query(array(
      'post_type' => $post_type,
      'orderby' => 'rand',
      'posts_per_page' => $count,
    ));

    return $query->get_posts();
  }

  public function load($post){
    setup_postdata($post);
  }

  public function reset(){
    wp_reset_postdata();
  }
}

class_alias('VernacularLoop', '_loop');

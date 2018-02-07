<?php
  $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 ?>
<div class="politics_div index_article">
  <?php article_cats($post) ?>
  <?php if (strlen($featured_img_url)>0) {
    ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
  } ?>

  <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
  <p><?php the_excerpt() ?></p>
  <p class='index_author'>by: <?php the_author() ?></p>
</div>

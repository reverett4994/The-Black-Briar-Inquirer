<?php get_header();?>

<div class="site-content clearfix">
  <h1 class='cat_header'>Most Recent <?php echo single_cat_title();?> Articles</h1>
    <?php if(have_posts()) :
      while (have_posts()) : the_post(); ?>
        <?php
        $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $author_string=str_replace(" ","_",get_the_author() );
       ?>
      <div class="cat_article">
        <?php $title=get_the_title() ?>
        <?php if (strlen($featured_img_url)>0):  ?>
          <img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'>
          <h3 class='h3_with_img'><a href=<?php echo the_permalink() ?>><?php echo mb_strimwidth($title, 0, 70, '...');?></a></h3>
        <?php  else: ?>
        <h3 class='h3_without_img'><a href=<?php echo the_permalink() ?>><?php echo mb_strimwidth($title, 0, 70, '...');?></a></h3>
      <?php  endif; ?>

        <p><?php the_excerpt() ?></p>
        <p class='cat_author'>by: <a href=<?php echo add_query_arg( 'author', $author_string, '/newspaper/author-search' ); ?>><?php the_author() ?></a> | <?php article_cats($post) ?></p>
      </div>
      <?php endwhile;

    else :
      echo "</p>No Content</p>";

    endif;?>

  </div>
<?php get_footer();?>

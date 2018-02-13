<?php get_header();?>

<div class="site-content clearfix">
  <div class="main-column index_wrapper">
    <?php
      $left = array();
      $center = array();
      $right = array();
     ?>
    <?php if(have_posts()) :
      while (have_posts()) : the_post(); $counter++?>
      <?php if ($counter==1 || $counter==4) {
        //set class of div and change counter
        $class='left_column';
        array_push($left,$post);
      } elseif ($counter==2 || $counter==5) {
        //set class of div and change counter
        $class='center_column';
        array_push($center,$post);
      } elseif ($counter==3 || $counter==6) {
         //set class of div and change counter
         $class='right_column';
         array_push($right,$post);
      } ?>




      <?php endwhile;

    else :
      echo "</p>No Content</p>";

    endif;?>

    <div class="left_column">
      <?php
      foreach ($left as $key=>&$post) {
          if ($key==0) {
             $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="politics_div index_article">
              <?php article_cats($post) ?>
              <?php if (strlen($featured_img_url)>0) {
                ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
              } ?>

              <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
              <p><?php the_excerpt() ?></p>
              <p class='index_author'>by: <?php the_author() ?></p>
            </div><?php
          } else {
            $featured_img_url =''; ?>
           <div class="politics_div index_article">
             <?php article_cats($post) ?>
             <?php if (strlen($featured_img_url)>0) {
               ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
             } ?>

             <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
             <p><?php the_excerpt() ?></p>
             <p class='index_author'>by: <?php the_author() ?></p>
             </div><?php
          }
      }
       ?>
    </div>
    <div class="center_column">
      <?php
      foreach ($center as $key=>&$post) {
          if ($key==0) {
             $featured_img_url = '' ?>
            <div class="politics_div index_article">
              <?php article_cats($post) ?>
              <?php if (strlen($featured_img_url)>0) {
                ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
              } ?>

              <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
              <p><?php the_excerpt() ?></p>
              <p class='index_author'>by: <?php the_author() ?></p>
            </div><?php
          } else {
            $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
           <div class="politics_div index_article">
             <?php article_cats($post) ?>
             <?php if (strlen($featured_img_url)>0) {
               ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
             } ?>

             <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
             <p><?php the_excerpt() ?></p>
             <p class='index_author'>by: <?php the_author() ?></p>
             </div><?php
          }
      }
       ?>
    </div>

    <div class="right_column">
      <?php
      foreach ($right as $key=>&$post) {
          if ($key==0) {
            $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="politics_div index_article">
              <?php article_cats($post) ?>
              <?php if (strlen($featured_img_url)>0) {
                ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
              } ?>

              <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
              <p><?php the_excerpt() ?></p>
              <p class='index_author'>by: <?php the_author() ?></p>
            </div><?php
          } else {
            $featured_img_url = ''; ?>
           <div class="politics_div index_article">
             <?php article_cats($post) ?>
             <?php if (strlen($featured_img_url)>0) {
               ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
             } ?>

             <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
             <p><?php the_excerpt() ?></p>
             <p class='index_author'>by: <?php the_author() ?></p>
             </div><?php
          }
      }
       ?>
    </div>
    <?php echo wp_list_categories() ?>
  </div>
</div>

<?php get_footer();?>




<?php if (false) { ?>

  <?php
    $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
   ?>
  <div class="politics_div index_article <?php echo $class ?>">
    <?php article_cats($post) ?>
    <?php if (strlen($featured_img_url)>0) {
      ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
    } ?>

    <h3><a href=<?php echo the_permalink() ?>><?php the_title() ?></a></h3>
    <p><?php the_excerpt() ?></p>
    <p class='index_author'>by: <?php the_author() ?></p>
  </div>


<?php } ?>

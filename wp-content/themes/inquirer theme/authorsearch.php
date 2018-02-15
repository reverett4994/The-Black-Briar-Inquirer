<?php /* Template Name: Author Search */ ?>
<?php get_header();
$author_html=htmlspecialchars($_GET["author"]);
$author=array_map("add_spaces", $author_html);
$author_string=str_replace("_"," ",$author_html);
?>
<h1 class='cat_header'>Most Recent Articles By <?php echo $author_string?> </h1>
<?php
global $post;
$args = array( 'posts_per_page' => 300, 'post_type'=> 'post', 'author_name' => $author);
$myposts = get_posts( $args );

foreach ($myposts as $key=>&$post) {
  $postID = $post->ID;
  setup_postdata( $post );
  $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
   ?>
  <div class="cat_article">
    <?php $title=get_the_title() ?>
    <?php if (strlen($featured_img_url)>0):  ?>
      <img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'>
      <h3 class='h3_with_img'><a href=<?php echo the_permalink() ?>><?php echo mb_strimwidth($title, 0, 70, '...');?></a></h3>
    <?php  else: ?>
    <h3 class='h3_without_img'><a href=<?php echo the_permalink() ?>><?php echo mb_strimwidth($title, 0, 70, '...');?></a></h3>
  <?php  endif; ?>

    <p class="excerpt"><?php the_excerpt() ?></p>
    <p class='cat_author'>by: <?php the_author() ?> | <?php article_cats($post) ?></p>
  </div>
<?php
}
 ?>


<?php get_footer();?>

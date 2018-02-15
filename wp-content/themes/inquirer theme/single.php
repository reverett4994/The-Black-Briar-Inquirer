<?php get_header();?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
  <div class="single_wrapper">
    <?php
      $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      $author_string=str_replace(" ","_",get_the_author() );
     ?>
    <div class="single_article">
      <h1><?php the_title() ?></h1>
      <?php if (strlen($featured_img_url)>0) {
        ?><img src=<?php echo $featured_img_url ?> alt="" class='featured_image'><?php
      } ?>
      <p class='meta_info'>
        by: <a href=<?php echo add_query_arg( 'author', $author_string, '/newspaper/author-search' ); ?>><?php the_author() ?></a> | &nbsp
        <?php article_cats($post) ?>&nbsp
        <?php echo get_the_date( 'F j Y' ); ?> at <?php the_time( 'h:i A' ); ?>
      </p>
      <div class='content_div'><?php the_content() ?></div>


        <?php $attachments = new Attachments( 'attachments' ); ?>
        <?php if( $attachments->exist() ) : ?>
          <div class="owl-carousel owl-theme">
            <?php while( $attachments->get() ) : ?>
                 <?php echo $attachments->image( 'large' ); ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>


    <?php comment_form(); ?>

    <ol class="commentlist">
      <?php
        //Gather comments for a specific page/post
        $comments = get_comments(array(
          'post_id' => $post->ID,
          'status' => 'approve' //Change this to the type of comments to be displayed
        ));

        //Display the list of comments
        wp_list_comments(array(
          'per_page' => 10, //Allow comment pagination
          'reverse_top_level' => false //Show the oldest comments at the top of the list
        ), $comments);
      ?>
    </ol>
    </div>

  </div>
  <hr>


  <?php
endwhile;

else:
  ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<script type="text/javascript">

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoWidth:true,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

</script>


<?php get_footer();?>

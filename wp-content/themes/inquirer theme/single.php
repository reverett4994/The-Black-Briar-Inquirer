<?php get_header();?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
  <div class="single_wrapper">
    <?php
      $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
     ?>
    <div class="">
      <h1><?php the_title() ?></h1>
      <p class='index_author'>by: <?php the_author() ?></p>
      <?php article_cats($post) ?>
      <?php if (strlen($featured_img_url)>0) {
        ?><img src=<?php echo $featured_img_url ?> alt="" class='index_thumbnail'><?php
      } ?>
      <p><?php the_content() ?></p>

      <div class="owl-carousel owl-theme">
        <?php $attachments = new Attachments( 'attachments' ); ?>
        <?php if( $attachments->exist() ) : ?>
            <?php while( $attachments->get() ) : ?>
                 <?php echo $attachments->image( 'thumbnail' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    </div>
  </div>
  <hr>

  <?php $attachments = new Attachments( 'attachments' ); ?>
  <?php if( $attachments->exist() ) : ?>
    <h3>Attachments</h3>
    <p>Total Attachments: <?php echo $attachments->total(); ?></p>
    <ul>
      <?php while( $attachments->get() ) : ?>
        <li>
          ID: <?php echo $attachments->id(); ?><br />
          Type: <?php echo $attachments->type(); ?><br />
          Subtype: <?php echo $attachments->subtype(); ?><br />
          URL: <?php echo $attachments->url(); ?><br />
          Image: <?php echo $attachments->image( 'thumbnail' ); ?><br />
          Source: <?php echo $attachments->src( 'full' ); ?><br />
          Size: <?php echo $attachments->filesize(); ?><br />
          Title Field: <?php echo $attachments->field( 'title' ); ?><br />
          Caption Field: <?php echo $attachments->field( 'caption' ); ?>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
  <?php
endwhile;

else:
  ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<script type="text/javascript">

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
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

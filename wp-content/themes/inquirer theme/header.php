<!DOCTYPE html >
<html <?php language_attributes();?>>
  <head>
    <meta charset=" <?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Overpass+Mono|UnifrakturCook:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <title> <?php bloginfo('name')?></title>
    <?php wp_head();?>
  </head>

  <body <?php body_class();?> >

      <div class="header">
        <div class="logo">
          <a href="/newspaper">The Black-Briar Inquirer</a>
        </div>
      <div class="sub_logo">
        Daily(ish) News and Information
          <div class="left">
            <?php
            echo date("l, M d Y ");
            ?>
          </div>


          <div class="right">
            <a href="#">Valenwood Edition</a>
          </div>
      </div>
      </div>

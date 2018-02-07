<?php
if ( in_category('world') ) {
    include 'world.php';
} elseif ( in_category('Politics') ) {
    include 'politics.php';
}elseif ( in_category('Lifestyle') ) {
    include 'politics.php';
}elseif ( in_category('Classifieds') ) {
    include 'politics.php';
} else {
    // Continue with normal Loop

}
 ?>

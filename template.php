<?php
  require_once('boot.php');
  require ('blocks/header.php');
?>

  <?php include('blocks/top_menu.php'); ?>

  <?php
    if ( $page_path == '' ) { $page_path = 'index'; }
    if ( file_exists( 'pages/' . $page_path . '.php' ) ) {
      include( 'pages/' . $page_path . '.php' );
    } else {
      header("HTTP/1.0 404 Not Found");
      include ('pages/404.php');
    }
  ?>

<?php require ('blocks/footer.php') ?>
<?php require_once('../private/initialize.php'); ?>

<?php 

  if(isset($_GET['id'])) {
    $page_id = $_GET['id'];
    $page = find_page_by_id($page_id);
    if(!$page) {
      redirect_to(url_for('/index.php'));
    }
  } else {
    // nothing selected, show the home page
  }

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>



<div id="main">
  
  <?php include(SHARED_PATH . '/public_navigation.php'); ?>

  <div id="page">
  
    <?php 
    
      if(isset($page)) {
        // show the page from the database
        // TODO - add HTML escaping back in
        echo $page['content'];
        
      } else {
        include(SHARED_PATH . '/static_homepage.php');    
      }
    
    
    ?>
  
  </div>
  
</div>


<?php include(SHARED_PATH . '/public_footer.php'); ?>
<?php
include 'inc/post_data.php';
$page = $post_data['404'];
include 'inc/html_head.php';
include 'inc/header.php';
?>


<main class="outer flex wrap row">
  <header class="page-header row" id="content">
  	<h1 class="extra-large">Error 404</h1>
  	<p class="subheading">The page you're looking for doesn't exist</p>

  </header>
  	
  	<?php include 'inc/featured_articles.php'; ?>
  
    
   
    
</main>
<hr class="divider" />

<!-- footer -->
<?php include 'inc/footer.php'; ?>
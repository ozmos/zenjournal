<?php
include 'inc/html_head.php';
include 'inc/header.php';
?>

<main class="outer flex wrap">
  <!-- left column -->
    <section class="col-8">
    <!-- main content -->
      <article class="blog-article card">
      <!-- article header -->
        <div class="article-header flex wrap">
          <section>
            <h2 class="art-heading">
              <?php echo $page['art_title']; ?>
            </h2>
            <h3 class="art-subheading">
              <?php echo $page['auth'] . ', ' . $page['date']; ?> 
            </h3>
          </section>
          <section class="image">
            <img class="featured-img" src="images/<?php echo $page['img'];?>" alt="<?php echo $page['alt'];?>"  />
          </section>
        </div>
        <!-- article content -->
        <?php 
          echo $page['content']; 
          if ($page['id'] === 'home') {
          ?>
          <div id="actions">
            <h3><a class="hover-green-light" href="intro.php">Read More about mindfulness</a></h3>  
            <h3><a class="hover-green-light" href="sitting_meditation.php">Learn How to Meditate</a></h3>  
          </div>
          <?php } ?>
          
        
      </article>
    </section>
    <!-- end left column -->
    <?php include 'inc/aside.php'; ?>
    <!-- end outer div and main -->
    
</main>
<hr class="divider" />

<!-- footer -->
<?php include 'inc/footer.php'; ?>


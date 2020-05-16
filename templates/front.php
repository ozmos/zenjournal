<?php
include 'inc/html_head.php';
include 'inc/header.php';
?>

<main class="outer flex wrap">
  <!-- left column -->
    <section class="col-9">
    <!-- main content -->
      <article class="blog-article card" id="content">
      <!-- article header -->
        <header class="article-header flex wrap">
          <section>
            <h2 class="art-heading">
              <?php echo $page['art_title']; ?>
            </h2>
          </section>
          <section class="image">
            <img class="featured-img" src="images/<?php echo $page['img'];?>" alt="<?php echo $page['alt'];?>" height="660" width="990" />
          </section>
        </header>
        <!-- article content -->
        <section id="article-body">
          <?php 
          echo $page['content']; 
          if ($page['actions']) {
          ?>
          <div id="actions">
            <?php
              $actions = $page['actions'];
              foreach ($actions as $action) {
              ?>
              <h3><a class="hover-green-light" href="<?php echo $action['href'];?>"><?php echo $action['content'];?></a></h3>  
              
              <?php
            }
            ?>
          </div>
          <?php } ?>
        </section>  
        
      </article>
    </section>
    <!-- end left column -->
    <?php include 'inc/aside.php'; ?>
    <!-- end outer div and main -->
    
</main>
<hr class="divider" />

<!-- footer -->
<?php include 'inc/footer.php'; ?>


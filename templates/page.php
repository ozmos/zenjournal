<?php
include 'inc/html_head.php';
include 'inc/header.php';
?>

<main class="outer flex wrap page">
  <!-- left column -->
    <section class="row">
    <!-- main content -->
      <article class="blog-article card" id="<?php echo $page['id'];?>">
      <!-- article header -->
        <div class="article-header flex wrap">
          <section>
            <h2 class="art-heading">
              <?php echo $page['art_title']; ?>
            </h2>
            <h3 class="art-subheading">
              <?php if ($page['subtitle']) {
                echo $page['subtitle']; 
              }?> 
            </h3>
          </section>
          <section class="image">
            <?php
            if ($page['img']) {
              ?>
            <img class="featured-img" src="images/<?php echo $page['img'];?>" alt="<?php echo $page['alt'];?>"  />
            <?php
            }
            ?>
          </section>
        </div>
        <!-- article content -->
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
          
        
      </article>
    </section>
    <!-- end left column -->
    <?php include 'inc/aside.php'; ?>
    <?php include 'inc/author.php'; ?>
    <!-- end outer div and main -->
    
</main>
<hr class="divider" />

<!-- footer -->
<?php include 'inc/footer.php'; ?>


<?php
include 'inc/html_head.php';
include 'inc/header.php';
$page_title = $page['id'] === 'home' 
? '<h2 class="art-heading">' . $page['art_title'] . '</h2>'
: '<h1 class="art-heading">' . $page['art_title'] . '</h1>';
?>

<main class="outer flex wrap page">
  <!-- left column -->
    <section class="row">
    <!-- main content -->
      <article id="page-content" class="blog-article card">
      <!-- article header -->
        <div class="article-header flex wrap">
          <section>
            <?php 
            echo $page_title;
            if ($page['subtitle']) {
              ?>
            <strong class="art-subheading">
              <?php
                echo $page['subtitle']; 
              ?> 
            </strong>
            <?php
            }
            ?>
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
    <hr />
    <!-- end left column -->
    <?php 
   
    include 'inc/aside.php'; ?>
  
    <!-- end outer div and main -->
    
</main>
<hr class="divider" />

<!-- footer -->
<?php include 'inc/footer.php'; ?>


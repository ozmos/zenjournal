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
        <div class="article-header hero flex-centered">
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
            <?php
             if ($page['actions']) {
            ?>
            <div id="actions" class="flex-centered wrap">
              <?php
                $actions = $page['actions'];
                foreach ($actions as $action) {
                ?>
                <strong class="action-links" ><a class="hover-green-dark" href="<?php echo $action['href'];?>"><?php echo $action['content'];?></a></strong>  
                
                <?php
              }
              ?>
            </div>
            <?php } ?>
          </section>
        </div>
        <!-- article content -->
        <?php 
          echo $page['content']; 
        ?>
      
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


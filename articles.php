<?php
include 'inc/post_data.php';
$page = $post_data['articles'];
include 'inc/html_head.php';
include 'inc/header.php';
include 'inc/utility.php';
?>

<main class="outer flex wrap">
  <!-- left column -->
    <section class="col-9">
    <!-- main content -->
      <article class="feed card" id="content">
      <!-- article header -->
        <div class="article-header">
            <h1 class="art-heading">
              <?php echo $page['art_title']; ?>
            </h1>
        </div>
        <!-- article content -->
        <?php echo $page['content']; ?>
      </article>
      <hr />

      <!-- display all posts -->
      <?php
      foreach ($blogs as $preview) {
        ?>
        <article class="card">
        <div class="article-header flex wrap">
          <section>
            <h2 class="art-heading">
              <?php echo $preview['art_title']; ?>
            </h2>
            <h3 class="art-subheading">
              <?php echo $preview['auth'] . ', ' . $preview['date']; ?> 
            </h3>
          </section>
          <section class="image">
              <img src="images/<?php echo $preview['img'];?>" alt="<?php echo $preview['alt'];?>" height="660" width="990"/>
          </section>
          
        </div>
        <section class="blog">
          <p>
          <?php 
          
          echo exerpt($preview['content'], 400) . '<a class="hover-green-light" href="' . $preview['id'] . '.php"> ...Continue reading ' . $preview['art_title'] . '</a>'; 
          ?>
          </p>
        </section>
      </article>
      <hr />
      <?php
      }
      ?>
    </section>
    <!-- end left column -->
    <?php include 'inc/aside.php'; ?>
    <!-- end outer div and main -->
    
</main>
<hr class="divider" />

<!-- footer -->
<?php include 'inc/footer.php'; ?>


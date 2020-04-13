<?php
include 'inc/post_data.php';
$page = $post_data['blog'];
include 'inc/html_head.php';
include 'inc/header.php';
?>

<main class="outer flex wrap">
  <!-- left column -->
    <section class="col-8">
    <!-- main content -->
      <article class="feed card">
      <!-- article header -->
        <div class="article-header">
            <h2>
              <?php echo $page['art_title']; ?>
            </h2>
        </div>
        <!-- article content -->
        <?php echo $page['content']; ?>
      </article>

      <!-- display all posts -->
      <?php
      foreach ($blogs as $preview) {
        ?>
        <article class="card">
        <div class="article-header flex wrap">
          <section>
            <h3 class="art-heading">
              <a class="hover-green-dark" href="<?php echo $preview['id']?>.php">
              <?php echo $preview['art_title']; ?>
              </a>
            </h3>
            <h4 class="art-subheading">
              <?php echo $preview['auth'] . ', ' . $preview['date']; ?> 
            </h4>
          </section>
               
        </div>
        <section class="blog">
          <?php echo substr($preview['content'], 0, 400) . '<a class="hover-green-light" href="' . $preview['id'] . '.php"> ...Continue reading</a>'; ?>
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


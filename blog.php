<?php
include 'inc/post_data.php';
$page = $post_data['blog'];
include 'inc/html_head.php';
include 'inc/header.php';
?>

<main class="outer flex wrap">
  <!-- left column -->
    <section class="row">
    <!-- main content -->
      <article id="page-content" class="feed card">
      <!-- article header -->
        <div class="article-header">
            <h1>
              <?php echo $page['art_title']; ?>
            </h1>
            <?php
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
        </div>
        <!-- article content -->
      </article>

      <!-- display all posts -->
      <?php
      foreach ($blogs as $preview) {
        ?>
        <article class="card">
        <div class="article-header flex wrap">
          <section>
            <h2 class="art-heading">
              <a class="hover-green-dark" href="<?php echo $preview['id']?>.php">
              <?php echo $preview['art_title']; ?>
              </a>
            </h2>
            <h3 class="art-subheading">
              <?php echo $preview['auth'] . ', ' . $preview['date']; ?> 
            </h3>
          </section>
               
        </div>
        <section class="blog">
          <?php echo $preview['description'] . '<a class="hover-green-light" href="' . $preview['id'] . '.php"> ...Continue reading</a>'; ?>
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


<?php
include 'inc/post_data.php';
$page = $post_data['contact'];
include 'inc/html_head.php';
include 'inc/header.php';
?>

<main class="outer">
 
    <!-- main content -->
      <article class="blog-article card">
      <!-- article header -->
        <div class="article-header flex wrap">
          <section class="article-header">
            <h2>
              <?php echo $page['art_title']; ?>
            </h2>
          </section>
        </div>
        <!-- article content -->
            <form action="process.php" method="post" id="contact-form">
                <div class="elem-group">
                <label for="name">*Your Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" pattern="[A-Z\sa-z]{3,20}" title="Name should only contain letters and spaces" required>
                </div>
                <div class="elem-group">
                <label for="m77">*Your Email</label>
                <input type="email" id="m66" name="m66" placeholder="Your Valid Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255"/>
                <input type="email" id="m77" name="m77" placeholder="john.doe@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255" title="Please provide a valid email address" required>
                </div>
                <div class="elem-group">
                <label for="message">*Your message</label>
                <textarea id="message" name="message" placeholder="Letters, numbers, spaces and punctuation only please" rows="6" minlength="10" maxlength="500" required></textarea>
                </div>
                <input class="hover-green-dark" id="submit" type="submit" value="submit" />
            </form>
      </article>
   
   
    
</main>
<hr class="divider" />

<!-- footer -->
<?php include 'inc/footer.php'; ?>


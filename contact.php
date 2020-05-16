<?php
include 'inc/post_data.php';
$page = $post_data['contact'];
include 'inc/html_head.php';
include 'inc/header.php';
$scripts = ['form/validateForm'];
?>
<main class="outer">
    <!-- main content -->
    <article class="blog-article card" id="content">
        <!-- article header -->
        <div class="article-header flex wrap">
            <section class="article-header">
                <h1>
                    <?php echo $page['art_title']; ?>
                </h1>
            </section>
        </div>
        <!-- article content -->
        <form action="process.php" method="post" id="contact-form">
            
                <label for="name">*Your Name (Letters, commas, spaces, hyphens and full-stops only, 3 to 40 characters)</label>
                <input type="text" id="name" name="name" placeholder="John Doe" pattern="[A-Z\sa-z,.-]{3,40}" minlength="3" maxLength="40" title="Letters, commas, spaces, hyphens and full-stops only" data-message="name" required>
            
            
                <!-- <label for="m66" class="hidden" aria-hidden="true">*Your Email</label>
                <input class="hidden" type="email" id="m66" name="m66" placeholder="Your Valid Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255" /> -->
                <label for="email">*Your Email (valid email address only, 8 to 255 characters)</label>
                <input type="email" id="email" name="email" placeholder="john.doe@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255" data-message="email" title="Please provide a valid email address" required>
            
            
                <label for="message">*Your message (Letters, numbers, spaces, question marks, full stops, commas and apostraphes only, 10 to 500 characters)</label>
                <textarea id="message" name="message" placeholder="Your message" rows="6" minlength="10" maxlength="500" data-message="message" title="Letters, numbers, spaces and puncuation only please" required></textarea>
                <p>* Required</p>
            
                <input class="hover-green-dark" id="submit" type="submit" role="button" value="submit" />
            
        </form>
    </article>
</main>
<hr class="divider" />
<!-- footer -->

<?php include 'inc/footer.php'; ?>
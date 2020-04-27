

  <!-- header -->
<header class="flex site-header" >
  <!-- I have opted not to place the site logo in a h1 tag. See https://stackoverflow.com/questions/665037/replacing-h1-text-with-a-logo-image-best-method-for-seo-and-accessibility -->
  <a id="skip-to-content" href="#page-content">Skip to Content</a>
  <a class="site-logo hover-green-dark" href="https://samadhijournal.com/findability">
    <img src="https://samadhijournal.com/findability/images/logo.svg" alt="Site logo showing a magnifying glass over a globe">
  </a>
  <div class="headings">
    <!-- site title and tagline -->
    <?php 
    $site_title = $page['id'] === 'home' ? '<h1 class="site-title">Findability Mini Website</h1>' : '<strong class="site-title">Findability Mini Website</strong>';
    echo $site_title;
    ?>
    <p class="site-description">Quality information to help your SEO and website findabilty</p>
  </div>
</header>

<!-- navigation -->
  <nav class="flex">
    <ul class="nav-list wrap dropdown-content" id="nav">
      <!-- home -->
      <li class="nav-item">
        <a class="hover-green-dark" href="index.php">Home</a>
      </li>
      <!-- blog -->
      <li class="nav-item">
        <a class="hover-green-dark" href="blog.php">Blog</a>
      </li>
      <!-- best practices -->
      <li class="nav-item">
        <a class="hover-green-dark" href="seo_best_practices.php">Best Practies</a>
      </li>
      <!-- research topic -->
      <li class="nav-item">
        <a class="hover-green-dark" href="google_search_console.php">Research Topic</a>
      </li>
      <!-- resources -->
      <li class="nav-item">
        <a class="hover-green-dark" href="resources.php">Resources</a>
      </li>
      <!-- Glossary -->
      <li class="nav-item">
        <a class="hover-green-dark" href="glossary.php">Glossary</a>
      </li>
      <!-- About -->
      <li class="nav-item">
        <a class="hover-green-dark" href="about.php">About</a>
      </li>
      <!-- Contact -->
      <li class="nav-item">
        <a class="hover-green-dark" href="contact.php">Contact</a>
      </li>
      <!-- Sitemap -->
    </ul>
    <div id="menu-toggle" class="dropbtn">
      <div class="hamburger top">
      </div>
      <div class="hamburger top">
      </div>
      <div class="hamburger">
      </div>
    </div>
  </nav>
 

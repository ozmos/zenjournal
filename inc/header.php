<!-- header -->
<header class="flex site-header">
  <a id="skip-to-content" href="#content">Skip to Content</a>
  <a class="hidden" id="skip-to-nav" href="#nav">Skip to Navigation</a>
  <a class="site-logo hover-green-dark" href="https://samadhijournal.com">
    <img src="https://samadhijournal.com/images/logo.svg" alt="Site logo cloud image">
  </a>
    <div class="headings">
      <!-- php -->
      <?php 
    $site_title = $page['id'] === 'home' ? '<h1 class="site-title">Samadhi Journal</h1>' : '<strong class="site-title">Samadhi Journal</strong>';
    echo $site_title;
    ?>
        <p class="site-description">Reflections and instructions in mindfulness meditation</p>
    </div>
</header>
<!-- navigation -->

 <nav class="flex">
     <div tabindex=0 id="menu-toggle" class="dropbtn" role="button" aria-pressed="false" aria-expanded="false" aria-label="menu-toggle">
        <div class="hamburger top">
        </div>
        <div class="hamburger top">
        </div>
        <div class="hamburger">
        </div>
    </div>
    <ul class="nav-list wrap dropdown-content" id="nav">
        <li class="nav-item">
            <a class="hover-green-dark" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="hover-green-dark" href="intro.php">What is Mindfulness?</a>
        </li>
        <li class="nav-item">
            <a class="hover-green-dark" href="articles.php">Articles</a>
        </li>
         <li class="nav-item">
            <a class="hover-green-dark" href="guided-meditation.php">Guided Meditation</a>
        </li>
        <li class="nav-item">
            <a class="hover-green-dark" href="contact.php">Contact</a>
        </li>
        <!-- <li class="nav-item">
            <a class="hover-green-dark" href="findability/index.php">Findablity</a>
        </li> -->
    </ul>
   
</nav>
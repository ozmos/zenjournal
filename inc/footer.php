  <footer class="flex wrap">
  <section>
        <?php include 'inc/sitemap.php'; ?>
      </section>
      <section>
        <?php include 'inc/creative_commons.php'; ?>
      </section>
      <section class="text-centered">
              <a href="https://pcwebsites.com.au" target="blank">Perth Custom Websites</a>
      </section>
      
  </footer>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js"></script>
  <?php


foreach (glob("js/*.js") as $filename)
{
    echo '<script src="'. $filename . '"></script>';
}


  ?>
  
</body>
</html>

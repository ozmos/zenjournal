<!-- right column -->
<aside class="col-4">
  <article class="card">
    <h2>Featured articles</h2>
    
    <!-- display blog posts -->
    <ul>
    <?php 
    
    foreach ($blogs as $blog) {
      ?>
      <li>
        <h3><a class="hover-green-light" href="<?php echo $blog['id'];?>.php"><?php echo $blog['art_title'];?></a></h3>
        <h4><?php echo $blog['auth'] . ', ' . $blog['date']; ?></h4>
      </li>
      <?php
    }
   ?>
      
     
    </ul>
  </article>
</aside>
    <!-- end right column -->
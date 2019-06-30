<!-- right column -->
<aside class="col-4">
  <article id="about" class="about card">
    <h2>About me</h2>
    <img src="images/profile.jpg" alt="picture of the author" />
    <p>
      Hi, I'm Osamu.  I've been meditating my whole adult life, following both the Theravada Buddhist and secular traditions.  While I'm not an expert I hope I can offer some valuable insights gained from my experiences in meditation. 
    </p>  
  </article>
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
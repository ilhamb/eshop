<?php
  require "products.php";
 ?>

<!-- Template loading -->
<?php
  require "template/nav.php";
  require "template/header.php";
 ?>
 <?php
    $product = $products[$_GET["index"]];
  ?>
 <!-- Main Content -->
 <main class="container my-5">
   <h2><?php echo $product["name"]; ?></h2>
   <p><?php echo $product["description"]; ?></p>
 </main>

 <!-- Footer loading -->
 <?php
   require "template/footer.php";
  ?>
  

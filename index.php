  <?php
    require "template/infos.php";
    $bdd = new PDO('mysql:host=localhost;dbname=correctionphp;charset=utf8', 'root', 'root');
    $reponse = $bdd->query("SELECT * FROM product");
    $products = $reponse->fetchall(PDO::FETCH_ASSOC);
   ?>

  <!-- Template loading -->
  <?php
    require "template/nav.php";
    require "template/header.php";
   ?>

   <!-- Start of Main Content -->
   <main class="container my-5">
     <h2>Accueil</h2>
     <?php
        foreach ($products as $key => $product) {
     ?>
     <div class="card">
       <img class="card-img-top" src=".../100px200/" alt="Card image cap">
       <div class="card-body">
         <h5 class="card-title"><?php echo $product["name"]; ?></h5>
         <p class="card-text"><?php echo $product["description"]; ?></p>
         <p class="card-text"><small class="text-muted"><a href=<?php echo "single.php?index=" . $product['id']?>>Voir le produit</a></small></p>
     </div>
      <?php
        }
      ?>
    </main>
  <!-- End of Main -->

  <!-- Template Loading -->
  <?php
  include "template/footer.php";
  ?>

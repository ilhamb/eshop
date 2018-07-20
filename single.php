<?php
  $bdd = new PDO('mysql:host=localhost;dbname=correctionphp;charset=utf8', 'root', 'root');
  $id = $_GET["index"];
  $reponse = $bdd->prepare("SELECT * FROM product WHERE id=?");
  $reponse->execute([$id]);
  $products = $reponse->fetchall(PDO::FETCH_ASSOC);
  $product = $products[0];
  require "template/infos.php";
 ?>

<!-- Template loading -->
<?php
  require "template/nav.php";
  require "template/header.php";
 ?>
 <!-- Main Content -->
 <main class="container my-5">
   <h2>
     <?php
     echo $product["name"];
     ?>
   </h2>
   <p>
     <?php
     echo $product["price"];
     echo $product["stock"];
     echo $product["description"];
     echo $product["madein"];
     ?>
   </p>
 </main>

 <!-- Footer loading -->
 <?php
   require "template/footer.php";
  ?>

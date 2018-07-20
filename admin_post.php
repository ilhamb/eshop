<?php
  var_dump($_POST);
  $bdd = new PDO('mysql:host=localhost;dbname=correctionphp;charset=utf8', 'root', 'root');
  $add = $bdd->prepare('INSERT INTO product(name, price, stock, description, category, madein)
                        VALUES(:nom, :prix, :stock, :description, :categorie, :madein)');
  $add->execute(array(
  	'nom' => htmlspecialchars($_POST["nom"]),
  	'prix' => htmlspecialchars($_POST["prix"]),
  	'stock' => htmlspecialchars($_POST["stock"]),
  	'description' => htmlspecialchars($_POST["description"]),
    'categorie' => htmlspecialchars($_POST["categorie"]),
  	'madein' => htmlspecialchars($_POST["madein"])
    	));

    header('Location: admin.php');
  exit;
?>

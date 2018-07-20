<?php
  require "template/infos.php";
?>

<!-- Template loading -->
<?php
  require "template/nav.php";
  require "template/header.php";
 ?>

<!-- Formulaire d'ajout -->
<form class="container" action="admin_post.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom</label>
    <input type="text" name="nom" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Prix</label>
    <input type="text" name="prix" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <input type="radio" name="stock" value="1">Disponible
    <input type="radio" name="stock" value="0">Indisponible
  </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Catégorie</label>
    <input type="text" class="form-control" name="categorie" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Made in</label>
    <input type="text" class="form-control" name="madein" id="exampleFormControlInput1">
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<!-- Template Loading -->
<?php
include "template/footer.php";
?>

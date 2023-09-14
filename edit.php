<?php
require "inc/header.php";
$cid = (isset($_GET['p']))?$_GET['p']:NULL;
// get Data 
$prod = getProductById($cid);

print_r($prod) ;


?>


<form action="update.php" method="post"  class="row g-3 needs-validation" >
  <div class="col-md-4">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="nom" value="<?= $prod['nom'] ?>" class="form-control" id="nom" >

  </div>
  <div class="col-md-4">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" value="<?= $prod['price'] ?>" class="form-control" id="price">
   
  </div>
  <div class="col-md-4">
    <label for="qty" class="form-label">QTY</label>
      <input type="number" name="qty" value="<?= $prod['qty'] ?>"  class="form-control" id="qty" >
    </div>
  </div>
    <input type="hidden" name="send" value="ok">
    <input type="hidden" name="cid" value="<?= $prod['id'] ?>" >
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Save</button>
  </div>
</form>



<?php

require "inc/footer.php";

?>
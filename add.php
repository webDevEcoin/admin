<?php
require "inc/header.php";
$data['nom'] = (isset($_POST['nom']))?$_POST['nom']:NULL;
$data['price'] = (isset($_POST['price']))?$_POST['price']:NULL;
$data['qty'] = (isset($_POST['qty']))?$_POST['qty']:NULL;
$send = (isset($_POST['send']))?$_POST['send']:NULL;

if($send=="ok"){
    $add = add($data) ; // 
    if ($add==1):  ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     
      <strong>Bravvooooooo</strong> You should check in on some of those fields below.
     </div>
      
 <?php
  header("Location:index.php") ;
endif;
}

?>


<form action="" method="post"  class="row g-3 needs-validation" >
  <div class="col-md-4">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom" >

  </div>
  <div class="col-md-4">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" class="form-control" id="price">
   
  </div>
  <div class="col-md-4">
    <label for="qty" class="form-label">QTY</label>
      <input type="number" name="qty" class="form-control" id="qty" >
    </div>
  </div>
    <input type="hidden" name="send" value="ok">
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Save</button>
  </div>
</form>



<?php

require "inc/footer.php";

?>
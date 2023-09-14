
<?php
require "inc/function.php";

$data['nom'] = (isset($_POST['nom']))?$_POST['nom']:NULL;
$data['price'] = (isset($_POST['price']))?$_POST['price']:NULL;
$data['qty'] = (isset($_POST['qty']))?$_POST['qty']:NULL;
$data['cid'] = (isset($_POST['cid']))?$_POST['cid']:NULL;
$send = (isset($_POST['send']))?$_POST['send']:NULL; 

 if($send=="ok"){
    $add = update($data) ; // 
    if ($add==1):  ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     
      <strong>Bravvooooooo</strong> You should check in on some of those fields below.
     </div>
      
 <?php
  header("Location:index.php") ;
endif ;
} 


?>
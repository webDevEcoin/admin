<?php

require "inc/header.php";

?>


<form  class="row g-3 needs-validation" >
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
      <input type="number" class="form-control" id="qty" >
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Save</button>
  </div>
</form>



<?php

require "inc/footer.php";

?>
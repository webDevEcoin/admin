<?php
require "inc/header.php";
$datas = getAllProducts();
$message = (isset($_GET['msg']))?$_GET['msg']:NULL;
if($message) echo "<h1>$message</h1>";
?>


<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php   
foreach($datas as $data):
?>
            <tr class="">
                <td><?= $data['id']   ?></td>
                <td><?= $data['nom']   ?></td>
                <td><?= $data['price']   ?></td>
                <td><?= $data['qty']   ?></td>
                <td>
                    <a class="btn btn-primary btn-sm " href="edit.php?p=<?= $data['id']   ?>" role="button"> 
                    <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a class="btn btn-danger btn-sm " href="delete.php?p=<?= $data['id']   ?>" role="button"> 
                    <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php   
endforeach;
?> 
        </tbody>
    </table>
</div>



<?php

require "inc/footer.php";

?>
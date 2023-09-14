<?php

require "inc/header.php";

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
            <tr class="">
                <td>R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
                <td>R1C3</td>
                <td>
                    <a class="btn btn-primary btn-sm " href="#" role="button"> 
                    <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a class="btn btn-danger btn-sm " href="#" role="button"> 
                    <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
           
        </tbody>
    </table>
</div>



<?php

require "inc/footer.php";

?>
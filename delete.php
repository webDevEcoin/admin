<?php
require 'inc/function.php';
$cid = (isset($_GET['p']))?$_GET['p']:NULL;
$res = delete($cid);

if($res == 1 ) {
    $msg = 'Hiiiiiii';
    header("Location:index.php?msg=".$msg);
}else {
    $msg = 'Nooooooooo';
    header("Location:index.php?msg=".$msg);  
}

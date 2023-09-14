<?php 

require "config.php";


function add(Array $data){
    global $connect;
    $sql ="INSERT INTO products(id,nom,price,qty) 
    VALUES(NULL,'{$data['nom']}',{$data['price']},{$data['qty']})";
    $q = mysqli_query($connect,$sql);
    if($q)  return 1;
    else return 0;
}


function getAllProducts(){
    global $connect;
    $sql ="SELECT * FROM products";
    $q = mysqli_query($connect,$sql);
    $num  = mysqli_num_rows($q);
    if($num>0){
        return mysqli_fetch_all($q,MYSQLI_ASSOC);
    }else return[];
}


function delete($id){
    global $connect;
    $check = idExist($id);
    if($check){
        $sql ="DELETE FROM products WHERE id= $id";
        $q = mysqli_query($connect,$sql);
        if($q) return 1;
    }else return 0;
}

function idExist($id){
    global $connect;
    $sql ="SELECT id FROM products where id = $id";
    $q = mysqli_query($connect,$sql);
    $num  = mysqli_num_rows($q);
    if($num >0) return 1;
    else return 0;
}





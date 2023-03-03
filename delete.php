<?php 

$db = mysqli_connect("localhost", "root", "", "data");
if(!$db){
    die('error in db' . mysqli_error(mysqli_connect("localhost", "root", "", "data")));
}

$id = $_GET['id'];

$qry = "DELETE FROM php_crud WHERE id = $id";
if(mysqli_query($db,$qry)){
    header('location: index.php');
}else{
    echo mysqli_error($db);
}

?>
<?php 

include_once('../models/config.php');
include_once('../models/Users.php');

$crud=new crud();
if(isset($_GET['userid'])){
    $id=$_GET['userid'];
    $result=$crud->Deleteid($id,$conn);
    if($result){
        echo "<script>alert('User deleted succfully ! :( ')</script>";
        header('Location: ../index.php');
    }
}

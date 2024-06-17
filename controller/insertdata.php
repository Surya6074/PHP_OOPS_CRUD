<?php 

include_once('../models/config.php');
include_once('../models/Users.php');
include_once('./data.php');


$data=new data($name,$email,$phno,$password ,$filename ,$dob ,$gender,$hobbies,$time,$age,$lang,$description);

$crud=new crud();

$res=$crud->insert($data->name,$data->email,$data->phno,$data->password ,$data->filename ,$data->dob ,$data->gender,$data->hobbies,$data->time,$data->age,$data->lang,$data->description,$conn);

if($res){
    echo "<script>alert('User created successfully ! :)')</script>";
    header('Location: ../index.php');
}

<?php

define('hostname','localhost');
define('dbname','crud_data');
define('username','root');
define('password','');


$conn=new mysqli(hostname,username,password,dbname);

if($conn->connect_errno){
    echo "connection failed !".$conn->connect_error;
} 
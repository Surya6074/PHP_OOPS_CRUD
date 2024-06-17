<?php
include_once('../models/Users.php');
include_once('../models/config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$password = md5($_POST['password']);
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$time = $_POST['time'];
$age = $_POST['age'];
$lang = $_POST['lang'];
$description = $_POST['description'];
$hob = $_POST['Hobbies'];
$hobbies=implode(',',$hob);

if ($_FILES["image"]["error"] > 0)
{
  echo "Error: " . $_FILES["image"]["error"] . "<br>";
}else{
$filename=time().$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" .$filename);
}



class data{


public $name;
public $email;
public $phno;
public $password ;
public $filename ;
public $dob ;
public $gender ;
public $hobbies;
public $time;
public $age;
public $lang;
public $description;

public function __construct($name,$email,$phno,$password ,$filename ,$dob ,$gender,$hobbies,$time,$age,$lang,$description)
{
$this->name =$name;
$this->email= $email;
$this->phno = $phno;
$this->password = $password;
$this->filename = $filename;
$this->dob =$dob;
$this->gender =$gender;
$this->hobbies = $hobbies;
$this->time = $time;
$this->age =$age;
$this->lang = $lang;
$this->description = $description;
}
}




// inserting a data

// $crud->insert($data->name,$data->email,$data->phno,$data->password ,$data->filename ,$data->dob ,$data->gender,$data->hobbies,$data->time,$data->age,$data->lang,$data->description,$conn);


// select a all data

// $result=$crud->selectdata($conn);
// if(mysqli_num_rows($result)>0){
// while($row=mysqli_fetch_assoc($result)){
//         echo "<pre>";
//         print($row);
//         echo "</pre>";
//     }
// }


// select a specific data

// $result=$crud->selectiddata(2,$conn);
// if(mysqli_num_rows($result)>0){
// while($row=mysqli_fetch_assoc($result)){
//         echo "<pre>";
//         print_r($row);
//         echo "</pre>";
//     }
// }
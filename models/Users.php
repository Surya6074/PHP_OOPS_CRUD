<?php


class crud{

    // inserting a data
    public function insert($name,$email,$phno,$password ,$filename ,$dob ,$gender,$hobbies,$time,$age,$lang,$description,$conn){
        $insertquery="INSERT INTO `data`(`name`, `email`, `phno`, `password`, `age`, `time`, `hobbies`, `filename`, `lang`, `description`, `dob`, `gender`) VALUES ('$name','$email','$phno','$password','$age','$time','$hobbies','$filename','$lang','$description','$dob','$gender')";
        // var_dump($insertquery);
        $result=mysqli_query($conn,$insertquery);
        if($result){
            echo "<script>console.log('User created successfully ! :)')</script>";
        }
        return $result;
    }

    // update a data using id

    public function updateid($name,$email,$phno,$password ,$filename ,$dob ,$gender,$hobbies,$time,$age,$lang,$description,$conn,$id){
        $update="UPDATE `data` SET `name`='$name',`email`='$email',`phno`='$phno',`password`='$password',`age`='$age',`time`='$time',`hobbies`='$hobbies',`filename`='$filename',`lang`='$lang',`description`='$description',`dob`='$dob',`gender`='$gender' WHERE id=".$id;
        $result=mysqli_query($conn,$update);
        if($result){
            echo "<script>console.log('User a data Edited succesfully ! :)')</script>";
        }
        return $result;
    }

    // select a data 
    public function select($conn){
        $selectquery="SELECT * FROM `data`";
        $result=mysqli_query($conn,$selectquery);
        if($result){
            echo "<script>console.log('I Read all data successfully!')</script>";
        }
        return $result;
    }

    // select a specific data using id
    public function selectid($id,$conn){
        $selectidquery="SELECT * FROM `data` WHERE id=".$id;
        $result=mysqli_query($conn,$selectidquery);
        if($result){
            echo "<script>console.log('User select data succesfully ! :)')</script>";
        }
        return $result;
    }

    // Delete a data using id

    public function Deleteid($id,$conn){
        $deletequery="DELETE FROM `data` WHERE id=".$id;
        $result=mysqli_query($conn,$deletequery);
        if($result){
            echo "<script>console.log('User Delete successfully ! :( ')</script>";
        }
        return $result;
    }
}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Bootstrap links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>


<body style="height: 100vh; width: 100vw">

<?php 
include_once('./models/Users.php');
include_once('./models/config.php');

$crud=new crud();

if(isset($_GET['userid'])){
    $id=$_GET['userid'];
    $result=$crud->selectid($id,$conn);
    if(mysqli_num_rows($result)==1){
        while($row=mysqli_fetch_assoc($result)){

?>
    <div class="container p-5 d-flex flex-column justify-content-center align-items-center">
        <h1>User Details</h1>
      <div class="mt-4">
        <img src="./upload/<?= $row['filename']?>" alt="userimage" height="300px" width="300px" />
      </div>
      <div class="container d-flex flex-row">
        <div
          class="container d-flex justify-content-center flex-column align-items-center">
          <h2>Name : <span><?= $row['name'] ?></span></h2>
          <h2>DOB : <span><?= $row['dob'] ?></span></h2>
          <h2>Age : <span><?= $row['age'] ?></span></h2>
          <h2>Gender : <span><?= $row['gender'] ?></span></h2>
          <h2>Phone Number : <span><?= $row['phno'] ?></span></h2>
        </div>
        <div
          class="container d-flex justify-content-center flex-column align-items-center"
        >
          <h2>Email : <span><?= $row['email'] ?></span></h2>
          <h2>Password : <span>*************</span></h2>
          <h2>Language : <span><?= $row['lang'] ?></span></h2>
          <h2>Hobbies : <span><?= $row['hobbies'] ?></span></h2>
          <h2>Time : <span><?= $row['time'] ?></span></h2>
        </div>
      </div>
      <h2 class="mt-4">
        Description :
        <span><?= $row['description'] ?></span>
      </h2>
      <div class="mt-5">
        <a href="index.php" class="btn btn-primary">Back</a>
      </div>
    </div>
<?php         
        }
    }else{
      echo "<script>alert('there is no record :(')</script>";
    }
}
?>
  </body>

  <style>
    /* input {
      margin: 10px 6px;
    } */
    .inp {
      margin: 10px 6px;
    }
    h2 {
      margin: 10px;
      font-size: 20px;
    }
    span {
      color: rgb(119, 119, 119);
      font-weight: 100;
    }
  </style>
</html>

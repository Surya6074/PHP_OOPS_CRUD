<?php
include_once('./models/config.php');
include('./components/header.php');  
include_once('./models/Users.php');
?>

<body class="container d-flex justify-content-center">
    <?php
      if(isset($_GET['s'])){
        $s=$_GET['s'];
        if($s==1){
          echo "<div id='alert' class='alert alert-success' role='alert'>Data inserted successfully! </div>";
        }elseif($s==2){
          echo "<div id='alert' class='alert alert-success' role='alert'>Data Edited successfully! </div>";
        }elseif($s==3){
          echo "<div id='alert' class='alert alert-success' role='alert'>Data Deleted successfully! </div>";
        }else{
          echo "<div id='alert' class='alert alert-danger' role='alert'>Some Error :(</div>";
        }
      }
    ?>
    <div class="container m-5">
      <div class="container d-flex justify-content-between my-3">
        <h1>Student Data</h1>
        <a href="<?= $url?>student.php" style="height: 40px; width:80px" class="btn btn-primary p-2">Add <i class="bi bi-plus-lg"></i></a>
      </div>
      <table class="table table-striped text-center">
         <th>
            <td>Id</td> 
            <td>Name</td> 
            <td>Email</td> 
            <td>Actions</td> 
         </th>

         <?php  
          $crud=new crud();

          $result=$crud->select($conn);
          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td></td>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo '<td><a href="'.$url.'view.php?userid='.$row['id'].'" class="btn btn-secondary mx-2">View <i class="bi bi-eye"></i> </a><a href="'.$url.'edit.php?userid='.$row['id'].'" class="btn btn-primary mx-2">Edit <i class="bi bi-pencil-square"></i></a><a href="'.$url.'controller/delete.php?userid='.$row['id'].'" onclick="test()" class="btn btn-danger mx-2">Delete <i class="bi bi-trash-fill"></i></a></td>';
              echo "</tr>";
            }
          }else{
            echo "<script>alert('there is no record :(')</script>";
          }
         
         ?>
  
      </table>
    </div>
  </body>

<?php include('./components/footer.php');?>

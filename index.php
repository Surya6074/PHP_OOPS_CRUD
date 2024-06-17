<?php include('./components/header.php');  
include_once('./models/Users.php');
include_once('./models/config.php');
?>

<body class="container d-flex justify-content-center">
    <div class="container m-5">
      <div class="container d-flex justify-content-between my-3">
        <h1>Student Data</h1>
        <a href="./student.php" style="height: 40px; width:80px" class="btn btn-primary p-2">Add <i class="bi bi-plus-lg"></i></a>
      </div>
      <table class="table table-striped text-center">
         <th>
            <td>id</td> 
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
              echo '<td><a href="view.php?userid='.$row['id'].'" class="btn btn-secondary mx-2">view <i class="bi bi-eye"></i> </a><a href="./edit.php?userid='.$row['id'].'" class="btn btn-primary mx-2">Edit <i class="bi bi-pencil-square"></i></a><a href="./controller/delete.php?userid='.$row['id'].'" onclick="test()" class="btn btn-danger mx-2">Delete <i class="bi bi-trash-fill"></i></a></td>';
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

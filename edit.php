<?php include('./components/header.php');
include_once('./models/Users.php');
include_once('./models/config.php');

if(isset($_GET['userid'])){
    $id=$_GET['userid'];
$crud= new crud();
$result=$crud->selectid($id,$conn);
if(mysqli_num_rows($result)==1){
    while($row=mysqli_fetch_assoc($result)){    
?>
<body class="container d-flex justify-content-center">
  <form
    method="post"
    action="./controller/edituser.php"
    class="container my-5"
    enctype="multipart/form-data"
  >
        <input type="hidden" name="userid" value="<?= $row['id']?>">
    <div class="container d-flex justify-content-center">
      <h1>Edit student</h1>
    </div>
    <div class="container d-flex flex-row">
      <div class="container d-flex flex-column">
        <div class="inp">
          <label for="formControlInput" class="form-label">Enter a name</label>
          <input
            type="text"
            class="form-control"
            name="name"
            id="formControlInput"
            placeholder="Enter a Name"
            value="<?= $row['name']?>"
            required
          />
        </div>
        <div class="inp">
          <label for="formControlInput" class="form-label">Date of Birth</label>
          <input
            id="formControlInput"
            type="date"
            class="form-control"
            name="dob"
            value="<?= $row['dob']?>"
            required
            placeholder="Enter a DOB"
          />
        </div>

        <div class="inp">
          <label for="formControlInput" class="form-label">Email address</label>

          <input
            id="formControlInput"
            type="email"
            class="form-control"
            name="email"
            required
            value="<?= $row['email']?>"
            placeholder="Enter a Email"
          />
        </div>

        <div class="inp">
          <label for="formControlInput" class="form-label">Password</label>

          <input
            id="formControlInput"
            type="password"
            class="form-control"
            required
            value="<?= $row['password']?>"
            name="password"
            placeholder="Enter a password"
          />
        </div>

        <div class="inp">
          <label for="formControlInput" class="form-label">Phone no</label>

          <input
            id="formControlInput"
            type="number"
            required
            class="form-control"
            name="phno"
            value="<?= $row['phno']?>"
            placeholder="Enter a Phone no"
          />

          <div class="inp">
            <label for="formControlInput" class="form-label"
              >Select ur image</label
            >
            <input
              id="formControlInput"
              type="text"
              class="form-control"
              name="image"
              value="<?= $row['filename']?>"
              placeholder="ur image"
              required
            />
          </div>
        </div>
      </div>
      <div class="container d-flex flex-column">
        <div class="my-3 mx-3 d-flex text-center flex-row">
          <b>Gender :</b>
          <?php 
          if($row['gender']=="male"){
            ?>
            <div class="mx-4">
            <input
              type="radio"
              class="form-check-input"
              name="gender"
              value="male" checked
            />male
            <input
              type="radio"
              class="form-check-input"
              name="gender"
              value="female"
            />female
          </div>
            
            <?php
          } else{           
            ?>
            <div class="mx-4">
            <input
              type="radio"
              class="form-check-input"
              name="gender"
              value="male"
            />male
            <input
              type="radio"
              class="form-check-input"
              name="gender"
              value="female" checked
            />female
          </div> 
            <?php
          }
          ?>
        </div>
        <div class="my-3 mx-3 d-flex text-center flex-row">
          <b>Hobbies :</b>
          <div class="mx-3">

          <?php $h=explode(',',$row['hobbies']); ?>

            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              value="games"
              placeholder="Select ur image"
              <?php if(in_array('games',$h))echo 'checked'; ?>
            />playing games

            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              value="circket"
              placeholder="Select ur image"
              <?php if(in_array('circket',$h))echo 'checked'; ?>
            />Cricket
            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              placeholder="Select ur image"
              value="Books"
              <?php if(in_array('Books',$h))echo 'checked'; ?>
            />Reading Books
            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              placeholder="Select ur image"
              value="music"
              <?php if(in_array('music',$h))echo 'checked'; ?>
            />Hearing music
          </div>
        </div>
        <div class="inp">
          <label for="formControlInput" class="form-label">Age</label>
          <input
            id="formControlInput"
            type="number"
            class="form-control"
            name="age"
            value="<?= $row['age']?>"
            placeholder="Enter ur age"
            required
          />
        </div>
        <div class="inp">
          <label for="formControlInput" class="form-label">Current Time</label>
          <input
            id="formControlInput"
            type="time"
            class="form-control"
            name="time"
            value="<?= $row['time']?>"
            placeholder="time"
            required
          />
        </div>

        <div class="inp">
          <label for="formControlInput" class="form-label"
            >Select ur Language</label
          >
          <select
            name="lang"
            class="form-select"
            id="formControlInput"
            required
            value="<?= $row['lang']?>"
          >
            <option value="tamil">Tamil</option>
            <option value="english">English</option>
          </select>
        </div>
        <div class="inp">
          <label for="formControlInput" class="form-label">Description</label>
          <textarea
            id="formControlInput"
            class="form-control"
            name="description"
            placeholder="Description"
            rows="3"
            required
          ><?= $row['description']?></textarea>
        </div>
      </div>
    </div>
    <div class="container d-flex align-items-center justify-content-center">
      <a href="./index.php"  style="height: 40px; width:80px"  class="btn btn-secondary m-5">Back</a>
      <input type="submit" value="Submit" style="height: 40px; width:80px" class="btn btn-primary mx-3 btn text-white" />
    </div>
  </form>
</body>



<?php 
    }
}else{
  echo "<script>alert('there is no record :(')</script>";
}
}
include('./components/footer.php');?>
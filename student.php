<?php include('./components/header.php');?>

<body class="container d-flex justify-content-center">
  <form
    method="post"
    action="./controller/insertdata.php"
    class="container my-5"
    enctype="multipart/form-data"
    name="insert"
    id="insertForm"
  >
    <div class="container d-flex justify-content-center">
      <h1>Add student</h1>
    </div>
    <div class="container d-flex flex-row">
      <div class="container d-flex flex-column">
        <div class="inp">
          <label for="formControlInput" class="form-label">Enter a name</label>
          <input
            type="text"
            class="form-control"
            name="name"
            id="name"
            placeholder="Enter a Name"
          />
          <span id="form-err"></span>
        </div>
        <div class="inp">
          <label for="dob" class="form-label">Date of Birth</label>
          <input
            id="dob"
            type="date"
            class="form-control"
            name="dob"
            placeholder="Enter a DOB"
          />
        </div>

        <div class="inp">
          <label for="email" class="form-label">Email address</label>

          <input
            id="email"
            type="email"
            class="form-control"
            name="email"
            placeholder="Enter a Email"
          />
        </div>

        <div class="inp">
          <label for="password" class="form-label">Password</label>

          <input
            id="password"
            type="password"
            class="form-control"
            name="password"
            placeholder="Enter a password"
          />
        </div>

        <div class="inp">
          <label for="phno" class="form-label">Phone no</label>

          <input
            id="phno"
            type="number"
            class="form-control"
            name="phno"
            placeholder="Enter a Phone no"
          />

          <div class="inp">
            <label for="image" class="form-label"
              >Select ur image</label
            >
            <input
              id="image"
              type="file"
              class="form-control"
              name="image"
              placeholder="Select ur image"
              required
            />
          </div>
        </div>
      </div>
      <div class="container d-flex flex-column">
        <div class="my-3 mx-3 d-flex text-center flex-row">
          <b>Gender :</b>
          <div class="mx-4" id="gender">
            <label ><input
              type="radio"
              class="form-check-input"
              name="gender"
              value="male"
            /> Male</label>
            <label>
            <input
              type="radio"
              class="form-check-input"
              name="gender"
              value="female"
            />Female
            </label>
            
          </div>
        </div>
        <div class="my-3 mx-3 d-flex text-center flex-row">
          <b class="mr-3">Hobbies:</b>
          <div class="mx-3">

          <label>

              <input
              type="checkbox"
              class="form-check-input hob"
              name="Hobbies[]"
              value="games"
              placeholder="Select ur image"
            />Playing games

          </label>
          
            <label>

              <input
              type="checkbox"
              class="form-check-input hob"
              name="Hobbies[]"
              value="circket"
              placeholder="Select ur image"
            />Cricket
            
            </label>
            <label>

            <input
              type="checkbox"
              class="form-check-input hob"
              name="Hobbies[]"
              placeholder="Select ur image"
              value="Books"
            />Reading Books
            
            </label>
            <label>

            <input
              type="checkbox"
              class="form-check-input hob"
              name="Hobbies[]"
              placeholder="Select ur image"
              value="music"
            />Hearing music
          
            </label>
            </div>
        </div>
        <div class="inp">
          <label for="age" class="form-label">Age</label>
          <input
            id="age"
            type="number"
            class="form-control"
            name="age"
            placeholder="Enter ur age"
          />
        </div>
        <div class="inp">
          <label for="time" class="form-label">Current Time</label>
          <input
            id="time"
            type="time"
            class="form-control"
            name="time"
            placeholder="time"
          />
        </div>

        <div class="inp">
          <label for="lang" class="form-label"
            >Select ur Language</label
          >
          <select
            name="lang"
            class="form-select"
            id="lang"
          >
            <option value="tamil">Tamil</option>
            <option value="english">English</option>
          </select>
        </div>
        <div class="inp">
          <label for="description" class="form-label">Description</label>
          <textarea
            id="description"
            class="form-control"
            name="description"
            placeholder="Description"
            rows="3"
          ></textarea>
        </div>
      </div>
    </div>
    <div class="container d-flex flex-rows mt-5 justify-content-center">
        <a href="./index.php" style="height: 40px; width:80px" class="btn btn-primary bg-light mx-3 text-dark">Back  </a>
        <input type="reset" value="Reset" style="height: 40px; width:80px" class="btn btn-secondary  mx-3 text-white" />
        <input type="button" value="Submit" id="test" style="height: 40px; width:80px" class="btn btn-primary mx-3 btn text-white" />
    </div>
  </form>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script src="./js/scirpt.js"></script>


<?php include('./components/footer.php');?>
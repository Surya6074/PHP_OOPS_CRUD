<?php include('./components/header.php');?>
<body class="container d-flex justify-content-center">
  <form
    method="post"
    action="./controller/insertdata.php"
    class="container my-5"
    enctype="multipart/form-data"
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
            id="formControlInput"
            placeholder="Enter a Name"
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
            placeholder="Enter a Phone no"
          />

          <div class="inp">
            <label for="formControlInput" class="form-label"
              >Select ur image</label
            >
            <input
              id="formControlInput"
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
              value="female"
            />female
          </div>
        </div>
        <div class="my-3 mx-3 d-flex text-center flex-row">
          <b>Hobbies :</b>
          <div class="mx-3">
            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              value="games"
              placeholder="Select ur image"
            />playing games

            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              value="circket"
              placeholder="Select ur image"
            />Cricket
            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              placeholder="Select ur image"
              value="Books"
            />Reading Books
            <input
              type="checkbox"
              class="form-check-input"
              name="Hobbies[]"
              placeholder="Select ur image"
              value="music"
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
          ></textarea>
        </div>
      </div>
    </div>
    <div class="container d-flex flex-rows mt-5 justify-content-center">
        <a href="./index.php" style="height: 40px; width:80px" class="btn btn-primary bg-light mx-3 text-dark">Back  </a>
        <input type="reset" value="Reset" style="height: 40px; width:80px" class="btn btn-secondary  mx-3 text-white" />
        <input type="submit" value="Submit" style="height: 40px; width:80px" class="btn btn-primary mx-3 btn text-white" />
    </div>
  </form>
</body>



<?php include('./components/footer.php');?>
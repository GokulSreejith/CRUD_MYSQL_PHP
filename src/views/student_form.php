<!-- Header -->
<?php require __DIR__ . "/components/header.php" ?>

<!-- Constant -->
<?php require __DIR__ . "/../config/constant.php" ?>


<div class="container p-5">
  <div class="card mx-3 mb-4  shadow-lg" style="border-radius: 10px; border-left:8px #007bff solid; border-right: none; border-top:none; border-bottom:none">
    <div class="card-body">
      <!-- <h4 class="card-title mb-4 mt-2 text-primary text-uppercase">Add Student</h4> -->

      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <h4 class="card-title mb-3 text-primary text-uppercase">Add Student</h4>
          <!-- <form class="d-flex mb-3">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form> -->
          <button class="btn btn-outline-primary mb-3" type="submit">Back</button>
        </div>
      </nav>

      <form>
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingTextInput1" placeholder="Name">
              <label for="floatingTextInput1">Name</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingTextInput2" placeholder="Register Number">
              <label for="floatingTextInput2">Register Number</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingEmailInput" placeholder="Email">
              <label for="floatingEmailInput">Email address</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingEmailInput" placeholder="Phone Number">
              <label for="floatingEmailInput">Phone</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Select Your Gender</option>
                <option value="M">MALE</option>
                <option value="F">FEMALE</option>
              </select>
              <label for="floatingSelect">Gender</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
              <input type="date" class="form-control" id="floatingTextInput2" placeholder="Register Number">
              <label for="floatingTextInput2">Date Of Birth</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-6">
            <div class="form-floating mb-4">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Select Department</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="MECH">MECH</option>
              </select>
              <label for="floatingSelect">Department</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-floating mb-3">
              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Select Year</option>
                <option value="First Year">First Year</option>
                <option value="Second Year">Second Year</option>
                <option value="Third Year">Thrid Year</option>
                <option value="Fourth Year">Fourth Year</option>
              </select>
              <label for="floatingSelect">Year</label>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-floating mb-4">
            <input type="email" class="form-control" id="floatingEmailInput" placeholder="Email">
            <label for="floatingEmailInput">College Name</label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-1">Submit</button>
      </form>
    </div>
  </div>
</div>
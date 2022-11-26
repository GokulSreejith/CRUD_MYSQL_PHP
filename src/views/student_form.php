<?php
// Database Connection
require __DIR__ . "/../config/connection.php";

// <!-- Constant -->
require __DIR__ . "/../config/constant.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <!-- Header -->
  <?php require __DIR__ . "/components/header.php" ?>


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
            <a class="btn btn-outline-primary mb-3" href="index.php">Back</a>

          </div>
        </nav>

        <form>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="student-name" placeholder="Name">
                <label for="student-name">Name</label>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="reg_no" id="register-number" placeholder="Register Number">
                <label for="register-number">Register Number</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="student-email" placeholder="Email">
                <label for="student-email">Email address</label>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-floating mb-3">
                <input type="phone" class="form-control" name="phone" id="student-phone" placeholder="Phone Number">
                <label for="student-phone">Phone</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-floating mb-3">
                <select class="form-select" id="student-gender" aria-label="Floating gender label select">
                  <option selected>Select Your Gender</option>
                  <option value="M">MALE</option>
                  <option value="F">FEMALE</option>
                </select>
                <label for="student-gender">Gender</label>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-floating mb-3">
                <input type="date" class="form-control" id="student-DOB" placeholder="Register Number">
                <label for="student-DOB">Date Of Birth</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 col-md-6">
              <div class="form-floating mb-4">
                <select class="form-select" id="student-department" aria-label="Student Department">
                  <option selected>Select Department</option>
                  <option value="CSE">CSE</option>
                  <option value="ECE">ECE</option>
                  <option value="MECH">MECH</option>
                </select>
                <label for="student-department">Department</label>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-floating mb-3">
                <select class="form-select" id="student-year" aria-label="Student Year">
                  <option selected>Select Year</option>
                  <option value="First Year">First Year</option>
                  <option value="Second Year">Second Year</option>
                  <option value="Third Year">Thrid Year</option>
                  <option value="Fourth Year">Fourth Year</option>
                </select>
                <label for="student-year">Year</label>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-floating mb-4">
              <input type="email" class="form-control" id="student-college" placeholder="College Name">
              <label for="student-college">College Name</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mt-1">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
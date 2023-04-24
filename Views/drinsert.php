<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Patient Results</title>
</head>
<body><nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="hmpg.php">
        Home
      </a>
      </ul>
    </div>

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Avatar -->
      <div class="dropdown p-2">
       <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
          <img src="https://i.pinimg.com/736x/7b/3d/85/7b3d8588da1d05a355bfbaaf77dc2c7f.jpg" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy">
          </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="drhome.php">Doctor profile</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="drsignout.php">Logout</a></li>
    </ul>
  </div>
</div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<section class="vh-100" style="background-color: #eee;">
<div class="container mt-5">
<div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
<form class="mx-1 mx-md-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <h2 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Patient Information</h2>
    <div class="input-group mb-3 col-md-20">
  <span class="input-group-text" id="basic-addon1">Patient Name</span>
  <input type="text" class="form-control" name="ptname" placeholder="Name" aria-label="pname" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 col-md-20">
  <span class="input-group-text" id="basic-addon1">Patient Mobile Number</span>
  <input type="text" class="form-control" name="ptmob" placeholder="Mobile Number" aria-label="pmob" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 col-md-15">
  <span class="input-group-text" id="basic-addon1">Patient Age</span>
  <input type="text" class="form-control" placeholder="Age" name="ptage" aria-label="page" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 col-md-15">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Patient Blood Group</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="blgrp">
    <option selected>Select Group</option>
    <option>O+</option>
    <option>A+</option>
    <option>B+</option>
    <option>AB+</option>
    <option>O-</option>
    <option>A-</option>
    <option>B-</option>
    <option>AB-</option>
  </select>
</div>
<div class="input-group mb-3  col-md-15">
  <div class="input-group-prepend">
    <span class="input-group-text">Checkup Summary</span>
  </div>
  <textarea class="form-control" aria-label="With textarea" name="desp" rows=5 placeholder="Description"></textarea>
</div>
<div class="input-group mb-3 col-md-15">
  <span class="input-group-text" id="basic-addon1">Next Check-up Date</span>
  <input type="date" class="form-control" name="chkdate" aria-label="page" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 justify-content-center align-items-center col-md-15">
    <button type="submit" class="btn btn-primary" name="btn" data-bs-target="#exampleModal">Submit</button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</section>
<?php
    if(isset($_POST['btn'])) {
        $host ="localhost";
        $user ="root";
        $pass ="";
        $conn=mysqli_connect($host,$user,$pass,"healthorganization");
        $name = $_POST['ptname'];
        $mob = $_POST['ptmob'];
        $age = $_POST['ptage'];
        $blgp = $_POST['blgrp'];
        $chsum = $_POST['desp'];
        $nxdat = $_POST['chkdate'];
        $sql="INSERT INTO drpateint VALUES('$name','$age','$blgp','$chsum','$nxdat','$mob')";
        $retval=mysqli_query($conn,$sql);
        if($retval)
            echo('<!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>');
        else
            die("Error");
    }
?>
</body>
</html>
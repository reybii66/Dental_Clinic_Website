<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Profile</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="hmpg.php">
        Home
      </a>
      </ul>
    </div>

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Avatar -->
      <div class="dropdown p-3">
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
<section class="pt-5" style="background-color: #eee;">
    <div class="container py-5 align-items-center">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Patient Name</span>
  <input type="text" class="form-control" name="ptname" placeholder="Name" aria-label="patname" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Patient Phone Number</span>
  <input type="text" class="form-control" placeholder="Mobile Number" name="ptphno" aria-label="phno" aria-describedby="basic-addon1">
</div>
<div class="container-fluid mt-3">
<button button class="btn btn-primary" type="submit" data-bs-toggle="offcanvas" data-bs-target="#demo"name="btn">Search</button>
</div>
</div>
    </form>
</div>
</section>
</body>
</html>
<?php
    if(isset($_POST['btn'])) {
    $host ="localhost";
    $user ="root";
    $pass ="";
    $conn=mysqli_connect($host,$user,$pass,"healthorganization");
    $pname=$_POST['ptname'];
    $pmob=$_POST['ptphno'];
    $sql= "SELECT * FROM patienttkn WHERE pt_name='$pname' AND pt_phn='$pmob'";
    $retval=mysqli_query($conn,$sql);
    if($retval == null)
        echo("Invalid Patient");
    echo('
    <table class="table table-striped table-dark><tr><td scope="col"></td><td scope="col">Patient Name</td><td scope="col">Pateint Age</td><td scope="col">Patient Gender</td>
    <td scope="col">Patient Mobile Number</td><td scope="col">Patient Address</td></tr>');
    while($row=mysqli_fetch_array($retval,MYSQLI_NUM)){
        echo"<tr><td>'$row[0]'</td><td>'$row[1]'</td><td>'$row[2]'</td><td>'$row[3]'</td><td>'$row[4]'</td>
        </tr>";
    }
    echo"</div>
    </div></table>";
}
?>
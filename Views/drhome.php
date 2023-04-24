<?php
session_start();
if(!$_SESSION['user_name']){
  header('Location:drslogin.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dr. Profile</title>
</head>
<body style="background-image: url('https://images.creativemarket.com/0.1.0/ps/8732251/600/400/m2/fpnw/wm1/a7dthh64bqxghk3tdzeqgixzzgw3ibigxbijfalsmgem91r954pgcwcfba4lkxmy-.jpg?1594913317&s=9d5723cf300e73f72877a71d451730a4&fmt=webp');">
    <!-- Navbar -->
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
      <a class="navbar-brand mt-2 mt-lg-0" href="hmpg.php">
        Home
      </a>
      </ul>
    </div>

    <!-- Right elements -->
    <div class="d-flex align-items-center ">
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
<!-- Navbar -->
<!-- <h1><?php ?></h1> -->
<section class="pt-5" style="background-color: #eee;">
    <div class="container py-5 align-items-center">
    <div class="row justify-content-center">
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="btn btn-secondary btn-lg accordion-button collapsed col-md-12" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Patient Search
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><a href="drsinterface.php">To search the pateint deatils Click</a></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="btn btn-secondary btn-lg accordion-button collapsed col-md-18" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Add Patient Checkup Summary
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><a href="drinsert.php">To add Patient Checkup Summary Click</a></div>
    </div>
  </div>
</div>
</div>
</section>
</body>
</html>